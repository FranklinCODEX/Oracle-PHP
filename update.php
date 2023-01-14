<?php
    require_once("config.php");

    $id = (int)$_GET["id"];

    if (isset($_POST))
    {
        foreach($_POST as $key => $value)
        {
            ${$key} = $value;
        }
    }

    //requete pour le remplissage dynamique avec les donnees existantes
    $request_select = "SELECT * FROM BANQUE WHERE BANQUE.ID = '$id' ";

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="icons-1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if(!isset($_POST["modifier"])): ?>
        <?php
            if($id == null)
            {
                header('Location: 404NotFound.html');
                exit;
            }
            else
            {
                $select = $connexion->query($request_select);
                if($select)
                {
                    $result_select = $select->fetch() ;
                }
            } 
        ?>
        <div class="container database mt-2">
            <h1 class="centrer">Modifier vos informations</h1>
            <form method="POST" action="update.php">

            <div class="row align-items-center gx-3 gy-3 mb-3" >
                <label for="matricule" class="col-sm-1 col-form-label">NOM</label>
                <div class="col-sm-3">
                <input type="text" class="offset-md-1 form-control" min="0" name="nom" placeholder="Nom de votre banque" value="<?= $result_select['NOM'] ?>" required>
                </div>
            </div>
    
            <div class="row align-items-center gx-3 gy-3 mb-3">
                <label for="nom" class="col-sm-1 col-form-label">CODE</label>
                <div class="col-sm-3">
                    <input type="text" class="offset-md-1 form-control" name="code" placeholder="votre code" value="<?= $result_select['CODE']?>" required>
                </div>
            </div>

            <div class="container">
                <div class="row align-items-center gx-3 gy-3 mt-3 offset-md-3">
                    <div class="col-5 col-sm-4 col-lg-4 col-xl-2">
                        <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-success" name="modifier" value="<?= $id?>"> Modifier</button>
                            <input type="reset" class=" btn btn-danger" name="effacer" value="Effacer">
                            <a href="index.php" class=" btn btn-warning" name="quitter">Quitter</a>
                            <input type="hidden" name="codes" value=" <?= $id?>">
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
        
        <?php 
        elseif (isset($_POST["nom"]) && isset($_POST["code"]) ):
        ?>
        <?php
         $_GET["id"] = $_POST["codes"];
         $codes = (int) $_GET["id"];
                // Preparationde la requete de mis a jour
                $update_requete = "UPDATE BANQUE SET NOM = '$nom', CODE = '$code' WHERE id = '$codes'";

                $update_user = $connexion->query($update_requete);

                    if($update_user)
                    {
                        echo "<script type=\"text/javascript\"> alert('Vos modifications sont enregistrées'); window.location='list.php';</script>";
                    } 
                    else
                    {
                        echo "<script type=\"text/javascript\"> alert('Erreur de modification'); window.location='index.php'; </script>";
                    }  
        ?>
        <?php endif; ?>

    
            
</body>
</html>