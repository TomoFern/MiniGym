<?php
session_start();

function UpdatePass()
{
    $db = new SQLite3('C:\\xampp\Coursework\miniGym.db');
    $sql = 'UPDATE customer SET password = :pass WHERE username=:uname';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":pass", $_POST["pass"], SQLITE3_TEXT);
    $stmt->bindParam(":uname", $_SESSION["user"], SQLITE3_TEXT);

    $stmt->execute();

    if(!$stmt){
        return false;
    }
    else{
        return true;
    }

}


?>