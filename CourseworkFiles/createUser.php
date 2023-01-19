<?php

function createUser(){
    $userName = "";
    $r = rand(10, 99);

    $userName .= substr($_POST["fname"],0 , 3);
    $userName .= substr($_POST["lname"], -2);
    $userName .= $r;

    $db = new SQLite3('C:\\xampp\Coursework\miniGym.db');
    $sql = 'INSERT INTO customer(username, fname, lname, datebirth, email, postcode, password) VALUES (:uname, :fname, :lname, :dob, :email, :pstcd, :pswrd)';
    $stmt = $db->prepare($sql);

    $stmt->bindParam(":uname", $userName, SQLITE3_TEXT);
    $stmt->bindParam(":fname", $_POST["fname"], SQLITE3_TEXT);
    $stmt->bindParam(":lname", $_POST["lname"], SQLITE3_TEXT); 
    $stmt->bindParam(":dob", $_POST["dob"], SQLITE3_TEXT);
    $stmt->bindParam(":email", $_POST["email"], SQLITE3_TEXT);
    $stmt->bindParam(":pstcd", $_POST["pstcd"], SQLITE3_TEXT);
    $stmt->bindParam(":pswrd", $_POST["pswrd"], SQLITE3_TEXT);

    //execute the sql statement
    $stmt->execute();

    //the logic
    if(!$stmt){
        $userName = "fail";
    }

    return $userName;
}
