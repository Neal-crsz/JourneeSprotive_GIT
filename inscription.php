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
        require "fonctionsBD.inc.php";
        require "htmlToPhp.inc.php";
        
        $nom = filter_input(INPUT_POST, 'Nom');
        $prenom = filter_input(INPUT_POST, 'Prenom');

        // quand le formulaire est confirmer
        if (filter_input(INPUT_POST, 'envoyer') == true)
        {
        if(isset($_POST['classe'])){
            $classe = $_POST['classe'];
        }
        if(isset($_POST['choix-1'])){
            $choix1 = $_POST['choix-1'];
        }

        if(isset($_POST['choix-2'])){
            $choix2 = $_POST['choix-2'];
        }

        if(isset($_POST['choix-3'])){
            $choix3 = $_POST['choix-3'];
        }

        //Affichage
            echo 'Nom : ' . $nom . '<br>';
            echo 'Prénom : ' . $prenom . '<br>';
            echo 'classe : ' . $classe . '<br>';
            echo 'choix1 : ' . $choix1 . '<br>';
            echo 'choix2 : ' . $choix2. '<br>';
            echo 'choix3 : ' . $choix3. '<br>';
        }


        ?>
        <header>
            Inscription à la journée sportive du CFPT
        </header>
        <form action="#" method="POST">
            <label>Nom :</label><br>
            <input type="text" name="Nom" id="Nom" value="<?= $nom ?>" require/>
            <label>Prénom :</label><br>
            <input type="text" name="Prenom" id="Prenom" value="<?= $prenom ?>" require/><br>
            <?php
            afficherSelectClasse();
            ?>
            <?php
            afficherSelectActivite("choix");
            ?>
            <input type="submit" name="envoyer" value="Confirmer"/>
            <input type="reset" name="annuler" value="Annuler"/><br><br>
            <a href="administration.php"><input type="button" name="admin" value="Ajouter une activiter ou une classe"/></a><br>
            <a href="liste.php"><input type="button" name="liste" value="liste"/></a>
            </table>
        </form>
        <footer>
            CRAUSAZ NEAL
        </footer>
    </body>
</html>