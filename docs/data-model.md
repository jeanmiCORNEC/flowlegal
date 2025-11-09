# FlowLegal — Modèle de données (MVP v0.1)

```mermaid
erDiagram
    USERS ||--o{ CLIENTS : has
    USERS ||--o{ QUOTES : has
    USERS ||--o{ INVOICES : has
    USERS ||--o{ PAYMENTS : owns
    USERS ||--|| USER_PROFILES : has

    CLIENTS ||--o{ QUOTES : has
    CLIENTS ||--o{ INVOICES : has

    QUOTES ||--o{ QUOTE_ITEMS : has
    INVOICES ||--o{ INVOICE_ITEMS : has
    INVOICES ||--o{ PAYMENTS : has

    USERS {
      bigint id PK
      string name
      string email U
      string password
      string logo_path? // storage path
      timestamps
    }

    USER_PROFILES {
      bigint user_id PK,FK -> USERS.id
      enum legal_status  // "ME","SASU","EURL",...
      enum vat_regime    // "NO_VAT","VAT_STANDARD","VAT_FRANCHISE"
      string siret?
      string company_name?
      text legal_address
      string activity_label?
      json settings?     // options UI, mentions personnalisées
      timestamps
    }

    CLIENTS {
      bigint id PK
      bigint user_id FK -> USERS.id
      string type   // "PERSON","COMPANY"
      string name
      string company_name?
      string email?
      string siret?
      text billing_address
      json meta?
      timestamps
      UNIQUE (user_id, email)
    }

    QUOTES {
      bigint id PK
      bigint user_id FK
      bigint client_id FK
      string ref U        // ex: Q2025-0001
      date quote_date
      enum status         // "draft","sent","accepted","refused"
      decimal total_ht(12,2)
      decimal total_tva(12,2)
      decimal total_ttc(12,2)
      text notes?
      string pdf_path?    // generated
      string sign_token?  // link signature
      timestamps
      INDEX (user_id, status)
    }

    QUOTE_ITEMS {
      bigint id PK
      bigint quote_id FK
      string label
      integer qty
      decimal unit_price_ht(12,2)
      decimal tva_rate(5,2)    // 0, 5.5, 10, 20
      decimal line_total_ht(12,2)
      decimal line_total_tva(12,2)
      decimal line_total_ttc(12,2)
    }

    INVOICES {
      bigint id PK
      bigint user_id FK
      bigint client_id FK
      bigint quote_id? FK
      string ref U       // ex: F2025-0001
      date issue_date
      date due_date
      enum status        // "draft","sent","paid","late"
      decimal total_ht(12,2)
      decimal total_tva(12,2)
      decimal total_ttc(12,2)
      text payment_terms?
      text notes?
      string pdf_path?
      timestamps
      INDEX (user_id, status, due_date)
    }

    INVOICE_ITEMS {
      bigint id PK
      bigint invoice_id FK
      string label
      integer qty
      decimal unit_price_ht(12,2)
      decimal tva_rate(5,2)
      decimal line_total_ht(12,2)
      decimal line_total_tva(12,2)
      decimal line_total_ttc(12,2)
    }

    PAYMENTS {
      bigint id PK
      bigint user_id FK
      bigint invoice_id FK
      date paid_at
      decimal amount(12,2)
      enum method // "transfer","card","cash","paypal","stripe"
      string reference?
      timestamps
      INDEX (invoice_id)
    }
