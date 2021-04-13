<?php

function emptyFields($fname, $bday, $contact, $email, $uname, $pass, $cpass)
{
    if ($fname == "" || $bday == "" || $contact == "" || $email == "" || $uname == "" || $pass == "" || $cpass) {
        return true;
    } else {
        return false;
    }
}

function usernameExist($uname)
{
    $conn = new mysqli("localhost", "root", "", "Artsthetics");
    $sql = 'SELECT * FROM user_account WHERE user_username = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $uname);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        return $row;
    } else {
        return $result = false;
    }
}

function passMismatch($pass, $cpass)
{
    if ($pass !== $cpass) {
        return true;
    } else {
        return false;
    }
}

function emailExist($email)
{
    $conn = new mysqli("localhost", "root", "", "Artsthetics");
    $sql = 'SELECT * FROM user_account WHERE user_email = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        return $row;
    } else {
        return $result = false;
    }
}

function invalidEmail($email)
{
    $result = null;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function addUser($fname, $bday, $contact, $email, $uname, $pass, $vcode)
{
    $conn = new mysqli("localhost", "root", "", "Artsthetics");
    $sql = "INSERT INTO user_account (user_fullname, user_bday, user_contact, user_email, user_username, user_pass, v_code) VALUES (?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $fname, $bday, $contact, $email, $uname, $pass, $vcode);
    $stmt->execute();
    $stmt->close();
}


###################################
///////////////LOGIN///////////////
###################################

function loginEmpty($uname, $pass)
{
    if ($uname == "" || $pass == "") {
        return true;
    } else {
        return false;
    }
}

function wrongCredentials($uname)
{
    $user = usernameExist($uname);
    if ($user === false) {
        return true;
    } else {
        return false;
    }
}

function loginUser($uname, $pass)
{
    $user = usernameExist($uname);

    $passdb = $user["user_pass"];

    if ($pass === $passdb) {
        $checkPass = true;
    } else {
        $checkPass = false;
    }

    if ($checkPass === false) {
        echo "<script>";
        echo "Swal.fire(";
        echo "    'Try Again!',";
        echo "    'Wrong username/password!',";
        echo "    'warning'";
        echo ")";
        echo "</script>";
    } else if ($checkPass === true) {
        if ($user["v_status"] == 1) {
            header("location: ./home.php");
            session_start();
            $_SESSION["id"] = $user["user_id"];
            $_SESSION["fullname"] = $user["user_fullname"];
            $_SESSION["bday"] = $user["user_bday"];
            $_SESSION["contact"] = $user["user_contact"];
            $_SESSION["email"] = $user["user_email"];
            $_SESSION["uname"] = $user["user_username"];
            $_SESSION["pass"] = $user["user_pass"];
        } else {
            echo "<script>";
            echo "Swal.fire({";
            echo "    icon: 'error',";
            echo "    title: 'Oops...',";
            echo "    text: 'Your account is not yet verified! Please check your email.'";
            echo "})";
            echo "</script>";
        }
    }
}

/*========================
======= EDIT PROFILE =====
=========================*/

function emptyResetPwd($conpw, $newpw, $repeatPwd){
    if(empty($conpw) || empty($newpw) || empty($repeatPwd)){
        $result = true;
    }else{
        $result = false;
    }
}
function currpwdMatch($sessionpwd, $conpw){
    if($sessionpwd != $conpw){
        $result = true;
    }else{
        $result = false;
    }
}

function newpwdMatch($newpw, $repeatPwd){
    if($newpw != $repeatPwd){
        $result = true;
    }else{
        $result = false;
    }
}

function updateUser($conpw, $newpw, $repeatPwd, $sessionpwd, $fname, $bday, $num){
    if ($conpw === $sessionpwd && $newpw === $repeatPwd){
        $sessionUname = $_SESSION['uname'];

        $conn = new mysqli("localhost", "root", "", "Artsthetics");
        $sql = "UPDATE user_account SET 
        user_fullname = '$fname', 
        user_bday = '$bday', 
        user_contact= '$num', 
        user_pass = '$newpw'  
        WHERE user_username = '$sessionUname'";

        $conn->query($sql);
    }
}