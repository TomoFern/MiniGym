<?php
session_start();
function LoginUser(){
    $db = new SQLite3('C:\\xampp\Coursework\miniGym.db');
    $sql = 'SELECT username, password, fname FROM customer WHERE username=:uname';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":uname", $_POST["uname"], SQLITE3_TEXT);
    $result = $stmt->execute();

    while($row=$result->fetchArray(SQLITE3_NUM))
    {
        $arrayResult[] = $row;
    }
    
    if (empty($arrayResult)){
        return false;
    }
    elseif ($_POST["pass"] != $arrayResult[0][1]){
        return false;
    }
    else{
        $_SESSION["id"] = $_POST["uname"];
        $_SESSION["logIn"] = true;
        $_SESSION["name"] = $arrayResult[0][2];
        return true;
    }
}


?>