<?php
// for use PHP Mailer without composer : 

// ex. Create a folder in root/PHPMAILER
// Put on this folder this 3 files find in "src" 
// folder of the distribution : 
// PHPMailer.php , SMTP.php , Exception.php
  
  // include PHP Mailer
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  include 'PHPMailer.php';
  include 'SMTP.php';
  include 'Exception.php';

  // i made a function 

   /*
    *
    * Function send_mail_by_PHPMailer($to, $from, $subject, $message);
    * send a mail by PHPMailer method
    * @Param $to -> mail to send
    * @Param $from -> sender of mail
    * @Param $subject -> suject of mail
    * @Param $message -> html content with datas
    * @Return true if success / Json encoded error message if error 
    * !! need -> classes/Exception.php - classes/PHPMailer.php - classes/SMTP.php
    *
    */
    function send_mail_by_PHPMailer($to, $from, $name, $subject, $message, $username, $password){

          // SEND MAIL by PHP MAILER
          $mail = new PHPMailer();
          $mail->CharSet = 'UTF-8';
          $mail->IsSMTP(); // Use SMTP protocol
          $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
          $mail->Host = 'mail.navangahealthcare.co.tz'; // Specify  SMTP server
          $mail->SMTPAuth = true; // Auth. SMTP
          $mail->Username = $username; // Mail who send by PHPMailer
          $mail->Password = $password; // your pass mail box
          $mail->SMTPSecure = 'ssl'; // Accept SSL
          $mail->Port = 465; // port of your out server
          $mail->setFrom($from, $name, 0); // Mail to send at
          $mail->addAddress($to); // Add sender
          $mail->addReplyTo($from); // Adress to reply
          $mail->isHTML(true); // use HTML message
          $mail->Subject = $subject;
          $mail->Body = $message;
          $data = array();
          // SEND
          if( !$mail->send() ){

              // render error if it is
              $tab = array('error' => 'Mailer Error: '.$mail->ErrorInfo );
              echo json_encode($tab);
              exit;
          }
          else{
              // return true if message is send
              $data['msg'] = 'Email sent...';
              echo json_encode($data);
              return true;
          }

    }
    /*
    *
    * END send_mail_by_PHPMailer($to, $from, $subject, $message)
    * send a mail by PHPMailer method
    *
    */
  
    // use function :
    //send_mail_by_PHPMailer($to, $from, $subject, $message);
    