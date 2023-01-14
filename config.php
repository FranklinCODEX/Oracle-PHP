<?php

  /*
    decommenter la ligne suivante dans votre fichier php.ini :
       extension=pdo_oci 

  */
    // definition des parametres constantes de connexion a la BDD
    define("HOST","DESKTOP-GMVTV4R");
    define("USER","ENEAM");
    define("PASS","eneam");
    define("PORT", "1521");
    define("SERVICE", "XE");

    // ces informations exclu 'oci:dbname' se trouve dans le fichier tnsnames.ora situé dans le dossier C:\oraclexe\app\oracle\product\11.2.0\server\network\ADMIN
    $base = "oci:dbname=(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = DESKTOP-GMVTV4R)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = XE)
    )
  )";
    // creation de la variable de connexion
    try {
        $connexion = new PDO($base, USER, PASS);
    } catch (PDOException $erreur) {
       echo $erreur->getMessage();
    }
?>