<?php
function getConnexion()
{
  
    $serveur = '127.0.0.1';
    $pseudo = 'root';
    $pwd = '';
    $db = 'journeesportive';

    static $bdd = null;

    if ($bdd === null) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO("mysql:host=$serveur;dbname=$db", $pseudo, $pwd, $pdo_options);
        $bdd->exec('SET CHARACTER SET utf8');
    }
    return $bdd;
}

function getActivites()
{
$bdd = getConnexion();
$bddRequette = $bdd->prepare("select * from activite");
$bddRequette->execute();
$resultat = $bddRequette->fetchAll(PDO::FETCH_ASSOC);
return $resultat;
}

function getClasse(){
    $bdd = getConnexion();
$bddRequette = $bdd->prepare("select * from classe");
$bddRequette->execute();
$resultat = $bddRequette->fetchAll(PDO::FETCH_ASSOC);
return $resultat;
}

function insertActivites($activiteAjouter)
{
$bdd = getConnexion();
$bddRequette = $bdd->prepare("insert into activite(nomActivite) values (?)");
$bddRequette->execute([$activiteAjouter]);
}

function insertClasses($classeAjouter)
{
$bdd = getConnexion();
$bddRequette = $bdd->prepare("insert into classe(nomClasse) values (?)");
$bddRequette->execute([$classeAjouter]);
}
?>