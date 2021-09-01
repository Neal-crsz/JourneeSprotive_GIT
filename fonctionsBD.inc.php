<?php
function getConnexion()
{
  
    $serveur = '127.0.0.1';
    $pseudo = 'user151';
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
$bddRequette = $bdd->query("select * from activite");
$resultat = $bddRequette->fetchAll(PDO::FETCH_ASSOC);
return $resultat;
}
?>