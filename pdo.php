<?php
// Initializing connection data.
$host_db = 'localhost';
$name_db = 'test';
$user_db = 'root';
$pass_db = '';

try {

    $conn = new PDO("mysql:host=$host_db; dbname=$name_db", $user_db, $pass_db);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare('CALL sp_user(?,?,@user_id,@product_id)');    
    $stmt->execute(array("user2", "product2"));    
    $stmt->setFetchMode(PDO::FETCH_COLUMN, 0);
    $errors = $stmt->errorInfo();
    if($errors){
        echo $errors[2];
    }else{
        /*Do rest*/
    }

}catch(PDOException $e) {
  echo "Error : ".$e->getMessage();
}
?>