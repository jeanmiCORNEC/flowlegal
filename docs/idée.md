1️⃣ Le Pain Point (problème réel et profond)
💬 Description

Les freelances techniques, créatifs ou consultants vivent tous la même douleur :

“Je passe un temps fou à gérer mes devis, avenants, factures et relances… dans 4 outils différents.”

Le workflow “Devis → Contrat → Livraison → Facturation → Paiement” est morcelé entre :

Google Docs / Word pour les devis et avenants

Signatures manuelles ou HelloSign (souvent trop cher)

Facturation sur Notion / Excel / Freebe / Quickbooks

Suivi paiement via relevé bancaire

Relances manuelles par email

Résultat : stress, erreurs, factures perdues, paiements en retard, mauvaise visibilité du cash-flow.

🧩 Pourquoi ce n’est pas un simple “désagrément”

Parce que cela touche directement à la trésorerie — donc au cœur de la survie freelance.
C’est un “pain point monétaire” : il ne se résout pas par une habitude, mais par un outil bien pensé.

2️⃣ La Niche Cible

🎯 Freelances et micro-agences (1–3 personnes), principalement dans les services intellectuels :

Développeurs web / mobile / IA

UX/UI designers

Rédacteurs / copywriters / traducteurs

Consultants indépendants (SEO, marketing, gestion de projet)

Caractéristiques :

Envoient 3 à 10 devis/mois.

Ont 2 à 5 projets actifs à un instant T.

Utilisent Google Drive / Notion / Excel / Freebe.

Souhaitent garder le contrôle sans ERP ni CRM lourds.

3️⃣ 🔎 Preuve de Demande (validation marché)
Extraits réels :

Reddit r/Freelance :

“Tracking quotes, invoices and follow-ups manually is killing my time. There’s nothing simple that connects them all.”

Indie Hackers :

“Freebe is good but only for invoicing — I still need to manually sign quotes and track partial payments.”

Capterra / G2 sur outils de facturation :
⭐ 3/5 “The invoicing part is fine, but I wish it had a proper quote & follow-up flow.”

Signal de marché :

Volume stable : recherche Google Trends “freelance invoice software” + “devis freelance” → stable depuis 5 ans.

Donc evergreen : pas lié à une mode, lié à la nature même du travail indépendant.

4️⃣ 🔍 Analyse Concurrentielle
Outil	Points forts	Faiblesses exploitables
Freebe (FR)	UX claire, facturation conforme.	Pas de devis/contrat connectés, pas de signature intégrée, réservé auto-entrepreneur.
Quickbooks / Henrri	Fiable, conformité.	Complexe, interface peu intuitive pour solos.
Notion templates / Excel	Gratuit, flexible.	Pas d’automatisation, perte de temps, erreurs fréquentes.

💥 Faille exploitable : Aucun outil ne couvre tout le flux “devis → signature → facture → relance” dans une interface minimaliste, pensée freelance d’abord.

🚀 PROJET SAAS : FlowQuote
🧭 Nom & Slogan

FlowQuote

“Du devis au paiement, sans friction.”

5️⃣ 💎 Proposition de Valeur Unique (PVU)

Nous aidons les freelances à se faire payer plus vite en simplifiant tout le parcours du devis à la facture, sans complexité ni outils multiples.

6️⃣ ⚙️ MVP — Fonctionnalités Essentielles
Fonctionnalités à J+30 (MVP)

Création rapide de devis & contrats

Éditeur simple (template + variables : client, tarifs, délais)

Export PDF & signature numérique intégrée

Conversion automatique en facture

En 1 clic, le devis signé devient une facture

Calcul automatique TVA / acomptes

Suivi paiement / relance automatique

Détection manuelle ou import paiement

Email de relance préformaté déclenché X jours après échéance

Tableau de bord cash-flow

Devis en attente / Factures payées / Total du mois

Notifications et rappels

“Devis signé il y a 7 jours → facturer ?”

“Facture impayée depuis 14 jours → relancer ?”

(rien de plus, rien de moins)

7️⃣ 🏗️ Architecture Technique
🔹 Backend : Laravel

Authentification : Laravel Breeze + Sanctum

Gestion abonnements : Laravel Cashier (Stripe)

