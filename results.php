<?php 

    $username = $_POST['user_username'];
    $password = $_POST['user_password'];
    $confirm = $_POST['user_confirm'];
    $email = $_POST['user_email'];
    $fullname = $_POST['user_fullname'];
    $address = $_POST['user_address'];


    if(empty($username)){
        $username_error = 'insert your username';
    }

    if(empty($password)){
        $password_error = 'insert your password';
    }

    if(empty($confirm)){
        $confirm_error = 'insert your password';
    }

    if(empty($email)){
        $email_error = 'insert your email';
    }

    if(empty($fullname)){
        $fullname_error = 'insert your fullname';
    }

    if(empty($address)){
        $address_error = 'insert your address';
    }


    if(empty($username_error) && empty($password_error) && empty($confirm_error) && empty($email_error) && empty($fullname_error) && empty($address_error)){
        include('registration.php');
    }
    else{
        include('validation.php');
    }

    

?>