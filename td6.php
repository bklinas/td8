<?php

// Inclure le fichier de fonctions
include('include/functions.inc.php');
include('include/header.inc.php');
// Constantes pour les valeurs par défaut
define('DEFAULT_ROWS', 10);
define('DEFAULT_COLUMNS', 10);

// Exemple d'utilisation de la fonction pour la table de multiplication avec les valeurs par défaut
$tableHTMLDefault = generateMultiplicationTable(DEFAULT_ROWS, DEFAULT_COLUMNS);

// Exemple d'utilisation de la fonction pour la table de multiplication en spécifiant les dimensions
$tableHTMLCustom = generateMultiplicationTable(10, 10);

// Exemple d'utilisation de la fonction pour la table ASCII
$asciiTableHTML = generateASCIITable();

?>

<main>
    <section id="exercice1">
        <h2> exercice 1 </h2>
        <h3>Table de multiplication avec les valeurs par défaut </h3>
        <?php echo $tableHTMLDefault; ?>

        <h3>Table de multiplication avec dimensions spécifiées</h3>
        <?php echo $tableHTMLCustom; ?>
    </section>

    <section id="exercice2">
        <h2> exercice 2 </h2>
        <h3> Table ASCII </h3>
        <?php echo $asciiTableHTML; ?>
    </section>
</main>
<?php 
require('include/util.php');
require('include/footer.inc.php');
?>




    

