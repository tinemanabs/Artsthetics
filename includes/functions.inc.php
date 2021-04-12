<?php

function emptyFields($fname, $bday, $contact, $email, $uname, $pass, $cpass){
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

function addUser($fname, $bday, $contact, $email, $uname, $pass)
{
    $conn = new mysqli("localhost", "root", "", "Artsthetics");
    $sql = "INSERT INTO user_account (user_fullname, user_bday, user_contact, user_email, user_username, user_pass) VALUES (?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $fname, $bday, $contact, $email, $uname, $pass);
    $stmt->execute();
    $stmt->close();
}


###################################
///////////////LOGIN///////////////
###################################

function loginEmpty($uname, $pass) {
    if ($uname == "" || $pass == "") {
        return true;
    } else {
        return false;
    }
}

function wrongCredentials($uname) {
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
        echo '<script>alert("Wrong Credentials!")</script>';
    } else if ($checkPass === true) {
        header("location: ../home.php");
        session_start();
        $_SESSION["id"] = $user["user_id"];
        $_SESSION["fullname"] = $user["user_fullname"];
        $_SESSION["bday"] = $user["user_bday"];
        $_SESSION["contact"] = $user["user_contact"];
        $_SESSION["email"] = $user["user_email"];
        $_SESSION["uname"] = $user["user_username"];
        $_SESSION["pass"] = $user["user_pass"];
    }
}
