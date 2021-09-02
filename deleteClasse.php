<?php
include 'fonctionsBD.inc.php';
$idClasse = $_GET['idClasse'];


try {
    $bdd = getConnexion();
    $delete = $bdd->prepare("DELETE FROM classe WHERE idClasse = $idClasse");
    if($delete->execute())
    {
        header("location:liste.php");
    }
} catch (PDOException $Exeption) {
    echo "Error: " . $Exeption->getMessage();
}
?>