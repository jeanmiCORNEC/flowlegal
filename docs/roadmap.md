# Roadmap MVP (3 sprints de 2 semaines)

## Sprint 1 — Base & Clients
- [ ] Migrations + modèles + factories (Users, UserProfiles, Clients)
- [ ] Auth Breeze (déjà OK)
- [ ] CRUD Clients (API + pages Inertia)
- [ ] Upload logo profil (local: `public`, prod: `s3`)
- [ ] Tests Feature: Auth, Clients CRUD
- [ ] CI verte (déjà OK)

## Sprint 2 — Devis
- [ ] Générateur de références `QYYYY-NNNN` par user
- [ ] Devis + items (API + pages + preview)
- [ ] Signature publique (token)
- [ ] Génération PDF (wkhtmltopdf ou Browsershot)
- [ ] Vérification légale minimale (ME / mention 293B)
- [ ] Tests: création, transitions statut, signature

## Sprint 3 — Factures & Paiements
- [ ] Générateur de références `FYYYY-NNNN`
- [ ] Factures + items (depuis devis accepté ou libre)
- [ ] Paiements + “mark paid”
- [ ] Relance simple (flag late selon `due_date`)
- [ ] Dashboard summary
- [ ] Tests: totaux, paiements, late, dashboard
