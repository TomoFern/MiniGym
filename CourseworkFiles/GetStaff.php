<?php
function getStaff(){
    $db = new SQLite3('C:\\xampp\Coursework\miniGym.db');
    $sql = "SELECT * FROM staff";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();

    while ($row = $result->fetchArray()){ // use fetchArray(SQLITE3_NUM) - another approach
        $arrayResult [] = $row; //adding a record until end of records
    }
    return $arrayResult;
}