<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<body>
    <?php
     require "fonctionsBD.inc.php";
    $activiterAjouter = filter_input(INPUT_POST, 'activite');
    $classeAjouter = filter_input(INPUT_POST, 'classe')

    ?>
    <head>
    <meta charset="UTF-8">
    Journée Sportive du CFPT
    </head>
    <form action="#" method="POST">
        <fieldset>
            <label>Activite</label>
            <input type="text" name="activite" id="activite" value="<?= $activiterAjouter ?>"/><br><br>
        </fieldset><br><br>
        <fieldset>
            <label>Classe</label>
            <input type="text" name="classe" id="classe" value="<?= $classeAjouter ?>"/><br><br>
        </fieldset><br><br>
        <input type="submit" name="envoyer" value="Confirmer"/>
        <input type="reset" name="annuler" value="Annuler"/><br><br>
        <a href="inscription.php"><input type="button" name="retour" value="retour"/></a>
    </form>
    <footer>
        NEAL CRAUSAZ
    </footer>

    <?php
    if (filter_input(INPUT_POST, 'envoyer') == true)
    {
        if($activiterAjouter != null)
        {
            insertActivites($activiterAjouter);
        }
        if($classeAjouter != null)
        {
            insertClasses($classeAjouter);
        }
    }
    ?>
</body>
</html>