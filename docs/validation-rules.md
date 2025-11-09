# Validation — règles principales

## Clients
- `type` ∈ {PERSON, COMPANY}
- `name` required (PERSON) | `company_name` required (COMPANY)
- `email` email|nullable + unique par user
- `billing_address` required

## Items (devis/factures)
- `label` required|min:3
- `qty` integer|min:1|max:9999
- `unit_price_ht` numeric|min:0
- `tva_rate` in:0,5.5,10,20

## Devis
- `client_id` required|exists:clients,id
- `quote_date` date
- `status` contrôlé par service (pas via payload libre)
- totaux **recalculés** côté serveur

## Factures
- `issue_date` date|required
- `due_date` date|after_or_equal:issue_date
- transition `paid` nécessite au moins 1 `payment`

## Paiements
- `amount` numeric|min:0.01|max:total_ttc
- `paid_at` date|required
- `method` ∈ {transfer,card,cash,paypal,stripe}

## Profil juridique
- `legal_status` ∈ {ME,SASU,EURL,EI,...}
- `vat_regime` ∈ {NO_VAT, VAT_STANDARD, VAT_FRANCHISE}
- Si `NO_VAT` → mention 293B **obligatoire** (auto-injectée)
