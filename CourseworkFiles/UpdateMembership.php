<?php
function UpdateMem(){
    $db = new SQLite3('C:\\xampp\Coursework\miniGym.db');
    $sql = 'SELECT * FROM payment WHERE custUser = :user';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":user", $_SESSION["id"], SQLITE3_TEXT);
    $result = $stmt->execute();

    while($row=$result->fetchArray(SQLITE3_NUM))
    {
        $arrayResult[] = $row;
    }

    if (empty($arrayResult)) {
        $sql = 'INSERT INTO payment(date, memType, custUser) VALUES (getdate(), :mem, :user)';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(":mem", $_POST["memType"], SQLITE3_TEXT);
        $stmt->bindParam(":user", $_SESSION["id"], SQLITE3_TEXT);

        //execute the sql statement
        $stmt->execute();
    }
    else{
        $sql = 'UPDATE payment SET memType = :mem WHERE custUser = :user';
        $stmt = $db->prepare($sql);

        $stmt->bindParam(":mem", $_POST["memType"], SQLITE3_TEXT);
        $stmt->bindParam(":user", $_SESSION["id"], SQLITE3_TEXT);

        //execute the sql statement
        $stmt->execute();
    }

    //the logic
    if(!$stmt){
        return false;
    }
    else{
        return true;
    }
}