<?php
/**
 * ============================================
 * ANNUAIRE-BORNE-RECHARGE.FR - CONFIGURATION
 * ============================================
 */

define('SITE_NAME', 'trouver-devis-borne-recharge.fr');
define('SITE_DOMAIN', 'trouver-devis-borne-recharge.fr');
define('SITE_URL', 'https://trouver-devis-borne-recharge.fr');
define('SITE_EMAIL', 'contact@trouver-devis-borne-recharge.fr');
define('SITE_TAGLINE', "Installation de Bornes de Recharge Partout en France");
define('SITE_DESCRIPTION', "Trouvez un électricien qualifié IRVE pour l\'installation de votre borne de recharge électrique.");

define('SITE_LOGO_TEXT', 'TROUVER-DEVIS-BORNE-RECHARGE');
define('SITE_LOGO_TLD', '.FR');

define('METIER', "installateur de borne");
define('METIER_PLURAL', "installateurs de bornes");
define('METIER_TITLE', "Installateur IRVE");
define('METIER_ICON', "zap");

define('VUD_PARTENAIRE_ID', '2372');
define('VUD_CATEGORIE_ID', '164');
define('VUD_IFRAME_URL', 'https://www.viteundevis.com/widget/devis.php');

define('SCRAPE_QUERY', "installateur borne recharge irve electricien");
define('SCRAPE_API_KEY', '[CLE_API_SEMSCRAPER]');

define('ITEMS_PER_PAGE', 24);
define('NEARBY_CITIES_COUNT', 100);
define('NEARBY_DEPARTMENTS_COUNT', 6);
define('ARTISANS_PER_PAGE', 15);

define('DATA_PATH', __DIR__ . '/data/');
define('REGIONS_FILE', DATA_PATH . 'regions/regions.json');

define('MODELES', [
    ['slug' => 'borne-monophasee', 'nom' => 'Borne Monophasée', 'emoji' => "⚡", 'vud_cat' => '164'],
    ['slug' => 'borne-triphasee', 'nom' => 'Borne Triphasée', 'emoji' => "🔋", 'vud_cat' => '164'],
    ['slug' => 'wallbox', 'nom' => 'Wallbox Connectée', 'emoji' => "📱", 'vud_cat' => '164'],
    ['slug' => 'prise-renforcee', 'nom' => 'Prise Renforcée', 'emoji' => "🔌", 'vud_cat' => '164'],
    ['slug' => 'borne-7kw', 'nom' => 'Borne 7.4 kW', 'emoji' => "⚡", 'vud_cat' => '164'],
    ['slug' => 'borne-11kw', 'nom' => 'Borne 11 kW', 'emoji' => "🏎️", 'vud_cat' => '164'],
    ['slug' => 'borne-22kw', 'nom' => 'Borne 22 kW', 'emoji' => "🚀", 'vud_cat' => '164'],
    ['slug' => 'installation-irve', 'nom' => 'Installation IRVE', 'emoji' => "🔧", 'vud_cat' => '164'],
    ['slug' => 'depannage-borne', 'nom' => 'Dépannage Borne', 'emoji' => "🚨", 'vud_cat' => '164'],
    ['slug' => 'entretien-borne', 'nom' => 'Entretien Borne de Recharge', 'emoji' => "🛠️", 'vud_cat' => '164'],
    ['slug' => 'borne-entreprise', 'nom' => 'Borne Entreprise', 'emoji' => "🏢", 'vud_cat' => '164'],
    ['slug' => 'borne-copropriete', 'nom' => 'Borne Copropriété', 'emoji' => "🏙️", 'vud_cat' => '164'],
    ['slug' => 'cable-recharge', 'nom' => 'Câble de Recharge', 'emoji' => "➰", 'vud_cat' => '164'],
    ['slug' => 'borne-rfid', 'nom' => 'Borne RFID', 'emoji' => "💳", 'vud_cat' => '164'],
    ['slug' => 'borne-solaire', 'nom' => 'Borne Solaire', 'emoji' => "☀️", 'vud_cat' => '164'],
    ['slug' => 'smart-charging', 'nom' => 'Smart Charging', 'emoji' => "🧠", 'vud_cat' => '164'],
    ['slug' => 'borne-delestage', 'nom' => 'Borne avec Délestage', 'emoji' => "⚖️", 'vud_cat' => '164'],
    ['slug' => 'audit-electrique', 'nom' => 'Audit Électrique IRVE', 'emoji' => "📋", 'vud_cat' => '164'],
    ['slug' => 'borne-double-prise', 'nom' => 'Borne Double Prise', 'emoji' => "🔌", 'vud_cat' => '164'],
    ['slug' => 'borne-rapide-dc', 'nom' => 'Borne Rapide DC', 'emoji' => "⚡", 'vud_cat' => '164'],
    ['slug' => 'superchargeur', 'nom' => 'Superchargeur', 'emoji' => "⛽", 'vud_cat' => '164'],
    ['slug' => 'borne-maison-individuelle', 'nom' => 'Borne Maison Individuelle', 'emoji' => "🏠", 'vud_cat' => '164'],
    ['slug' => 'borne-wifi', 'nom' => 'Borne Connectée WiFi', 'emoji' => "📶", 'vud_cat' => '164'],
    ['slug' => 'borne-compteur-mid', 'nom' => 'Borne avec Compteur MID', 'emoji' => "⏱️", 'vud_cat' => '164'],
    ['slug' => 'mise-aux-normes-irve', 'nom' => 'Mise aux Normes IRVE', 'emoji' => "✅", 'vud_cat' => '164'],
    ['slug' => 'remplacement-borne', 'nom' => 'Remplacement Borne', 'emoji' => "🔄", 'vud_cat' => '164'],
    ['slug' => 'borne-tesla', 'nom' => 'Borne Tesla', 'emoji' => "🚘", 'vud_cat' => '164'],
    ['slug' => 'borne-flotte-auto', 'nom' => 'Borne pour Flotte Auto', 'emoji' => "🚙", 'vud_cat' => '164'],
    ['slug' => 'supervision-borne', 'nom' => 'Supervision Borne', 'emoji' => "👁️", 'vud_cat' => '164'],
    ['slug' => 'borne-parking-public', 'nom' => 'Borne Parking Public', 'emoji' => "🅿️", 'vud_cat' => '164'],
]);

