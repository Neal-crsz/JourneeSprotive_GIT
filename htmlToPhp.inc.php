<?php

function afficherSelectActivite($name)
{
 $activites = getActivites();

 for ($i=1; $i < 4; $i++)
 {
     echo "
     <label>Choix $i : </label><br>
     <select name='$name-$i'>";
     foreach ($activites as $key => $activite) 
     {
            echo "<option value='" . $activite['nomActivite']."'>";
            echo $activite['nomActivite'];
            echo "</option>";
     }
     echo "</select><br><br>";
 }
 
}

function afficherSelectClasse()
{
    $Classes = getClasse();
        echo "
        <label>Classe :</label><br>
        <select name='classe'>";
        foreach ($Classes as $key => $Classe) 
        {
               echo "<option value='" . $Classe['nomClasse']."'>";
               echo $Classe['nomClasse'];
               echo "</option>";
        }
        echo "</select><br><br>";
}
?>

