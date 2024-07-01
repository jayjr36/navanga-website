<?php

session_start();
header('Access-Control-Allow-Origin: *');
require_once('PHPMAILER/PHPMailer_.php'); // use require_once instead of include_once

// define a function to send mail using PHPMailer
function send_mail($to, $from, $name, $subject, $msg, $reply_to, $password) {
    send_mail_by_PHPMailer($to, $from, $name, $subject, $msg, $reply_to, $password);
}

// check if any of the POST variables are set and call the send_mail function with the appropriate parameters
if (isset($_POST['mailMe'])) {
    send_mail("enquiries@navangahealthcare.co.tz", $_POST['from'], $_POST['name'], $_POST['subject'], $_POST['msg'], "enquiries@navangahealthcare.co.tz", "enquiry_tests");
    send_mail("admin@navangahealthcare.co.tz", $_POST['from'], $_POST['name'], $_POST['subject'], $_POST['msg'], "admin@navangahealthcare.co.tz", "navanga@77173");
}
if (isset($_POST['mailDevs'])) {
    send_mail("developer@navangahealthcare.co.tz", $_POST['from'], $_POST['name'], $_POST['subject'], $_POST['msg'], "developer@navangahealthcare.co.tz", "Var_le_con");
}
if (isset($_POST['sendFeedBack'])) {
    send_mail($_POST['to'], $_POST['from'], $_POST['name'], $_POST['subject'], $_POST['msg'], "developer@navangahealthcare.co.tz", "Var_le_con");
}

// check if getEmails is set and fetch the emails from the server
if (isset($_POST['getEmails'])) {

    // define the host, user and password variables
    $host = '{mail.varlecon.com:993/novalidate-cert/ssl}INBOX';
    $user = 'admin@varlecon.com';
    $password = 'Var_le_con';

    // create an empty array to store the email data
    $data = array();

    // open the imap connection
    $imap = imap_open($host, $user, $password) or die("Connection failed: " . imap_last_error());

    // search for all emails
    $emailData = imap_search($imap, 'ALL');

    // loop through the email data and fetch the body of each message
    if (!empty($emailData)) {
        foreach ($emailData as $msg) {
            $body = imap_fetchbody($imap, $msg, "1");
            // decode the body and push it to the data array
            array_push($data,  quoted_printable_decode($body));
        }
    }

    // encode the data array as json and echo it
    echo json_encode($data);

    // close the imap connection
    imap_close($imap);
}
