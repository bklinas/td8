<?php
require('include/header.inc.php');
require('include/functions.inc.php');

// Exercise 1
$url1 = "https://www.cyu.fr";
$result1 = parseCustomUrl($url1);

$url2 = "http://www.education.gouv.fr/";
$result2 = parseCustomUrl($url2);

$url3 = "http://ratp.fr/";
$result3 = parseCustomUrl($url3);

// Exercise 2
$permission1 = octalToPermissionString(400); // Output: r-- --- ---
$permission2 = octalToPermissionString(640); // Output: rw- r-- ---
$permission3 = octalToPermissionString(755); // Output: rwx r-x r-x
?>
<style>
    table {
        margin-top: 30px;
        width: 70%;
    }
</style>
<main>
    <section id="url">
        <h2>Exercice 1 : Fonction, tableau PHP et manipulations de chaînes de caractères : URL</h2>
        <table border="1">
            <tr>
                <th>URL</th>
                <th>Protocol</th>
                <th>Host</th>
                <th>Domain</th>
                <th>TLD</th>
            </tr>
            <tr>
                <td><?php echo $url1; ?></td>
                <td><?php echo $result1['protocol']; ?></td>
                <td><?php echo $result1['host']; ?></td>
                <td><?php echo $result1['domain']; ?></td>
                <td><?php echo $result1['tld']; ?></td>
            </tr>
            <tr>
                <td><?php echo $url2; ?></td>
                <td><?php echo $result2['protocol']; ?></td>
                <td><?php echo $result2['host']; ?></td>
                <td><?php echo $result2['domain']; ?></td>
                <td><?php echo $result2['tld']; ?></td>
            </tr>
            <tr>
                <td><?php echo $url3; ?></td>
                <td><?php echo $result3['protocol']; ?></td>
                <td><?php echo $result3['host']; ?></td>
                <td><?php echo $result3['domain']; ?></td>
                <td><?php echo $result3['tld']; ?></td>
            </tr>
        </table>
    </section>

    <section id="chmod">
        <h2>Exercice 2 : Fonction et tableaux PHP : chmod</h2>
        <table border="1">
            <tr>
                <th>Octal Value</th>
                <th>Permission String</th>
            </tr>
            <tr>
                <td>400</td>
                <td><?php echo $permission1; ?></td>
            </tr>
            <tr>
                <td>640</td>
                <td><?php echo $permission2; ?></td>
            </tr>
            <tr>
                <td>755</td>
                <td><?php echo $permission3; ?></td>
            </tr>
        </table>
    </section>
</main>

<?php
require('include/util.php');
require('include/footer.inc.php');
?>
