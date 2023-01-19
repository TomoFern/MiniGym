<?php
function UpdateUser(){
    $db = new SQLite3('C:\\xampp\Coursework\miniGym.db');
    $sql = 'UPDATE customer SET fname = :fname, lname = :lname, datebirth = :dob, email = :email, postcode = :pstcd WHERE username = :uid';
    $stmt = $db->prepare($sql);

    $stmt->bindParam(":fname", $_POST["fname"], SQLITE3_TEXT);
    $stmt->bindParam(":lname", $_POST["lname"], SQLITE3_TEXT); 
    $stmt->bindParam(":dob", $_POST["dob"], SQLITE3_TEXT);
    $stmt->bindParam(":email", $_POST["email"], SQLITE3_TEXT);
    $stmt->bindParam(":pstcd", $_POST["pstcd"], SQLITE3_TEXT);
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
