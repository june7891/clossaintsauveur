
<?php

session_start();


$defaultLang = 'fr';


//If there was no language initialized, (empty $_SESSION['lang']) then
if (empty($_SESSION["lang"])) {
    //Set default lang if there was no language
    $_SESSION["lang"] = $defaultLang;
}

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));


    require_once "Admin/Controllers/AdminController.php";
    require_once "controllers/MainController.php";


    $mainController = new MainController();
    $adminController = new AdminController();




try {
    if (empty($_GET['page'])) {
        $mainController->getHomepage();
    } else {
        $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL)) ?? "";
        if (empty($url[0])) throw new Exception("La page n'existe pas");
        switch ($url[0]) {
            case "legal":
                $mainController->getLegalPage();
                break;
            case "CGV":
                $mainController->getCGVPage();
                break;
            case "sendReservationMessage":
                $mainController->sendMessage();
                break;
            case 'css-admin':
                switch ($url[1]){
                    case "login":
                        $adminController->getLoginPage();
                        break;
                    case "logout":
                        $adminController->logout();
                        break;
                    case "dashboard":
                        $adminController->getAdminPage();
                        break;
                    case "connection":
                        $adminController->connection();
                        break;
                    case "reservations":
                        $adminController->getReservations();
                        break;
                    case "addDisponibility":
                        $adminController->addDisponibility();
                        break;
                    case "addReservation":
                        $adminController->addReservation();
                        break;
                    case "removeReservation":
                        $adminController->removeReservation();
                        break;
                    case "removeDisponibility":
                        $adminController->removeDisponibility();
                        break;
                }  
                
                break;
            default:
            throw new Exception("La page n'existe pas");

            }    
    }
} catch (Exception $e) {
    $msg = $e->getMessage();
    echo $msg;
}