Modèles PDF : Laravel DOMPDF

Emailing : Postmark ou Mailgun

Cron jobs : relances automatiques

🔹 Base de Données (MySQL)
Table	Champs clés	Description
users	id, name, email, password	Freelance
clients	id, user_id, name, email, company	Données client
quotes	id, client_id, total, status, pdf_path	Devis
invoices	id, quote_id, status, due_date, pdf_path	Factures
payments	id, invoice_id, amount, date	Paiements
reminders	id, invoice_id, date, sent	Relances automatiques
subscriptions	id, user_id, plan, stripe_id	Abonnements
🔹 Frontend : Vue.js (Composition API)

Stack SPA simple avec Axios (API REST Laravel)

4 pages : Dashboard / Clients / Devis / Factures

Composants réutilisables : QuoteCard, InvoiceCard, PaymentChart

Style : Tailwind CSS (sobre, moderne)

8️⃣ 💰 Modèle Économique
Plan	Prix	Détails
Essai Gratuit	14 jours	Limité à 3 clients / 3 devis
Standard	15 €/mois	Devis illimités, factures illimitées, relances automatiques
Pro	29 €/mois	Signature numérique intégrée + rapports avancés

🎯 Objectif palier 1 :

20 utilisateurs payants → ≈ 400 €/mois

Objectif atteignable < 3 mois avec 2 h/jour d’effort marketing ciblé.

9️⃣ 📈 Stratégie de Lancement (10 premiers clients)
Canal d’acquisition principal :

Reddit / Indie Hackers / LinkedIn / Malt France

Rechercher manuellement les posts “freelance + devis + facture + relance”

Poster un commentaire / message personnel :

“Je teste un outil qui relie devis → facture → relance.
Si tu veux l’essayer gratuitement, je cherche 10 freelances bêta.”

Message clé :

“Tu perds du temps entre ton devis Word, ta signature, et ta facture ?
FlowQuote te fait tout faire au même endroit, sans usine à gaz.”

Autres canaux :

Mini outil gratuit : “Calculateur de délais de paiement légal + modèle de relance PDF” (génère du trafic + mailing list).

Intégration Malt / LinkedIn : partage de témoignages de bêta-testeurs.

Newsletter freelances (ex : Tribu Indé, WeLoveDevs) → reach qualifié.

🔟 🧱 Roadmap technique (12 semaines)
Semaine	Objectif principal	Délivrable
1-2	Scaffolding Laravel + Auth + CRUD Clients	Backend prêt
3-4	Devis + PDF + signature simple	MVP version 0.1
5-6	Facture + paiement + relance auto	MVP complet
7-8	Dashboard + analytics simple	version bêta
9	Stripe + Cashier + plans	bêta monétisable
10	Landing page marketing	flowquote.io
11-12	Tests, retours bêta, corrections	Lancement public
11️⃣ 🔮 Extension future

Modules “multi-devis / devis récurrents” (agences récurrentes)

Connexion bancaire (via API Bridge) pour marquer paiements auto.

Intégration Notion / Zapier.

Statistiques de cash-flow / saisonnalité.

🎯 Pourquoi cette idée coche toutes les cases LeanLauncher
Critère	Validation
Pain Point fort (émotionnel + financier)	✅ Gestion du cash-flow
Marché accessible & evergreen	✅ Freelances = segment en croissance continue
Faisable en solo (Laravel + Vue)	✅ MVP < 3 mois
Proposition différenciante	✅ Flux complet et simple
Chemin clair vers la rentabilité	✅ < 6 mois réaliste

⚖️ PROBLÉMATIQUE LÉGALE : un vrai mur pour les indépendants
1️⃣ Réalité terrain

Un freelance en France (ou Europe) est légalement responsable du contenu de ses documents :

mentions légales spécifiques à son statut (AE, EURL, SASU, etc.)

mentions obligatoires selon TVA / franchise / acompte / paiement échelonné

pénalités de retard, indemnité forfaitaire (40 €)

mentions liées à la prestation intellectuelle, droits d’auteur, ou cession de propriété

Et aujourd’hui, aucun outil ne gère ces nuances sans prise de tête.

Freebe le fait pour les auto-entrepreneurs, mais :

