<?php

function afficherSelectActivite($listActivite)
{
    ?>
<option value="">--Choisir un sport</option>
<?php
foreach ($listActivite as $value)
 {
    ?>
    <option value="<?php echo $value['nomActivite']; ?>"><?php echo $value['nomActivite']; ?></option>
    <?php
 }
}

function afficherSelectClasse($listClasse)
{
    ?>
<option value="">--Choisir votre Classe</option>
<?php
foreach ($listClasse as $value)
 {
    ?>
    <option value="<?php echo $value['nomClasse']; ?>"><?php echo $value['nomClasse']; ?></option>
    <?php
 }
}
?>

