<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <script src="script.js" async></script>
    <title>Ative Bretagne Informatique</title>
</head>
<body>
    <?php 
        if (isset ($_SESSION['matricule'])) {
            require('headerConnecte.php');
        } else {
            require('header.php');
        }
    ?>

    <?php require('menuSecondaire.php') ?>

    <p class="miette">
        <a href="<?php 
                    if (isset ($_SESSION['matricule'])) {
                        echo "indexConnecte.php";
                    } else {
                        echo "index.php";
                    }
                ?>">
            <img src="img/home.png" id="logoMiette">
        </a>  / Qui sommes nous</p>

    <section>
        <h2 class="h2Centre">Notre histoire</h2>
        <p id="histoire">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum commodi repellat id sequi eveniet veritatis provident eos doloremque quos corrupti corporis beatae aspernatur rem mollitia, tempore esse sed veniam incidunt.
        Nisi culpa nobis debitis doloribus molestiae. Possimus vero praesentium impedit! Explicabo doloribus accusantium culpa commodi impedit eius placeat pariatur illo, voluptates ad ipsa incidunt sit, architecto quibusdam, rem iusto non.
        Quae, magni consequatur odit impedit nobis voluptatibus id blanditiis sapiente optio similique sunt. Explicabo vero est hic ut, porro sint eveniet nesciunt dolor voluptates dolorum. Perspiciatis error unde eos libero?
        </p>
    </section>

    <hr class="hrIndex"> 

    <section>
        <h2 class="h2Centre">Notre équipe</h2>
        <table class="equipe">
            <tr>
                <td class="direction">Direction: </td>
                <td class="developpements">Département Développements: </td>
            </tr>
            <tr>
                <td class="direction">Un directeur général, administrateur et financier</td>
                <td class="developpements">Responsable du département développements</td>
            </tr>
            <tr>
                <td class="direction">Un responsable des ressources humaines</td>
                <td class="developpements">Ingénieurs d'études</td>
            </tr>
            <tr>
                <td class="direction">Un responsable commercial</td>
                <td class="developpements">Un secrétariat technique</td>
            </tr>
            <tr>
                <td class="direction">Un secrétariat administratif</td>
                <td class="developpements">Des techniciens supports</td>
            </tr>
        </table>
    </section>
   
    <?php require('footer.php') ?>
</body>
</html>
