<?php

function LoginStaff(){
    $db = new SQLite3('C:\\xampp\Coursework\miniGym.db');
    $sql = 'SELECT id, status, role FROM staff WHERE email=:email';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":email", $_POST["email"], SQLITE3_TEXT);
    $result = $stmt->execute();

    while($row=$result->fetchArray(SQLITE3_NUM))
    {
        $arrayResult[] = $row;
    }
    
    if (empty($arrayResult)){
        return false;
    }
    elseif ($arrayResult[0][1] != "active"){
        return false;
    }
    elseif ($_POST["id"] != $arrayResult[0][0]){
        return false;
    }
    else{
        $_SESSION["logIn"] = true;
        $_SESSION["role"] = $arrayResult[0][2];
        return true;
    }
}


?>