<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class MailerController extends Controller {

    // =============== [ Email ] ===================
    public function contact() {
        return view("frontend/secondary_pages/contact");
    }


    // ========== [ Compose Email ] ================
    public function composeEmail(Request $request) {

        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {

            // Email server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;  //Enable verbose debug output
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'travelgo2021@gmail.com';   //  sender username
            $mail->Password = 'Hanane123';       // sender password
            $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
            $mail->Port = 587;                          // port - 587/465

            $mail->setFrom('system@travelgo.com', 'TravelGO');
            $mail->addAddress('travelgo2021@gmail.com');



            $mail->isHTML(true);

            // Set email content format to HTML

            $mail->Subject = $request->emailSubject;
            $mail->Body    = $request->emailBody;


            if( !$mail->send() ) {
                return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
            }

            else {
                return back()->with("success", "Email has been sent.");
            }

        } catch (Exception $e) {
            return back()->with('error','Message could not be sent.');
        }

    }
}
