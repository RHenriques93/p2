<!--CASO ESTEJAS A LER ISTO DURO ENTÃO EVENTUALMENTE SERÁS HOMOSSEXUAL, POSTO ISO, TERÁS DE SER EXTERMINADO PELO ZÉ BORREGO-->
<!--  TESTE CARALHOOOOOOOOOOOOOOOOOOO  -->


<!DOCTYPE html>

<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-UA-compatible" content="IE-edge">
    <title>Projeto Final</title>
    <meta name="description" content="Projeto Final">
    <meta name="keywords" content="Programação, ISMT">
    <meta name="author" content="André Ferreira e Rafael Henriques">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/costum.css">
    <link href="css/fontawesome/css/all.css" rel="stylesheet">

</head>

<body>   



    <?php include("inc/menu.inc.php"); ?>


   
    <?php

$host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$host = basename($host);
//echo $host;

if($host == "index.php") {

 require("inc/main.inc.php");
} else { 

    if(isset($_REQUEST["op"])) {
      $op = $_REQUEST["op"]; 

              switch($op) {
        case "sobre": require("inc/sobre.inc.php"); break;
        case "servicos": require("inc/servicos.inc.php"); break;
        case "contactos": require("inc/contactos.inc.php"); break;
        case "area": require("inc/area.inc.php"); break;
        case "subarea": require("inc/subarea.inc.php"); break;
        case "login": require("inc/login.inc.php"); break;
        case "registar": require("inc/registar.inc.php"); break;
        case "success": require("inc/login_success.inc.php"); break;
        case "logout": require("inc/logout.inc.php"); break;
        case "procura": require("inc/procura.inc.php"); break;
        case "servicepage": require("inc/service_page.inc.php"); break;
        case "reqpage": require("inc/reqpage.inc.php"); break;
        case "pedidos": require("inc/pedidos.inc.php"); break;
        case "usersettings": require("inc/user_settings.inc.php"); break; 
        
        
        
        default: require("inc/main.inc.php"); break;
      }
  } else {
      require("inc/main.inc.php");
  }
}





if (strpos($host, "search=") !== false) {
 require("inc/procura.inc.php");
}

?>
    <?php 
        include("inc/footer.inc.php");
    ?>

    <script type="text/javascript" src="js/jquery-min.js"></script>
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>

</html>

<?php 


