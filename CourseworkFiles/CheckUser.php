<?php
session_start();

function checkUser()
{
    $db = new SQLite3('C:\\xampp\Coursework\miniGym.db');
    $sql = 'SELECT email, postcode, datebirth FROM customer WHERE username=:uname';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":uname", $_POST["uname"], SQLITE3_TEXT);
    $result = $stmt->execute();

    while ($row = $result->fetchArray(SQLITE3_NUM)) {
        $arrayResult[] = $row;
    }

    if (empty($arrayResult)) {
        return false;
    } elseif ($arrayResult[0][0] != $_POST["email"]) {
        return false;
    } elseif ($arrayResult[0][1] != $_POST["pstcd"]) {
        return false;
    } elseif ($arrayResult[0][2] != $_POST["dob"]) {
        return false;
    } else {
        $_SESSION["user"] = $_POST["uname"];
        return true;
    }
}


?>