❌ ne couvre pas les SASU / EURL
❌ ne gère pas les avenants contractuels
❌ ne vérifie pas la conformité (mention de pénalités, CGV, etc.)

Ce “vide légal” crée un risque caché pour des milliers d’indépendants.

🧩 ÉVOLUTION DU CONCEPT : FlowQuote → FlowLegal

“L’assistant facture-contrat intelligent, conforme à votre statut.”

💎 Nouvelle proposition de valeur

FlowLegal aide les freelances et micro-entreprises à créer, signer et gérer des devis/factures 100 % conformes à leur statut juridique — sans comptable ni avocat.

⚙️ MVP REVU (juridiquement pertinent)
✅ Fonctionnalités essentielles

Assistant de configuration juridique (à l’onboarding)

Tu choisis ton statut : Auto-entrepreneur / SASU / EURL / Portage / Profession libérale

L’outil charge automatiquement :

mentions légales requises

pénalités légales applicables

mentions TVA (régime, taux)

mentions spécifiques “non soumis à TVA”

Exemple :

Vous êtes : Auto-entrepreneur, franchise de base.
→ Mention : “TVA non applicable, article 293 B du CGI.”
→ Pénalités de retard : 3 × taux légal, + 40€ d’indemnité forfaitaire.”


Éditeur de document intelligent

Modèles dynamiques :

“Devis Prestation intellectuelle”

“Facture d’acompte”

“Facture finale”

Variables automatiques selon profil :

{{raison_sociale}}, {{siret}}, {{mention_tva}}, {{penalite_retard}}

Vérification de conformité

Avant génération PDF, check des champs obligatoires :

N° SIRET, date émission, délai paiement, pénalité, conditions, etc.

Si un champ manque → warning :

⚠️ Mention de pénalités obligatoire pour les pros. Ajoutez-la ou cochez “non assujetti”.

Signature + relance automatique

Signature intégrée (Simple E-Sign)

Relance paiement après X jours

Suivi statut : “Devis signé / Facture émise / Paiement partiel / Retardé”

Archivage légal

Chaque document PDF est stocké avec horodatage et hash SHA-256 pour preuve (preuve d’émission).

Export comptable possible.

🧠 Intelligence embarquée (différenciation forte)

Au lieu d’un simple modèle statique, FlowLegal est un moteur de conformité dynamique.

Un fichier JSON central contient les mentions légales par statut et par pays.
Exemple :

{
  "auto_entrepreneur": {
    "mentions": [
      "TVA non applicable, art. 293B du CGI.",
      "Aucune retenue de TVA sur les montants facturés."
    ],
    "penalite": "3x taux légal + 40€ forfaitaire"
  },
  "sasu": {
    "mentions": [
      "TVA au taux applicable de {{taux_tva}}%",
      "En cas de retard, pénalité de {{taux_penalite}}%."
    ],
    "penalite": "5x taux légal"
  }
}


➡️ Cela permet d’ajouter ou modifier les statuts sans toucher au code — ton SaaS devient évolutif et conforme à chaque évolution légale.

🧩 Stack technique adaptée
Backend : Laravel

Auth + multi-rôle utilisateur

Cache et configuration légale en JSON versionné

Génération PDF via Laravel Snappy (wkhtmltopdf) pour une qualité d’impression pro

Tâches CRON : relances + archivage

API REST exposée vers Vue

Frontend : Vue.js (Composition API + Tailwind)

Dashboard “Flux de documents”
(statut : brouillon / signé / payé / en retard)

Form Wizard (profil juridique → création → signature)

Validation visuelle des mentions

Preview PDF en direct

🧮 Modèle économique ajusté
Plan	Prix	Avantage
Essai gratuit 14 j	–	3 documents maximum
Freelance (auto-entrepreneur)	15 €/mois	Mentions automatiques + signatures + relances
Pro (SASU, EURL, portage)	25 €/mois	Support statutaire complet + archive légale + export comptable
Expert	49 €/mois	Ajout de modèles personnalisés + API externe (Zapier, Notion, etc.)

🟢 Evergreen → les indépendants sont un flux constant, avec taux de churn bas si outil fiable + simple.

🧭 Stratégie d’acquisition

Canaux prioritaires

LinkedIn : posts éducatifs “Erreurs légales sur vos factures ?”

