<!DOCTYPE html> 
<html>
    <head>
    <meta charset="UTF-8">
        <title>Journée Sportive du CFPT</title>
    </head>
    <body>
        <header>
        Inscription à la journée sportive du CFPT
        </header>
        <?php
            require 'fonctionsBD.inc.php';
            try{
                $bdd = getConnexion();
                $requete = $bdd->prepare("select * from classe");
                $requete->execute();
                $resultat = $requete->fetchAll();
            }catch (PDOException $Execption) {
                echo "Error: " . $Execption->getMessage();
            }
        ?> 
        <table>
            <tr>
                <td>id</td>
                <td>Classe</td>
            </tr>
            <tr>
                <?php
                $classe = $bdd->query("select * from classe");
                if ($classe ->rowCount() > 0) {
                    while ($row = $classe->fetchAll()){
                        for ($i = 0; $i < count($row); $i++){
                            ?>
                            <tr>
                                <td><?php echo $resultat[$i][0]; ?></td>
                                <td><?php echo $resultat[$i][1]; ?></td>
                                <td></td>
                                <td></td>
                                <td>Editer</td>
                                <td>Supprimer</td>
                            </tr>
                            <?php
                        }
                    }
                } 
                ?>
            </tr>
            <tr>
                <td>Activite</td>
            </tr>
            <tr>
                <?php
                try{
                    $bdd = getConnexion();
                    $requete = $bdd->prepare("select * from activite");
                    $requete->execute();
                    $resultat = $requete->fetchAll();
                }catch (PDOException $Execption) {
                    echo "Error: " . $Execption->getMessage();
                }
            $activite = $bdd->query("select * from activite");
                if ($activite ->rowCount() > 0) {
                    while ($row = $activite->fetchAll()){
                        for ($i = 0; $i < count($row); $i++){
                            ?>
                            <tr>
                                <td><?php echo $resultat[$i][0]; ?></td>
                                <td><?php echo $resultat[$i][1]; ?></td>
                                <td></td>
                                <td></td>
                                <td>Editer</td>
                                <td>Supprimer</td>
                            </tr>
                            <?php
                        }
                    }
                } 
                ?>

        </table>
        <footer>
            NEAL CRAUSAZ
        </footer>
    </body>
</html>