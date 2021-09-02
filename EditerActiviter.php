<!DOCTYPE html>
<hmtl>
    <head>
    <meta charset="UTF-8">
        <title>Journée Sportive du CFPT</title>
    </head>
    <body>
        <?php
        require "fonctionsBD.inc.php";
        $idActivite = $_GET['idActivite'];
        $activite = filter_input(INPUT_POST, 'activite');

        function updateActivite($idActivite, $activite)
        {
            $bdd = getConnexion();
            $bddRequette = $bdd->prepare("UPDATE activite SET nomActivite = :nomActivite WHERE idActivite = :idActivite");
            $bddRequette->bindParam(':idActivite', $idActivite, PDO::PARAM_INT);
            $bddRequette->bindParam(':nomActivite', $activite, PDO::PARAM_STR);
            $bddRequette->execute();
        }
        ?>
        <form action="" method="POST">
        <label>Editer Activite</label>
        <input type="text" name="activite" id="activite" value="<?= $activite ?>"/><br><br>
        <input type="submit" name="envoyer" value="Confirmer"/>
        <a href="inscription.php"><input type="button" name="retour" value="retour"/></a>
        </form>
        <?php
        if (filter_input(INPUT_POST, 'envoyer') == true){
            if(isset($_POST['activite'])){
               

                updateActivite($idActivite, $activite);
            }
        }
        ?>
    </body>
    <footer>
    NEAL CRAUSAZ
    </footer>
</hmtl>