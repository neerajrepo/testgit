<?php 
// Initializing database connection string variables
$host = "localhost";
$user = "root";
$password = "";
$database = "test";

// Creating database connection
$mysqli = new mysqli($host, $user, $password, $database);

// Checking if connection established or is there any error
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
/*
// Executing command for stored procedure
if (!$rs = $mysqli->query('CALL sp_item("item1",@item_id)')) {
    printf("Error : %s", $mysqli->error);
}else{
    // Checking if any 
    if($rs){ 
        echo "<pre>";
        while($row = $rs->fetch_array()){
            print_r($row);
        }
        echo "</pre>";
    }
}
 
*/


// Executing command for stored procedure
if (!$rs = $mysqli->query('CALL sp_update_employee_dob(1,now())')) {
    printf("Error : %s", $mysqli->error);
}else{
    // Checking if any 
    if($rs){ 
        echo "<pre>";
        while($row = $rs->fetch_array()){
            print_r($row);
        }
        echo "</pre>";
    }
}

?> 