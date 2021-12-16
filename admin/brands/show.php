<?php
include '../../dbconnect.php';
if(isset($_GET['id'])){
    echo 'spam';
    die();
}
// đổ dl
$stmt = $pdo->prepare('SELECT * FROM brands where id = :id');
$BrandsID = $_GET['id'];
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute(array('id' => $BrandsID));
?>