Subreddits / IndieHackers / WeLoveDevs / Malt

Partenariats micro-influenceurs comptables / freelances
(ex : “Les Jeunes Indépendants”, “Tribu Indé”)

Lead magnet

“Vérificateur gratuit de conformité facture” (outil web embarqué → lead magnet)

Tu colles une facture PDF → FlowLegal te dit “mention manquante / pénalités incorrectes”.

Campagne emailing ciblée

Audience : freelances tech / graphistes / rédacteurs via annuaires Malt ou IndieList.

🧱 Avantage durable (Moat)
Barrière	Description
Réglementaire	Maintenir une base de règles légales à jour donne un avantage structurel difficile à reproduire.
Confiance	Tu touches à un domaine où la fiabilité = fidélité longue.
Réputation	Un outil qui “protège” tes utilisateurs juridiquement se recommande vite (fort bouche-à-oreille).
Scalabilité	Ajout futur : Belgique, Suisse, Canada francophone → même base, nouvelles règles JSON.
🧠 Vision long terme

FlowLegal peut devenir :

“Le copilote légal des indépendants européens.”

Modules futurs :

Génération automatique de CGV personnalisées.

Gestion d’acompte, retenue de garantie, droits d’auteur.

Intégration comptable légère (API Dougs, Indy, etc.)

Audit automatique de conformité avant dépôt d’un dossier URSSAF ou TVA.

✅ Résumé stratégique
Élément	Validation
Pain Point profond & evergreen	💰 Conformité légale + trésorerie
Marché clair	Freelances + micro-entreprises
MVP faisable solo	Oui, Laravel + Vue
Barrière à l’entrée	Expertise légale (base de règles dynamiques)
Position unique	Facture & contrat “juridiquement intelligents”
Croissance naturelle	Bouche-à-oreille & SEO éducatif

🧱 1️⃣ Réalité juridique — ce qu’il faut vraiment comprendre
💬 Ce que dit la loi (France 🇫🇷)

Les mentions obligatoires d’une facture dépendent de :

La nature de l’entreprise → auto-entrepreneur, société, etc.

Le type de client → professionnel ou particulier.

La nature de l’activité → prestation de service ou vente de biens.

La fiscalité → TVA, franchise, exonération, etc.

👉 Exemple concret :

Cas	Obligations principales
Électricien en micro-entreprise	Nom, adresse, SIREN/SIRET, date, n° facture, désignation, montant HT/TTC, mention « TVA non applicable, art. 293 B CGI », conditions de paiement, pénalités retard, indemnité 40 €.
SASU d’édition (livres KDP)	Raison sociale, adresse, SIRET, forme juridique (SASU au capital de X €), TVA intracommunautaire, taux/taux réduit, mentions sur droits d’auteur si applicable, conditions paiement, pénalités, CGV éventuelles.

📚 Références légales :

Article L441-9 du Code de commerce

Article 289 du CGI

Décret n° 2019-1413 (facturation électronique)

⚠️ Et oui : ces textes évoluent chaque 1er janvier (nouveaux taux, mentions ou formats électroniques).

🧠 2️⃣ Ce que tu ne dois PAS faire (et ce que tu peux faire intelligemment)

Tu ne peux ni ne dois rédiger toi-même les textes légaux ni garantir la conformité (sinon tu endosses une responsabilité juridique).

Mais tu peux créer un moteur déclaratif, qui repose sur trois piliers :

Sources officielles publiques et à jour.

Référencement croisé (validation) via des experts.

Mise à jour semi-automatique par scraping/API.

🏗️ 3️⃣ Comment industrialiser la conformité dans FlowLegal
🔹 Étape 1 — Créer une base de règles déclarative

Une structure JSON (ou table SQL) qui contient les mentions légales par profil d’entreprise.

Exemple :

