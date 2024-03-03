<?php
// Inclure le fichier de fonctions
require('include/functions.inc.php');

// Inclure le fichier d'en-tête
require('include/header.inc.php');
?>

<main>
    <section id="exercice1">
        <h2>Exercice 1</h2>
        <h3>Afficher la date du serveur</h3>
        <?php displayCurrentDate(); ?>
    </section>

    <section id="exercice2">
        <h2>Exercice 2</h2>
        <h3>Afficher une liste avec une fonction PHP</h3>
        <?php echo hello(20); ?>
    </section>

    <section id="exercice3">
        <h2>Exercice 3</h2>
        <h3>Conversions hexadécimales</h3>
        <?php echo hexToChar("41"); // Notez l'ajout de 'echo' ?>
        <?php echo hexToChar("2B"); // Notez l'ajout de 'echo' ?>
    </section>

    <section id="exercice4">
        <h2>Exercice 4</h2>
        <h3>Liste horizontale de nombres hexadécimaux</h3>
        <?php echo construireListe(); // Notez l'ajout de 'echo' ?>
    </section>

    <section id="exercice5">
        <h2>Exercice 5</h2>
        <h3>Tableau de conversions numériques</h3>
        <?php echo construireTableau(); // Notez l'ajout de 'echo' ?>
    </section>
</main>
<?php
// Inclure le fichier de pied de page
require('include/util.php');
require('include/footer.inc.php');
?>



