<?php
require "Security.class.php";
require "Admin/Repository/AdminRepository.php";
require_once "Admin/functions/functions.php";

class AdminController {


    private $adminRepository;
    
    public function __construct()
    {
        $this->adminRepository = new AdminRepository;
    }

    public function getAdminPage(){
        require_once('Admin/admin.views/dashboard.view.php');
    }
    
    public function getLoginPage(){
        require_once('Admin/admin.views/login.view.php');
    }


    public function connection(){

        
        if (!empty($_POST['username']) && !empty($_POST["password"])) {
            $username = Security::secureHTML($_POST['username']);
            $password = Security::secureHTML($_POST['password']);
      

            //vérifie si user existe
            if ($this->adminRepository->findUserByUsername($username)) {
                $loggedInUser = $this->adminRepository->login($username, $password);
                if ($loggedInUser) {
                    //Create session
                    $_SESSION['access'] = "admin";
                    header('Location: '.URL."dashboard");
                  
                } else {
                    flash("login", "Pseudo ou mot de passe incorrect!");
                    header('Location: ' . URL . "css-admin");
                }
            } else {
                flash("login", "Pseudo/email n'existe pas");
                header('Location: ' . URL . "css-admin");
            }
        } else {
            flash('login', "Veuillez remplir tous les champs!");
            header('Location: ' . URL . "css-admin");
        }
        
     }




    public function logout(){
        session_destroy();
       header('Location: '.URL."css-admin/login");
    }

    public function getReservations() {

        $reservations = $this->adminRepository->getAllReservations();
        $disponibilities = $this->adminRepository->getDisponibilities();
        
        require_once "Admin/admin.views/reservations.view.php";
    }

    public function addDisponibility() {

        $price = Security::secureHTML($_POST['price']);
        $start = Security::secureHTML($_POST['start']);
        $end = Security::secureHTML($_POST['end']);

        $this->adminRepository->addDbDisponibility($price, $start, $end);


        header('Location: '.URL.'reservations');
    }

    public function addReservation() {
        $name = Security::secureHTML($_POST['name']);
        $price = Security::secureHTML($_POST['price']);
        $start = Security::secureHTML($_POST['start']);
        $end = Security::secureHTML($_POST['end']);

        // $startDate = strtotime($start);
        // $startDay = date('d', $startDate);
        // $endDate = strtotime($end);
        // $startDay = date('d', $startDate);


        $date1 = new DateTime($start);
        $date2 = new DateTime($end);
        $interval = $date1->diff($date2);

        // echo "<pre>";
        // print_r(json_encode($interval->days));
        //  echo "</pre>";
 


        $disponibilities = $this->adminRepository->getDisponibilities();

        // foreach($disponibilities as $dispo) {
        //     $freeDates = getDatesFromRange($dispo['start'], $dispo['end']);
        //     echo "<pre>";
        //    print_r(json_encode($freeDates));
        //     echo "</pre>";
        // }


        // echo "<pre>";
        // print_r(json_encode($disponibilities));
        //  echo "</pre>";
        

    //    var_dump(getDatesFromRange($start, $end));



        if($interval->days == 3 || $interval->days > 3 ) {
            $this->adminRepository->addDbReservation($name, $price, $start, $end);

            header('Location: '.URL.'reservations'); 
        } else {
            flash('reservation', "3 jours minimum!");
            header('Location: '.URL.'reservations'); 
        }

       
    }


    public function removeReservation() {
        $id_reservation = (int)Security::secureHTML($_POST['id']);

        $this->adminRepository->deleteDbReservation($id_reservation);
        header('Location: '.URL.'reservations');

    }
    public function removeDisponibility() {
        $id_disponibility = (int)Security::secureHTML($_POST['id']);

        $this->adminRepository->deleteDbDisponibility($id_disponibility);
        header('Location: '.URL.'reservations');

    }
    // public function modifyDisponibility() {
    //     $id_disponibility = (int)Security::secureHTML($_POST['id']);

    //     $this->adminRepository->modifyDbDisponibility($id_disponibility);
    //     header('Location: '.URL.'reservations');

    // }



}