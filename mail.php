<?php
$result="";
require 'phpmailer/PHPMailerAutoload.php';
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='wstockcontrol@gmail.com';
    $mail->Password='kcqkxpdceoizhhie';

    $mail->setFrom('wstockcontrol@gmail.com','New web Visitor');
    $mail->addAddress('he.bodan@gmail.com');

    $mail->isHTML(true);
    $mail->Subject='From: '.$_POST['name'];
    
     $mail->Body="
    <!DOCTYPE html>
    <html lang='en'>
    <head>
      <meta charset='UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <title>Message</title>
    
      <style>
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
    
        .container {
          max-width: 1000px;
          width: 90%;
          margin: 0 auto;
        }
        .bg-dark {
          background: #343a40;
          margin-top: 40px;
          padding: 20px 0;
        }
        .alert {
          font-size: 1.5em;
          position: relative;
          padding: .75rem 1.25rem;
          margin-bottom: 2rem;
          border: 1px solid transparent;
          border-radius: .25rem;
        }
        .alert-primary {
          color: #004085;
          background-color: #cce5ff;
          border-color: #b8daff;
        }
    
        .img-fluid {
          max-width: 100%;
          height: auto;
        }
    
        .mensaje {
          width: 80%;
          font-size: 20px;
          margin: 0 auto 40px;
          color: #eee;
        }
    
        .texto {
          margin-top: 20px;
        
        }
    
        .footer {
          width: 100%;
          background: #48494a;
          text-align: center;
          color: #ddd;
          padding: 10px;
          font-size: 14px;
        }
        
       
        
        

        .footer span {
          text-decoration: underline;
        }
      </style>
    </head>
    <body>
      <div class='container'>
        <div class='bg-dark'>
          <div class='alert alert-primary'>
            <strong>Message From: </strong> $name
          </div>
          
          
          
          <div class='mensaje'>

            <h3> Email</h3>
            <div class='texto'> $email</div>
          </div>
    
          <div class='mensaje'>

            <h3> Subject</h3>
            <div class='texto'>$Subject</div>
          </div>
          
          <div class='mensaje'>

            <h3> Message</h3>
            <div class='texto'>$message</div>
          </div>
    
          <div class='footer'>
          
          </div>
        </div>
      </div>
    </body>
    </html>";

    
    
    if(!$mail->send()){
      header("Location: index.php");
    }
    else{
      $mail = new PHPMailer;
      $mail->isSMTP();
      $mail->Host='smtp.gmail.com';
      $mail->Port=587;
      $mail->SMTPAuth=true;
      $mail->SMTPSecure='tls';
      $mail->Username='wstockcontrol@gmail.com';
      $mail->Password='kcqkxpdceoizhhie';

      $mail->setFrom('wstockcontrol@gmail.com','GTConstruction');
      $mail->addAddress($email);

      $mail->isHTML(true);
      $mail->Subject='Message sent successfully';
    
      $mail->Body="Thank you for contact us!!! We will answer your message soon from our business email";

     if(!$mail->send()){
      header("Location: index.php");
    }
      header("Location: contact.php");
    }

    