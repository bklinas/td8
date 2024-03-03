<?php 
require('include/header.inc.php');

// Vérifie si le paramètre "style" est présent dans l'URL
$style = isset($_GET['style']) ? $_GET['style'] : 'day_mode';

// Inclut la feuille de style en fonction de la valeur du paramètre
echo "<link rel='stylesheet' type='text/css' href='{$style}.css'>";

?>
    <main>
        <h2>Qu'est-ce que PHP ?</h2>
        <p>PHP est un langage de script côté serveur utilisé pour développer des applications web dynamiques. Il peut être intégré directement dans le code HTML.</p>

        <h2>Exercices</h2>
            <div>
            <h3> TD5: </h3>
            <ol>
            <li> fonction prédéfinie </li>
            <li>fonction et boucles </li>
            <li> conversions ASCII </li>
            <li>fonctions prédéfinies et boucles </li>
            <li> boucles PHP, fonctions prédéfinies et tableau HTML (table / caption / thead / tbody / tr / th / td) </li>
            <li> CSS </li>
            </ol>
            </div>
            <div>
            <h3> TD6: </h3>
            <ol>
            <li> fonctions PHP : boucles PHP + tableau HTML (table /caption / thead / tbody / scope / tr / th / td)</li>
            <li>boucles, tests et styles internes </li>
            <li>intégration et style local </li>
            </ol>
            </div>
            <div>
            <h3> TD7: </h3>
            <ol>
            <li>construction multi-fichiers et intégration</li>
            <li>fonctions, constantes, valeur par défaut et construction multi-fichiers</li>
            <li>fonction PHP et tableau PHP</li>
            <li> fonctions PHP et tableaux associatifs PHP </li>
            <li> détecter le navigateur de l’internaute </li>
            </ol>
            </div>
            <div>
            <h3> TD8: </h3>
            <ol>
            <li>fonction, tableau PHP et manipulations de chaînes de caractères : URL</li>
            <li>fonction et tableaux PHP : chmod</li>
            <li> liens paramétrés : passage d’information du client (navigateur) au serveur Web.</li>
            </ol>
            </div>
      
        
        <h2>Ressources Utiles</h2>
        <p>Pour en savoir plus sur PHP, consultez la <a href="https://www.php.net/manual/fr/" target="_blank">documentation officielle de PHP</a>.</p>
    </main>


<?php
    require('include/util.php');
    require('include/footer.inc.php');
?>


   