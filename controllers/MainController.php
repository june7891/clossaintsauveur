<?php

require_once "utils/Security.class.php";
require_once "utils/functions/functions.php";

class MainController {

    public function getHomepage() {
       require_once "views/homepage.view.php"; 
    }
    
    public function getLegalPage() {
        require_once "views/legal.view.php"; 
    }
    public function getCGVPage() {
        require_once "views/cgv.view.php"; 
    }
    public function getEmailTemplate() {
        require_once "views/email-template.php"; 
    }

 
    public function sendMessage() {

        $email = Security::secureHTML($_POST['email']);
        $name = Security::secureHTML($_POST['name']);
        $phoneNumber = Security::secureHTML($_POST['phoneNumber']);
        $startDate = Security::secureHTML($_POST['startDate']);
        $endDate = Security::secureHTML($_POST['endDate']);
        $text = Security::secureHTML($_POST['message']);

        
        $date1 = new DateTime($startDate);
        $date2 = new DateTime($endDate);
        $interval = $date1->diff($date2);

        if(!empty($name) && !empty($email) && !empty($text) && !empty($phoneNumber) && !empty($startDate) && !empty($endDate)){

            // reCAPTCHA validation
            if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

                // Google secret API
                $secretAPIkey = '6LdcfyMkAAAAAPiSHM7VyAnRqyt4sYJWxKIy2uIh';

                // reCAPTCHA response verification
                $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretAPIkey.'&response='.$_POST['g-recaptcha-response']);

                // Decode JSON data
                $response = json_decode($verifyResponse);
                    if($response->success && $interval->days == 3 || $interval->days > 3 && $date1 < $date2 ){

                       
                       
            $to = "toma.june@gmail.com";
            // $to = "clossaintsauveur33@gmail.com";
            $from = $email;
            $subject = "Demande de réservation sur le site clossaintsauveur.com";

            $message = "<html>
         <head>
<title>HTML email</title>
<style>
.email-template {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color:#e6e8d4;
    height: 100vh;
  }
  
  
  .information {
    padding: 20px;
    border: 1px solid #5c5a55;
    height: 60%;
    width: 70%;
    background-color: whitesmoke;
    border-radius: 15px;
  }
  
  .email-template hr {
    color:#e6e8d4
  }
  </style>
</head>
            <body>
   
                <div class='email-container'>
                    <h1>Vous avez reçu une demande de réservation</h1>
            
                    <div class='information'>
                        <p>Nom : $name </p>
                        <hr>
                        <p>Email: $email </p>
                        <hr>
                        <p>Téléphone: $phoneNumber</p>
                        <hr>
                        <p>Date d'arrivée : $startDate</p>
                        <hr>
                        <p>Date de départ : $endDate</p>
                        <hr>
                        <p>Message : $text</p>
            
                    </div>
                </div>
            
            </body>
            
            </html>
            ";

         

            $headers = "From:" . $from ."\r\n";
            $headers .= "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html; charset=iso-8859-1" . "\r\n";
        

            mail($to,$subject,$message,$headers);

         flash('reservation', "Votre demande de réservation a été bien envoyée!");

                        header('Location: ' . URL . "#reservation");

                        $response = array(
                            "status" => "alert-success",
                            "message" => "Your mail have been sent."
                        );
                    } else {

                        flash('reservation', "Votre demande n'a pas pu être envoyé. Veuillez choisir 3 nuits minimum.");

                        header('Location: ' . URL . "#reservation");

                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Robot verification failed, please try again."
                        );
                    }       
            } else{ 
                $response = array(
                    "status" => "alert-danger",
                    "message" => "Plese check on the reCAPTCHA box."
                );
                
                flash('reservation', "Veuillez cocher la case reCAPTCHA");
                header('Location: ' . URL . "#reservation");

            } 
        }  else{ 
            $response = array(
                "status" => "alert-danger",
                "message" => "All the fields are required."
            );

            flash('reservation', "Tous les champs sont obligatoires.");
            header('Location: ' . URL . "#reservation");
        }

        // require_once "views/homepage.view.php"; 
    }
}