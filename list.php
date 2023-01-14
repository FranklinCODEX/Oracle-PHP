
<?php

    if(isset($_GET["id"]))
    {
        require_once("config.php");
        $supprimer = (int)$_GET["id"];
        $requete_del_elmt = "DELETE FROM BANQUE WHERE id = $supprimer";
        $del = $connexion->query($requete_del_elmt);
            if($del)
            {
                echo "<script type=\"text/javascript\"> alert('Donnée suprimer avec succès'); window.location='list.php';</script>";
            }

        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="icons-1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

    <title>Les informations de notre BDD</title>
</head>
<body background="background-site.jpg">
    <?php
    require_once("config.php");
        
    // Preparation de la requete de recuperation de donnees dans la BDD
    $requete_take_table = "SELECT * FROM BANQUE";
        //envoie de la requete a la BDD
        $take_table = $connexion->query($requete_take_table);
        if($take_table)
        {
            
            echo "<div class=\"container database mt-2\">";
            echo "<h3 class=\"milieu\">Toute les banques enregistrées dans notre BDD</h3>";
            echo "<div class=\"d-grid gap-1 d-md-flex justify-content-md-end mb-1\"><a href=\"create.php\" name=\"ajouter\" class=\"btn btn-success\">Ajouter</a></div>
                <table class=\"table table-hover table-bordered border-primary text-center\" border=\"1\">";
            echo "<tr><th>#</th>
                <th>Nom</th>
                <th>Code</th>
                <th colspan=\"2\" class=\"text-center\">Action</th></tr>";

                foreach ($take_table as $ligne)
                {
                    echo "<tr>";
                echo '<td>'. $ligne["ID"]. '</td>';
                echo '<td>'. $ligne["CODE"]. '</td>';
                echo '<td>'. $ligne["NOM"]. '</td>';
                echo "<td> <a class=\"btn btn-primary\" href=\"update.php?id=". $ligne["ID"]. '">Modifier</a> </td>';
                echo "<td> <a class=\"btn btn-danger\" href=\"list.php?id=". $ligne["ID"]. '">Supprimer</a> </td>';
                echo "</tr>";
                }
            echo "</table>
                </div>";
        }
        else
        {
            echo "erreur de recuperation des donnees";
        }
     
    ?>
</body>
</html>