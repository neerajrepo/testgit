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

// Executing command for stored procedure
if (!$rs = $mysqli->query('CALL sp_item("item111",@item_id)')) {
    printf("Error: %s", $mysqli->error);
}else{
    
    if($rs){ 
        echo "<pre>";
        while($row = $rs->fetch_array()){
            print_r($row);
        }
        echo "</pre>";
    }
}
?>
