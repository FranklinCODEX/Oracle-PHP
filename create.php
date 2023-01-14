<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="icons-1.5.0/font/bootstrap-icons.css">
    
</head>
<script src="icons-1.5.0/font/bootstrap-icons.json"></script>
<script src="icons-1.5.0\font\bootstrap-icons.js" crossorigin="anonymous"></script>

<body background="background-site.jpg">

    <header class="mx-3 p-3">
       <div class="container text-center fs-3 fw-bold">
        Start there !
       </div>
    </header>

        <div class="container gy-3 gx-3 align-items-center offset-md-4 mt-3">
            <form method="POST" action="gerer.php" class="need-validation">

            <div class="row align-items-center gx-3 gy-3 mb-3">
                <label for="nom" class="col-sm-1 col-form-label">Nom</label>
                <div class="col-sm-3">
                    <input type="text" class="offset-md-1 form-control" name="nom" placeholder="Le nom de votre banque" required>
                </div>
            </div>
    
            <div class="row align-items-center gx-3 gy-3 mb-3">
                <label for="prenom" class="col-sm-1 col-form-label">Code Banque</label>
                <div class="col-sm-3">
                    <input type="text" class="offset-md-1 form-control" name="code" placeholder="Exemple BOA " required>
                </div>
            </div> 

            <div class="container">
                <div class="row align-items-center gx-3 gy-3 mt-3 offset-md-5">
                    <div class="col-5 col-sm-4 col-lg-4 col-xl-2">
                        <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                            <input type="submit" class="btn btn-success" name="envoyer" value="Envoyer">
                            <input type="reset" class=" btn btn-danger" name="effacer" value="Effacer">
                            <a href="index.php" class=" btn btn-warning" name="quitter">Quitter</a>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
        <script type="text/javascript">
        $(window).on('load', function () {
          if (feather) {
            feather.replace({
              width: 14,
              height: 14
            });
          }
        })
      </script>

        
        
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    
</body>
</html>