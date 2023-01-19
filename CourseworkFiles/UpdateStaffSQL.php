<?php
function UpdateStaff(){
    $db = new SQLite3('C:\\xampp\Coursework\miniGym.db');
    $sql = 'UPDATE staff SET fname = :fname, lname = :lname, email = :email, status = :status, role = :role WHERE username = :uid';
    $stmt = $db->prepare($sql);

    $stmt->bindParam(":fname", $_POST["fname"], SQLITE3_TEXT);
    $stmt->bindParam(":lname", $_POST["lname"], SQLITE3_TEXT); 
    $stmt->bindParam(":email", $_POST["email"], SQLITE3_TEXT);
    $stmt->bindParam(":status", $_POST["status"], SQLITE3_TEXT);
    $stmt->bindParam(":role", $_POST["role"], SQLITE3_TEXT);
    $stmt->bindParam(":uid", $_GET["uid"], SQLITE3_TEXT);

    //execute the sql statement
    $stmt->execute();

    //the logic
    if(!$stmt){
        return false;
    }
    else{
        return true;
    }
}
