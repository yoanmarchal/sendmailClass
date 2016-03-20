<?php


// var_dump($_POST);

require '_inc.php';

$errors = [];
$emails = ['contact@yoanmarchal.com', 'depannage@yoanmarchal.com', 'design@yoanmarchal.com'];

$validator = new Validator($_POST);
$validator->check('name', 'required');
$validator->check('email', 'required');
$validator->check('email', 'email');
$validator->check('message', 'required');
$validator->check('service', 'in', array_keys($emails));
$errors = $validator->errors();

//dd($errors);

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('location: index.php');
} else {
    $_SESSION['success'] = 1;
    $headers = 'From:'.$_POST['email'];
    mail($emails[$_POST['service']], 'Formulaire de contact de '.$_POST['name'], $_POST['message'], $headers);
    header('location: index.php');
}

die();
