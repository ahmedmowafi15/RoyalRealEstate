<?php

function clean($str)
{
    return htmlentities($str);
}

function redirect($location)
{
    header("location: {$location}");
    exit();
}

function set_message($message)
{
    if (!empty($message)) {
        $_SESSION['message'] = $message;
    } else {
        $message = "";
    }
}

function display_message()
{
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}




function email_exists($email)
{
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    $query = "SELECT id FROM users WHERE email = '$email'";
    if (row_count(query($query))) {
        return true;
    } else {
        return false;
    }
}

function user_exists($user)
{
    $user = filter_var($user,   FILTER_SANITIZE_STRING);
    $query = "SELECT id FROM users WHERE name = '$user'";
    if (row_count(query($query))) {
        return true;
    } else {
        return false;
    }
}

function validate_user_registration()
{
    $errors = [];
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        
        $name = clean($_POST['name']);
        $email = clean($_POST['email']);
        $phone = clean($_POST['phone']);
        $password = clean($_POST['password']);
        $confirm_password = clean($_POST['confirm_password']);
        if (strlen($phone) < 11) {
            $errors[] = "Your phone cannot be less then 11 characters";
        }
        if (strlen($phone) > 11) {
            $errors[] = "Your phone cannot be bigger then 11 characters";
        }
        if (strlen($name) < 3) {
            $errors[] = "Your name cannot be less then 3 characters";
        }
        if (strlen($name) > 20) {
            $errors[] = "Your name cannot be bigger then 20 characters";
        }
        if (email_exists($email)) {
            $errors[] = "Sorry that Email is already is taken";
        }
        if (user_exists($name)) {
            $errors[] = "Sorry that name is already is taken";
        }
        if (strlen($password) < 8) {
            $errors[] = "Your Password cannot be less then 8 characters";
        }
        if ($password != $confirm_password) {
            $errors[] = "The password was not confirmed correctly";
        }
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo '<div class="alert alert alert-danger">' . $error . '
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button></div>';
            }
        } else {
           
            $name   = filter_var($name,FILTER_SANITIZE_STRING);
            $phone   = filter_var($phone,FILTER_SANITIZE_STRING);
            $email      = filter_var($email,FILTER_SANITIZE_EMAIL);
            $password   = filter_var($password,FILTER_SANITIZE_STRING);
            createuser( $name,$phone, $email, $password);
        }
    }
}

function createuser( $name,$phone, $email, $password)
{
    $token = bin2hex (random_bytes (50));
    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(phone,name,email,password,active,role) ";
    $sql .= "VALUES('$phone','$name','$email','$password','active','user')";
    confirm(query($sql));
    set_message('create account successfully can login now');
    redirect('login.php');
}



function validate_user_login()
{
    $errors = [];
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = clean($_POST['email']);
        $password = clean($_POST['password']);
        
        if (empty($email)) {
            $errors[] = "Email field cannot be empty";
        }
        if (empty($password)) {
            $errors[] = "Password field cannot be empty";
        }
        if (empty($errors)) {
            if (user_login($email, $password)) {
                redirect('index.php');
            } else {
                $errors[] = "your email or password is incorrect. please try again";
            }
        }
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo '<div class="alert alert alert-danger">' . $error . '
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button></div>';
            }
        }
    }

}

function user_login($email, $password)
{     
    $email      = filter_var($email,    FILTER_SANITIZE_EMAIL);
    $query = "SELECT * FROM users WHERE email='$email' ";
    $result = query($query);
    if (row_count($result) == 1) {
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(password_verify($password,$row['password'])){
         $update = "UPDATE users SET WHERE email='$email' ";
         $result2 = query($update);
        $_SESSION['email'] = $email;
        return true;
        }else{
            return false;
        }
       
    } else {
        return false;
    }
}

function login_check_admin()
{
    if (isset($_SESSION['email'])) {
        $email      = filter_var($_SESSION['email'],    FILTER_SANITIZE_EMAIL);
        $query = "SELECT role FROM users WHERE email='$email'";
        $result = query($query);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       if($row['role']=='admin'){
        return true;
       }
    } 
        redirect('index.php');
    
}

function login_check_pages()
{
    if (isset($_SESSION['email'])) {
        redirect('admin.php');
    }
}


