<?php

function unameExist($conn, $uname){
    $sql = 'SELECT * FROM user_account WHERE user_username = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $uname);

    $stmt->execute();

    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()){
        return $row;
    } else {
        return $result = false;
    }
}

function passMismatch($pass, $cpass) {
    if ($pass !== $cpass) {
        return true;
    } else {
        return false;
    }
}

?>