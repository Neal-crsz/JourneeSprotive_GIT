<!DOCTYPE html>
<hmtl>
    <head>
    <meta charset="UTF-8">
        <title>Journée Sportive du CFPT</title>
    </head>
    <body>
        <?php
        require "fonctionsBD.inc.php";
        $idClasse = $_GET['idClasse'];
        $classe = filter_input(INPUT_POST, 'classe');

        function updateClasse($idClasse, $classe)
        {
            $bdd = getConnexion();
            $bddRequette = $bdd->prepare("UPDATE classe SET nomClasse = :nomClasse WHERE idClasse = :idClasse");
            $bddRequette->bindParam(':idClasse', $idClasse, PDO::PARAM_INT);
            $bddRequette->bindParam(':nomClasse', $classe, PDO::PARAM_STR);
            $bddRequette->execute();
        }
        ?>
        <form action="#" method="POST">
        <label>Editer Classe</label>
        <input type="text" name="classe" id="classe" value="<?= $classe ?>"/><br><br>
        <input type="submit" name="envoyer" value="Confirmer"/>
        <a href="inscription.php"><input type="button" name="retour" value="retour"/></a>
        </form>
        <?php
        if (filter_input(INPUT_POST, 'envoyer') == true){
            if(isset($_POST['classe'])){
                
                updateClasse($idClasse, $classe);
            }
        }
        ?>
    </body>
    <footer>
    NEAL CRAUSAZ
    </footer>
</hmtl>