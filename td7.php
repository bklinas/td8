<?php
require('include/functions.inc.php');
require('include/header.inc.php');
require('include/util.php');

// Tableau des noms des régions
$regions = [
    "Guadeloupe", "Martinique", "Guyane", "La Réunion", "Mayotte", "Île-de-France",
    "Centre-Val de Loire", "Bourgogne-Franche-Comté", "Normandie", "Hauts-de-France",
    "Grand Est", "Pays de la Loire", "Bretagne", "Nouvelle-Aquitaine", "Occitanie",
    "Auvergne-Rhône-Alpes", "Provence-Alpes-Côte d’Azur", "Corse"
];

// Utiliser la fonction pour générer la liste HTML (par défaut, ul)
$htmlRegionsListDefault = generateRegionsList($regions);

// Utiliser la fonction pour générer la liste HTML (ol)
$htmlRegionsListOrdered = generateRegionsList($regions, 'ol');

$origines = originesEtymologiques();
$webSafeColors = getWebSafePalette();
?>

<main>
    <section id="regionsListDefault">
        <h2>Liste des régions (ul)</h2>
        <?php echo $htmlRegionsListDefault; ?>
    </section>

    <section id="regionsListOrdered">
        <h2>Liste des régions (ol)</h2>
        <?php echo $htmlRegionsListOrdered; ?>
    </section>

    <section id="origines">
        <h1>Origines Étymologiques de la Date Courante</h1>
        <p>Le jour actuel (<?php echo date("l"); ?>) a pour origine étymologique : <?php echo $origines["jour"]; ?></p>
        <p>Le mois actuel (<?php echo date("F"); ?>) a pour origine étymologique : <?php echo $origines["mois"]; ?></p>
    </section>

    <section id="couleurs">
        <h1>La Palette Web</h1>
        <?php
        echo '<div style="display: flex; flex-wrap: wrap;">';
        foreach ($webSafeColors as $color) {
            echo '<div style="width: 80px; height: 80px; background-color: ' . $color . '; border: 1px solid #000; text-align: center; line-height: 80px; font-weight: bold;">' . $color . '</div>';
        }
        echo '</div>';
        ?>
    </section>
</main>

<?php
require('include/footer.inc.php');
?>

