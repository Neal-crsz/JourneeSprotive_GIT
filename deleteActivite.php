<?php
include 'fonctionsBD.inc.php';
$idActitive = $_GET['idActivite'];


try {
    $bdd = getConnexion();
    $delete = $bdd->prepare("DELETE FROM activite WHERE idActivite = $idActitive");
    if($delete->execute())
    {
        header("location:liste.php");
    }
} catch (PDOException $Exeption) {
    echo "Error: " . $Exeption->getMessage();
}
?>