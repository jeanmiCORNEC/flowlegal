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
        string email
        string password
        string logo_path
        datetime created_at
        datetime updated_at
    }

    USER_PROFILES {
        bigint user_id PK
        enum legal_status
        enum vat_regime
        string siret
        string company_name
        text legal_address
        string activity_label
        json settings
    }

    CLIENTS {
        bigint id PK
        bigint user_id FK
        string type
        string name
        string company_name
        string email
        string siret
        text billing_address
        json meta
    }

    QUOTES {
        bigint id PK
        bigint user_id FK
        bigint client_id FK
        string ref
        date quote_date
        enum status
        decimal total_ht
        decimal total_tva
        decimal total_ttc
        text notes
    }

    INVOICES {
        bigint id PK
        bigint user_id FK
        bigint client_id FK
        bigint quote_id FK
        string ref
        date issue_date
        date due_date
        enum status
        decimal total_ht
        decimal total_tva
        decimal total_ttc
    }

    PAYMENTS {
        bigint id PK
        bigint user_id FK
        bigint invoice_id FK
        date paid_at
        decimal amount
        enum method
        string reference
    }
