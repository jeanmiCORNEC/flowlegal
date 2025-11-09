# 🧾 FlowLegal — User Stories (MVP v0.1)

## 🎯 Objectif du MVP
Permettre à un **freelance ou micro-entrepreneur** de :
- gérer ses **clients**,  
- créer et envoyer des **devis et factures conformes**,  
- bénéficier d’une **vérification légale automatique** selon son statut (ME, SASU, etc.),  
- tout en gardant une interface simple, rapide et claire.

---

## 🧍‍♂️ Module 1 — Authentification & Profil Utilisateur

### US1 — Inscription / Connexion
**En tant qu’utilisateur**, je veux pouvoir m’inscrire avec mon email et un mot de passe afin d’accéder à mon espace sécurisé.

**Critères d’acceptation :**
- L’utilisateur reçoit un email de confirmation.
- Le mot de passe est hashé.
- Validation du formulaire côté client et serveur.

### US2 — Gestion du profil
**En tant qu’utilisateur**, je veux pouvoir modifier mon profil (nom, statut juridique, SIRET, adresse, régime TVA, logo, etc.) afin de personnaliser mes documents.

**Critères d’acceptation :**
- Tous les champs légaux obligatoires sont présents.
- La modification met à jour les mentions légales par défaut.
- Le logo est stocké dans `storage/app/public/users/{id}/`.

---

## 👥 Module 2 — Gestion des Clients

### US3 — CRUD Clients
**En tant qu’utilisateur**, je veux créer, modifier, afficher et supprimer mes clients afin de pouvoir les utiliser dans mes devis et factures.

**Critères d’acceptation :**
- Champs : nom, société, adresse, SIRET (optionnel), email.
- Les clients sont liés à l’utilisateur (`user_id` FK).
- Validation d’unicité sur email + user.

---

## 💼 Module 3 — Devis

### US4 — Création de devis
**En tant qu’utilisateur**, je veux créer un devis à partir d’un client et de lignes de prestations afin de l’envoyer pour signature.

**Critères d’acceptation :**
- Champs : référence, date, client, prestations (titre, quantité, prix HT).
- Le total est calculé automatiquement.
- Statuts possibles : `draft`, `sent`, `accepted`, `refused`.
- Génération PDF avec mentions légales dynamiques selon le statut juridique.

### US5 — Signature et validation
**En tant que client**, je veux pouvoir signer un devis reçu par lien unique afin de le valider électroniquement.

**Critères d’acceptation :**
- Lien unique (token signé).
- Une fois signé → statut `accepted`.
- L’utilisateur reçoit un email de confirmation.

---

## 💰 Module 4 — Factures & Paiements

### US6 — Génération de facture
**En tant qu’utilisateur**, je veux pouvoir générer une facture à partir d’un devis accepté ou manuellement.

**Critères d’acceptation :**
- Champs : référence, date, échéance, conditions de paiement.
- Mentions automatiques selon régime fiscal et seuil TVA.
- Génération PDF conforme.

### US7 — Suivi et relance
**En tant qu’utilisateur**, je veux visualiser mes factures payées/en attente et envoyer des relances automatiques.

**Critères d’acceptation :**
- Statuts : `draft`, `sent`, `paid`, `late`.
- Relance envoyée automatiquement à J+7 après échéance.
- Historique visible dans un onglet “Suivi”.

---

## ⚖️ Module 5 — Règles légales & conformité

### US8 — Onboarding juridique
**En tant qu’utilisateur**, je veux renseigner mon statut juridique, mon régime de TVA et mon activité pour que FlowLegal configure automatiquement mes mentions légales.

**Critères d’acceptation :**
- Choix guidé par étapes (auto-entrepreneur, SASU, etc.).
- Application des mentions adaptées dans les PDF.

### US9 — Vérification de conformité
**En tant qu’utilisateur**, je veux que FlowLegal m’alerte si mes devis ou factures manquent une mention obligatoire.

**Critères d’acceptation :**
- Analyse du contenu avant PDF.
- Messages d’erreur lisibles (“Attention : la mention ‘TVA non applicable – art. 293 B du CGI’ est absente.”).
- Empêche la génération si non conforme.

---

## 📊 Module 6 — Tableau de bord & statistiques

### US10 — Vue d’ensemble
**En tant qu’utilisateur**, je veux voir un tableau de bord récapitulatif de mon activité : CA mensuel, factures en attente, relances en cours.

**Critères d’acceptation :**
- Graphique simple (barres/mois).
- Récapitulatif des devis/factures du mois.
- Indicateur du statut de conformité (% des docs valides).

---

## 🧠 Backlog futur (v2+)
- Intégration Stripe (paiement direct).
- Envoi d’emails personnalisés depuis l’app.
- OCR pour lecture automatique de justificatifs.
- Export comptable (CSV/EBP/QuickBooks).

---

## 📌 Priorisation (MVP v0.1)

| Priorité | Story ID | Description |
|-----------|-----------|--------------|
| 🔥 | US1, US2 | Authentification & profil |
| 🔥 | US3 | Clients |
| 🚀 | US4, US5 | Devis + signature |
| 🚀 | US6, US7 | Factures + relances |
| 💡 | US8, US9 | Vérification légale |
| 🌙 | US10 | Tableau de bord |
