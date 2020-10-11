<?php
require_once 'config/config.php';
// Configure your Subject Prefix and Recipient here

$subjectPrefix = '[Contact via website]';
$emailTo       = constant('EMAIL');
$errors = array(); // array to hold validation errors
$data   = array(); // array to pass back data
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = stripslashes(trim($_POST['name']));
    $email   = stripslashes(trim($_POST['email']));
    $subject = stripslashes(trim($_POST['subject']));
    $message = stripslashes(trim($_POST['message']));
    if (empty($name)) {
        $errors['name'] = 'Name is required.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email is invalid.';
    }
    if (empty($subject)) {
        $errors['subject'] = 'Subject is required.';
    }
    if (empty($message)) {
        $errors['message'] = 'Message is required.';
    }
    // if there are any errors in our errors array, return a success boolean or false
    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {
        $para      = 'jesusesteban12321@gmail.com';
        $titulo    = 'El título';
        $mensaje   = 'Hola';
        $cabeceras = 'From: yurlenissuarez12321@gmail.com' . "\r\n" .
            'Reply-To: jesusesteban12321@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($para, $titulo, $mensaje, $cabeceras);
        $data['success'] = true;
        $data['message'] = 'Congratulations. Your message has been sent successfully';
    }
    // return all our data to an AJAX call
    if($data['success']==true){
        # code...
        header('Location: index.php?status="Success al enviar el corre"');
    }else{
        header('Location: index.php?status="Se produjo un error al enviar el corre"');
    }
}