{
  "micro_entreprise": {
    "conditions": ["non_tva"],
    "mentions": [
      "TVA non applicable, article 293 B du Code général des impôts",
      "Pénalités de retard : 3 fois le taux d'intérêt légal",
      "Indemnité forfaitaire de 40€ pour frais de recouvrement"
    ],
    "sources": [
      "https://www.service-public.fr/professionnels-entreprises/vosdroits/F31808"
    ]
  },
  "sasu": {
    "conditions": ["tva_normale"],
    "mentions": [
      "Société par Actions Simplifiée Unipersonnelle au capital de {{capital}} €",
      "TVA intracommunautaire : {{numero_tva}}",
      "En cas de retard de paiement, pénalités légales applicables",
      "Indemnité forfaitaire de 40€"
    ],
    "sources": [
      "https://www.service-public.fr/professionnels-entreprises/vosdroits/F22337"
    ]
  }
}


➡️ Cette base peut être enrichie à partir de sources officielles publiques et stables :

Service-Public.fr – Entreprises

Legifrance.gouv.fr

impots.gouv.fr

INSEE API
 (infos entreprise)

data.gouv.fr
 (open data juridique)

🔹 Étape 2 — Mettre en place un système de mise à jour centralisée

Crée une petite admin interne (protégée) :

un panneau où tu peux modifier les mentions, ajouter des statuts, activer/désactiver des mentions légales.

stocké en base + versionné dans Git (via migration).

🧩 Ainsi, si une loi change, tu n’as pas à redéployer le code : tu mets à jour la base, tout s’adapte automatiquement.

🔹 Étape 3 — Avoir un processus de validation continue

Sans être juriste, tu peux t’entourer de 2 “filets de sécurité” légers :

1. Crowd-validation

Crée une option dans ton admin “Soumettre une mention à vérifier” :
→ Les utilisateurs experts (comptables, juristes, pros) peuvent signaler des corrections.
Tu les valides avant déploiement.

2. Validation semestrielle pro

Trouve un partenaire comptable ou juriste freelance (ex : via Malt, Legalstart, ou CaptainContrat) :

Audit express 2x/an (150–250 € par passage).

Contrôle des mentions et ajustements légaux.

Mention “Validé par Cabinet [Nom] le [date]” dans l’app.

💡 Bonus : ça crédibilise ton marketing :

“Nos mentions légales sont vérifiées par un expert-comptable partenaire tous les 6 mois.”

🔹 Étape 4 — Surveiller automatiquement les changements légaux

Tu peux automatiser une veille :

RSS Service-Public.fr (section professionnels)

Moteur de veille via Diffbot ou Scrapy (vérifie changements de texte sur pages clés)

Alerte Google sur mots-clés : "mentions obligatoires facture site:service-public.fr"

Quand un changement est détecté → notification Slack + todo dans ton admin.

🧩 4️⃣ Comment FlowLegal peut “connaître” le bon contexte utilisateur

Lors de l’onboarding :

L’utilisateur choisit son statut juridique
→ Auto-entrepreneur / EURL / SASU / Portage / Indépendant libéral

Il choisit son type d’activité
→ Service / Vente / Mixte / Droits d’auteur

L’outil lui pose 2–3 questions simples :

“Appliquez-vous la TVA ?”

“Facturez-vous des particuliers ou professionnels ?”

“Êtes-vous exonéré (franchise de base) ?”

🎯 En fonction des réponses, FlowLegal active le bon set de mentions dynamiques, sans intervention manuelle.

🧠 5️⃣ Mise à jour sans risque juridique

FlowLegal ne “conseille” pas juridiquement, il fournit un modèle prérempli basé sur les sources officielles :

“Les mentions suivantes sont issues des recommandations de [Service-Public.fr / Code du commerce].
FlowLegal ne remplace pas un conseil juridique, mais automatise les obligations standard pour votre statut.”

✅ Ainsi tu restes légalement dans ton périmètre de prestataire logiciel, pas de conseil.

⚙️ 6️⃣ En résumé : l’architecture conformité = moat durable
Pilier	Description	Exemple
Sources officielles	Service-Public.fr, Legifrance, etc.	Base JSON versionnée
Admin de règles dynamiques	Mettre à jour sans code	“Activer article 293B CGI”
Validation semestrielle pro	Cabinet comptable partenaire	150 €/audit
Crowd-validation	Feedback experts utilisateurs	“Signaler une mention obsolète”
Alerte auto	Scraper + RSS + Slack	Notif dès changement Service-Public
🚀 Conclusion

Tu n’as pas besoin d’être juriste.
Tu dois juste modéliser la logique légale comme un moteur de règles vivantes, et t’entourer d’un micro-réseau d’experts de confiance.

