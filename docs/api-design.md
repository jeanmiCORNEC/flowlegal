
---

# `docs/api-design.md`

# FlowLegal — API (MVP v0.1)

Base: `/api` (auth Sanctum).  
Réponses JSON; validation via FormRequest; pagination Laravel.

## Auth / Profil
- `POST /login` / `POST /register` / `POST /logout`
- `GET /me` → profil + settings + profile juridique (jointure)
- `PUT /me` → mise à jour profil (sans fichier)
- `POST /me/logo` (multipart) → upload logo, retourne `logo_url`

## Clients
- `GET /clients?search=&page=1`
- `POST /clients` `{name,type,billing_address,...}`
- `GET /clients/{id}`
- `PUT /clients/{id}`
- `DELETE /clients/{id}`

## Devis
- `GET /quotes?status=&client_id=&page=1`
- `POST /quotes` + items
- `GET /quotes/{id}`
- `PUT /quotes/{id}` (items inclus)
- `POST /quotes/{id}/send` → status `sent`, génère PDF, envoi email (plus tard)
- `POST /quotes/{id}/accept` → status `accepted`
- `GET /quotes/{id}/pdf` → download
- **Lien public signature** : `GET /public/sign/{token}` (vue publique), `POST /public/sign/{token}` (signature OK)

## Factures / Paiements
- `GET /invoices?status=&client_id=&page=1`
- `POST /invoices` + items (à partir d’un devis accepté ou libre)
- `GET /invoices/{id}`
- `PUT /invoices/{id}`
- `POST /invoices/{id}/send`
- `POST /invoices/{id}/mark-paid` `{amount,paid_at,method,reference}`
- `GET /invoices/{id}/pdf`
- `GET /payments?invoice_id=`

## Dashboard
- `GET /dashboard/summary` → CA du mois, #devis, #factures en retard, etc.

## Vérification légale (MVP simple)
- Hook interne avant génération PDF :
  - ME + NO_VAT → forcer la mention 293B
  - B2C vs B2B : adresse cliente requise
  - afficher la liste des erreurs bloquantes
