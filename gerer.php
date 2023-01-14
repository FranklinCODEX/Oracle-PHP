<?php
//inclusion du fichier de connexion
require_once("config.php");


//cette condition permet de creer une variable globale POST du meme name que celui du forlumaire
if(isset($_POST))
{
    //var_dump($_POST);
    foreach($_POST as $key => $value)
    {
        ${$key} = $_POST[$key]; // ou bien ${$key} = $value
    } 
}

//Preparration de la requete d'envoie des donnees dans la BDD
$requete_saving = "INSERT INTO \"ENEAM\".\"BANQUE\" (NOM, CODE) VALUES ('$nom', '$code')";

$requete_check_user = "SELECT NOM FROM `BANQUE` 
                    WHERE BANQUE.NOM = '$nom' " ;


//verifier si c'est le bouton envoyer qui est clique
if(isset($envoyer))
{
    if(!empty($envoyer))
    {
         //envoie de la requete sur la BDD si l'utilsateur inexistant
         $connexion->quote($requete_saving);
         $saving = $connexion->exec($requete_saving);
         if($saving)
         {
             echo header('Location: list.php'); //redirection vers une autre page
         }
         else
         {
             echo "L'enregistrement de vos a echouer";
         }                      
    }
}

if(isset($quitter))
{
    if(!empty($quitter))
    {
        header('Location: index.php');
    }
}

?>