FlowLegal devient alors :

💬 “Le SaaS qui rend la paperasse légale invisible pour les indépendants.”

1) Onboarding juridique (responsabilité utilisateur + cadres automatiques)

À l’inscription, un assistant en 3 étapes :

Profil juridique

statut: micro | sasu | eurl | liberal | portage

tva_regime: franchise | normal | exonere

pays: FR

annee_fiscale_debut: 2025-01-01 (pour le calcul YTD)

(ME) seuil_tva_ht_annuel: ex. 36 800 € (stocké, modifiable par admin règles)

(ME) seuil_majoré_ht: ex. 39 100 € (optionnel si tu veux un “alerte rouge”)

Numérotation & paiements

pattern_facture: FAC-{YYYY}-{SEQ5}

delai_paiement_jours: 30

devise: EUR

Prévisualisation de conformité

coche verte/rouge pour mentions obligatoires selon statut & régime

cas “client pro” vs “client non pro” (affichage des différences de mentions)

⚠️ Texte UI clair : “Vous êtes responsable des informations fournies. FlowLegal applique automatiquement les mentions légales standard en fonction de vos réponses.”

2) Process client Pro vs Non-Pro (B2B vs B2C)

Ajoute dans clients :

is_business (bool)

vat_number (nullable)

country_code

label_type: pro | non_pro (dérivé de is_business)

Règles d’affichage auto (à partir du moteur de conformité)

Client Pro (B2B) :

exige raison_sociale ou nom, SIREN/SIRET si FR (optionnel si étranger), conditions de paiement, pénalités, indemnité 40 €

TVA selon régime utilisateur :

ME en franchise : mention “TVA non applicable, art. 293 B du CGI.”

Régime normal : TVA calculée par ligne (ou total), taux affiché

Client Non-Pro (B2C) :

pas d’indemnité forfaitaire 40 € (réservée B2B)

conditions de paiement & pénalités restent affichables, mais adapte le texte selon recommandations

TVA idem (franchise = mention 293 B ; normal = TTC affiché clairement)

Dans le rule_set JSON, prévoit invoice.b2b.mentions[] et invoice.b2c.mentions[] + required_fields_b2b, required_fields_b2c.

3) ME : gestion du dépassement de seuil TVA

Objectif : l’utilisateur reste responsable, mais tu l’assistes fortement pour éviter l’erreur.

3.1 Modèle & calculs

Table invoices :
amount_ht, amount_tva, amount_ttc, issued_at, status

Table user_accounting_snapshots (ou calcul runtime + cache) :
user_id, fiscal_year, total_ht_ytd, total_ht_rolling_12m, last_recalc_at

Le calcul “rolling 12 mois” est plus précis (cas limites). Garde aussi un YTD simple pour lisibilité.

3.2 Garde-fous UI (Vue)

Lors de la création de facture (ou devis confirmé):

Calcule total_ht_ytd + montant_facture_ht.

Compare au seuil (et seuil majoré si tu le modèles).

Affiche un bandeau de statut :

🟢 < 80% du seuil : “OK”.

🟠 >= 80% : “Attention : vous approchez du seuil de franchise de TVA.”

🔴 >= 100% : “Seuil dépassé.” Blocage doux avec 2 boutons :

“Facturer SANS TVA” (déconseillé) → demande confirmation forte :
“Vous déclarez assumer la conformité. FlowLegal ne conseille pas juridiquement.”
(Traçabilité en DB : user_acknowledged_override_at)

“Passer au régime TVA” (recommandé) → Assistant de bascule

3.3 Assistant de bascule (franchise → TVA normal)

Écran de décision : “À partir de quelle date souhaitez-vous appliquer la TVA ?”

Option par défaut : prochaine facture (Date >= aujourd’hui)

Option avancée : facture courante (si légalement requis selon le cas)

Mise à jour du profil : tva_regime = normal, taux par défaut

Numérotation : au choix

conserver la séquence

ou démarrer nouvelle série (ex. FTVA-{YYYY}-{SEQ5})

Confirmation + Preview des nouvelles mentions légales

Journal d’audit : regime_change_log (qui, quand, pourquoi)

