<?php
header("Acess-Control-Allow-Origin: *");
// connect to the database using PDO
$db = new PDO('mysql:host=localhost;dbname=users', 'root', '');

// insert the data from the form into the database
$stmt = $db->query("SELECT COUNT(id) AS id FROM user WHERE fullname = '".$_POST["fullname"]."' AND password = '".$_POST["password"]."'");
$user = $stmt->fetch();
$connect = true;
if($user["id"] == 0){
    $connect = false;
}
echo json_encode(array("connected" => $connect));
?>