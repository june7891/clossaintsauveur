<?php

require_once "Admin/Controllers/Security.class.php";
require_once "Admin/functions/functions.php";

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

                       

                              
             $to = "contact@tomajune.com";
        $from = $email;
                    $subject = "Demande de réservation";

        $message = $name ." vous a envoyé ce message :" . "\n\n" . $text . "\n\n" . "Réservation souhaitée: du " . $startDate . " au " . $endDate . "\n\n" . "Contact: " . $phoneNumber ;

        $headers = "From:" . $from;

        $mail_status = mail($to,$subject,$message,$headers);

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