⚠️ Tu ne décides pas légalement pour lui. Tu fournis l’assistant et la traçabilité.

4) Validation “avant PDF”

À la sauvegarde :

POST /api/invoices/validate → renvoie missing_fields[] et warnings[] (ex. dépassement seuil, absence numéro TVA client pro intracom).

Règles minimales :

B2B : pénalités + indemnité 40 € (si FR), conditions de paiement

ME franchise : mention 293 B

Régime normal : TVA par ligne ou TVA total + taux utilisé

Identité vendeur : SIREN/SIRET, adresse, forme (si société), capital (si SASU/EURL), TVA intracom (si applicable)

Numérotation unique et continue par année (scope utilisateur)

5) Backend : ce qu’il faut stocker côté User

Table users_profile (ou users si tu étends) :

statut, tva_regime, seuil_tva_ht_annuel, seuil_tva_ht_majoré, fiscal_year_start

default_vat_rate (si régime normal)

ack_over_threshold_at (si l’utilisateur force sans basculer)

regime_change_log (JSON : {from, to, date, invoice_id?})

6) Jobs & notifications

Nightly job : recalc total_ht_rolling_12m et YTD → envoie email si palier 80% ou 100% franchi.

Webhooks internes : quand un devis est accepté → recalcul “projection” si converti en facture.

Banner persistent sur Dashboard tant que >100% et régime encore “franchise”.

7) Templates de facture (micro vs sasu) + B2B/B2C

Prévois 4 templates Blade (ou 1 avec blocs conditionnels clairs) :

micro + b2b

micro + b2c

sasu + b2b

sasu + b2c

Bloc “mentions légales” inclus automatiquement depuis le moteur de règles :

invoice.common.mentions[]

invoice.b2b.mentions[] / invoice.b2c.mentions[]

invoice.penalties.text (B2B)

invoice.penalties.collection_fee (B2B)

8) Textes UI prêts à l’emploi (copier-coller)

Bannière alerte 80%

“Vous avez atteint 80 % du seuil de franchise de TVA ({{total_ht_ytd}} / {{seuil}}). Anticipez un éventuel passage au régime TVA.”

Bannière alerte 100% (blocage doux)

“Seuil de franchise dépassé ({{total_ht_ytd}} / {{seuil}}).
⚠️ Facturer sans TVA peut engager votre responsabilité.
Choisissez : [Passer au régime TVA] [Continuer sans TVA (je confirme)]”

Confirmation forte

“Je comprends que FlowLegal n’est pas un conseil juridique et que je suis responsable de la conformité de mes factures.”

9) Clauses de responsabilité (à afficher)

Dans l’app (footer des écrans sensibles) :
“FlowLegal applique des mentions standard issues de sources officielles. Vous restez responsable de l’exactitude de vos informations et du respect de vos obligations légales. FlowLegal n’est pas un cabinet juridique ni comptable.”

Dans CGU : préciser la responsabilité limitée et l’usage de sources publiques.

10) Ce qu’un électricien ME aura sur sa facture vs SASU édition KDP

Électricien – Micro-entreprise (franchise de TVA), B2B

Identité (nom, adresse), SIREN/SIRET

N° facture, date, description prestation, total HT = TTC

Mention : “TVA non applicable, article 293 B du CGI.”

Pénalités (B2B) + Indemnité forfaitaire 40 €

Conditions de paiement

SASU – Édition KDP (régime TVA normal), B2C

Raison sociale, forme juridique (SASU), capital, SIRET

N° TVA intracommunautaire

N° facture, date

Lignes HT + TVA (taux applicable selon produit/service) + total TTC

Conditions de paiement (pénalités OK, mais pas d’indemnité 40 € en B2C)

Mentions spécifiques éventuelles liées aux droits d’auteur (si concerné, via rule_set “édition”)

Implémentation rapide (checklist dev)

 Ajout champs statut, tva_regime, seuils côté user

 Ajout is_business, vat_number côté client

 Endpoints validate (renvoie missing_fields, warnings)

 Calcul YTD & rolling_12m + bannières

 Assistant “bascule TVA” + journal d’audit

 4 variantes de rendu (micro/sasu × b2b/b2c) + mentions auto

 Jobs de veille & notifications seuil

 Textes UI + confirmations fortes