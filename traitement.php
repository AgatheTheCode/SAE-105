<?php

if(isset($_POST['valider']))   //besoin de faire une bdd
{
    $pseudo =$_POST['pseudo'];
    $commentaire = $_POST['commentaire'];

    array_push($commentloop, 'pseudo','commentaire');
}