define('STYLES', [
    ['slug' => 'borne-monophasee', 'nom' => 'Borne Monophasée', 'emoji' => "⚡", 'desc' => 'Détails et installation'],
    ['slug' => 'borne-triphasee', 'nom' => 'Borne Triphasée', 'emoji' => "🔋", 'desc' => 'Détails et installation'],
    ['slug' => 'wallbox', 'nom' => 'Wallbox Connectée', 'emoji' => "📱", 'desc' => 'Détails et installation'],
    ['slug' => 'prise-renforcee', 'nom' => 'Prise Renforcée', 'emoji' => "🔌", 'desc' => 'Détails et installation'],
    ['slug' => 'borne-7kw', 'nom' => 'Borne 7.4 kW', 'emoji' => "⚡", 'desc' => 'Détails et installation'],
    ['slug' => 'borne-11kw', 'nom' => 'Borne 11 kW', 'emoji' => "🏎️", 'desc' => 'Détails et installation'],
    ['slug' => 'borne-22kw', 'nom' => 'Borne 22 kW', 'emoji' => "🚀", 'desc' => 'Détails et installation'],
    ['slug' => 'installation-irve', 'nom' => 'Installation IRVE', 'emoji' => "🔧", 'desc' => 'Détails et installation'],
    ['slug' => 'depannage-borne', 'nom' => 'Dépannage Borne', 'emoji' => "🚨", 'desc' => 'Détails et installation'],
    ['slug' => 'entretien-borne', 'nom' => 'Entretien Borne de Recharge', 'emoji' => "🛠️", 'desc' => 'Détails et installation'],
    ['slug' => 'borne-entreprise', 'nom' => 'Borne Entreprise', 'emoji' => "🏢", 'desc' => 'Détails et installation'],
    ['slug' => 'borne-copropriete', 'nom' => 'Borne Copropriété', 'emoji' => "🏙️", 'desc' => 'Détails et installation'],
    ['slug' => 'cable-recharge', 'nom' => 'Câble de Recharge', 'emoji' => "➰", 'desc' => 'Détails et installation'],
    ['slug' => 'borne-rfid', 'nom' => 'Borne RFID', 'emoji' => "💳", 'desc' => 'Détails et installation'],
    ['slug' => 'borne-solaire', 'nom' => 'Borne Solaire', 'emoji' => "☀️", 'desc' => 'Détails et installation'],
    ['slug' => 'smart-charging', 'nom' => 'Smart Charging', 'emoji' => "🧠", 'desc' => 'Détails et installation'],
    ['slug' => 'borne-delestage', 'nom' => 'Borne avec Délestage', 'emoji' => "⚖️", 'desc' => 'Détails et installation'],
    ['slug' => 'audit-electrique', 'nom' => 'Audit Électrique IRVE', 'emoji' => "📋", 'desc' => 'Détails et installation'],
    ['slug' => 'borne-double-prise', 'nom' => 'Borne Double Prise', 'emoji' => "🔌", 'desc' => 'Détails et installation'],
    ['slug' => 'borne-rapide-dc', 'nom' => 'Borne Rapide DC', 'emoji' => "⚡", 'desc' => 'Détails et installation'],
    ['slug' => 'superchargeur', 'nom' => 'Superchargeur', 'emoji' => "⛽", 'desc' => 'Détails et installation'],
    ['slug' => 'borne-maison-individuelle', 'nom' => 'Borne Maison Individuelle', 'emoji' => "🏠", 'desc' => 'Détails et installation'],
    ['slug' => 'borne-wifi', 'nom' => 'Borne Connectée WiFi', 'emoji' => "📶", 'desc' => 'Détails et installation'],
    ['slug' => 'borne-compteur-mid', 'nom' => 'Borne avec Compteur MID', 'emoji' => "⏱️", 'desc' => 'Détails et installation'],
    ['slug' => 'mise-aux-normes-irve', 'nom' => 'Mise aux Normes IRVE', 'emoji' => "✅", 'desc' => 'Détails et installation'],
    ['slug' => 'remplacement-borne', 'nom' => 'Remplacement Borne', 'emoji' => "🔄", 'desc' => 'Détails et installation'],
    ['slug' => 'borne-tesla', 'nom' => 'Borne Tesla', 'emoji' => "🚘", 'desc' => 'Détails et installation'],
    ['slug' => 'borne-flotte-auto', 'nom' => 'Borne pour Flotte Auto', 'emoji' => "🚙", 'desc' => 'Détails et installation'],
    ['slug' => 'supervision-borne', 'nom' => 'Supervision Borne', 'emoji' => "👁️", 'desc' => 'Détails et installation'],
    ['slug' => 'borne-parking-public', 'nom' => 'Borne Parking Public', 'emoji' => "🅿️", 'desc' => 'Détails et installation'],
]);

