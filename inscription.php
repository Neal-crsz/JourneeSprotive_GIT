<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Journée Sportive du CFPT</title>
    </head>
    <body>
        <?php
        $nom = filter_input(INPUT_POST, 'Nom');
        $prenom = filter_input(INPUT_POST, 'Prenom');

        // quand le formulaire est confirmer
        if (filter_input(INPUT_POST, 'envoyer') == true)
        {
        if(isset($_POST['classe'])){
            $classe = $_POST['classe'];
        }
        if(isset($_POST['choix1'])){
            $choix1 = $_POST['choix1'];
        }

        if(isset($_POST['choix2'])){
            $choix2 = $_POST['choix2'];
        }

        if(isset($_POST['choix3'])){
            $choix3 = $_POST['choix3'];
        }

        //Affichage
            echo 'Nom : ' . $nom . '<br>';
            echo 'Prénom : ' . $prenom . '<br>';
            echo 'classe : ' . $classe . '<br>';
            echo 'choix1 : ' . $choix1 . '<br>';
            echo 'choix2 : ' . $choix2 . '<br>';
            echo 'choix3 : ' . $choix3 . '<br>';
        }


        ?>
        <header>
            Inscription à la journée sportive du CFPT
        </header>
        <form action="#" method="POST">
            <table>
                <tr>
                    <td><label>Nom</label></td>
                    <td><input type="text" name="Nom" id="Nom" value="<?= $nom ?>" require/></td>
                </tr>
                <tr>
                    <td><label>Prénom</label></td>
                    <td><input type="text" name="Prenom" id="Prenom" value="<?= $prenom ?>" require/></td>
                </tr>
                <tr>
                    <?php
                    require "htmlToPhp.inc.php";
                    ?>
                <tr>
                    <td><input type="submit" name="envoyer" value="Confirmer"/></td>
                </tr>
            </table>
        </form>
        <footer>
            CRAUSAZ NEAL
        </footer>
    </body>
</html>