define('SERVICES', [
    [
        'titre' => "Installation par Électricien IRVE",
        'icon' => "⚡",
        'desc' => "Pose de votre borne de recharge (Wallbox, prise renforcée) par un électricien qualifié IRVE, obligation légale au-delà de 3,7 kW.",
        'points' => ["Étude de capacité du tableau électrique", "Pose de bornes 7kW, 11kW et 22kW", "Respect des normes NFC 15-100"]
    ],
    [
        'titre' => "Particuliers & Copropriétés",
        'icon' => "🏢",
        'desc' => "Solutions adaptées pour votre maison individuelle, votre place de parking en copropriété ou votre entreprise.",
        'points' => ["Droit à la prise en copropriété", "Systèmes de supervision intelligents", "Répartition des coûts"]
    ],
    [
        'titre' => "Aides Financières (Advenir)",
        'icon' => "💰",
        'desc' => "Nos artisans vous accompagnent pour bénéficier du crédit d'impôt et de la prime ADVENIR pour vos installations.",
        'points' => ["Accompagnement administratif", "Artisans agréés RGE / IRVE", "TVA réduite (5,5%)"]
    ],
]);

define('FAQ_ACCUEIL', [
    [
        'question' => "Pourquoi faire appel à un installateur certifié IRVE ?",
        'reponse' => "La certification IRVE (Infrastructures de Recharge de Véhicules Électriques) est obligatoire pour l'installation d'une borne d'une puissance supérieure à 3,7 kW. Elle garantit la sécurité de votre installation électrique, vous couvre au niveau de votre assurance, et est indispensable pour toucher les aides de l'État."
    ],
    [
        'question' => "Quelle puissance choisir pour ma borne de recharge (7,4 kW ou 22 kW) ?",
        'reponse' => "Une borne 7,4 kW (monophasée) permet de recharger une voiture pendant la nuit, ce qui suffit pour 90% des usages. Une borne 11 kW ou 22 kW (triphasée) recharge beaucoup plus vite, mais nécessite un abonnement électrique adapté et vérification de votre compteur."
    ],
    [
        'question' => "C'est quoi le 'droit à la prise' en copropriété ?",
        'reponse' => "Si vous habitez en copropriété avec parking privatif, le 'droit à la prise' vous autorise à équiper votre place de stationnement à vos frais, que vous soyez locataire ou propriétaire. Le syndic ne peut s'y opposer qu'avec un motif sérieux."
    ],
    [
        'question' => "Quelles sont les aides pour l'installation d'une borne (Crédit d'impôt, Advenir) ?",
        'reponse' => "Vous pouvez bénéficier d'un crédit d'impôt forfaitaire de 500 € par borne (en maison comme en appartement). En copropriété, le programme ADVENIR finance en plus une grande partie des coûts d'installation (jusqu'à 50%)."
    ],
    [
        'question' => "Quel est le prix moyen de l'installation d'une borne à domicile ?",
        'reponse' => "En règle générale, une Wallbox de 7,4 kW posée coûte entre 1 200 € et 1 800 € TTC, matériel et main-d'œuvre compris. Ce prix varie selon la distance entre la borne et le tableau électrique, et d'éventuels travaux de terrassement."
    ]
]);

define('TOP_VILLES', [
    ['nom' => 'Paris', 'slug' => 'paris', 'cp' => '75000', 'region' => 'ile-de-france', 'dept' => 'paris'],
    ['nom' => 'Marseille', 'slug' => 'marseille', 'cp' => '13000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'bouches-du-rhone'],
    ['nom' => 'Lyon', 'slug' => 'lyon', 'cp' => '69000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'rhone'],
    ['nom' => 'Toulouse', 'slug' => 'toulouse', 'cp' => '31100', 'region' => 'occitanie', 'dept' => 'haute-garonne'],
    ['nom' => 'Nice', 'slug' => 'nice', 'cp' => '06000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'alpes-maritimes'],
    ['nom' => 'Nantes', 'slug' => 'nantes', 'cp' => '44200', 'region' => 'pays-de-la-loire', 'dept' => 'loire-atlantique'],
    ['nom' => 'Montpellier', 'slug' => 'montpellier', 'cp' => '34080', 'region' => 'occitanie', 'dept' => 'herault'],
    ['nom' => 'Bordeaux', 'slug' => 'bordeaux', 'cp' => '33300', 'region' => 'nouvelle-aquitaine', 'dept' => 'gironde'],
    ['nom' => 'Lille', 'slug' => 'lille', 'cp' => '59260', 'region' => 'hauts-de-france', 'dept' => 'nord'],
    ['nom' => 'Strasbourg', 'slug' => 'strasbourg', 'cp' => '67000', 'region' => 'grand-est', 'dept' => 'bas-rhin'],
    ['nom' => 'Rennes', 'slug' => 'rennes', 'cp' => '35700', 'region' => 'bretagne', 'dept' => 'ille-et-vilaine'],
    ['nom' => 'Toulon', 'slug' => 'toulon', 'cp' => '83000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'var'],
    ['nom' => 'Grenoble', 'slug' => 'grenoble', 'cp' => '38000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'isere'],
    ['nom' => 'Dijon', 'slug' => 'dijon', 'cp' => '21000', 'region' => 'bourgogne-franche-comte', 'dept' => 'cote-d-or'],
    ['nom' => 'Angers', 'slug' => 'angers', 'cp' => '49000', 'region' => 'pays-de-la-loire', 'dept' => 'maine-et-loire'],
    ['nom' => 'Nimes', 'slug' => 'nimes', 'cp' => '30000', 'region' => 'occitanie', 'dept' => 'gard'],
    ['nom' => 'Clermont-Ferrand', 'slug' => 'clermont-ferrand', 'cp' => '63000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'puy-de-dome'],
    ['nom' => 'Le Havre', 'slug' => 'le-havre', 'cp' => '76600', 'region' => 'normandie', 'dept' => 'seine-maritime'],
]);

define('AVANTAGES', [
    ['titre' => 'Réseau National', 'desc' => 'Des milliers de professionnels référencés dans toute la France.', 'icon' => "🗺️"],
    ['titre' => 'Partenaires Expérimentés', 'desc' => 'Trouvez le bon interlocuteur pour la réussite de votre projet', 'icon' => "✅"],
    ['titre' => 'Mise en Relation Rapide', 'desc' => 'Obtenez gratuitement des devis adaptés à vos besoins.', 'icon' => "💰"],
]);

define('HERO_IMAGE', 'https://images.unsplash.com/photo-1593941707882-a5bba14938c7?w=1920&q=80&auto=format&fit=crop');
define('MODELE_IMAGE', 'https://images.unsplash.com/photo-1593941707874-ef25b8b4a92b?w=1920&q=80&auto=format&fit=crop');


function getModeleBySlug($slug)
{
    foreach (MODELES as $modele) {
        if ($modele['slug'] === $slug) {
            return $modele;
        }
    }
    return null;
}

function getAllModeles()
{
    return MODELES;
}

function getVudUrl($modele = null)
{
    $catId = VUD_CATEGORIE_ID;
    if ($modele && isset($modele['vud_cat'])) {
        $catId = $modele['vud_cat'];
    }
    return 'https://www.viteundevis.com/in/?pid=' . VUD_PARTENAIRE_ID . '&c=' . $catId;
}

function getVudCatForModele($modele = null)
{
    if ($modele && isset($modele['vud_cat'])) {
        return $modele['vud_cat'];
    }
    return VUD_CATEGORIE_ID;
}
