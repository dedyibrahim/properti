<?php 
include './Koneksi.php';
session_start();
$id_properti       = $_POST['id_properti'];
$result = $conn->query("DELETE FROM tb_properti WHERE tb_properti.id_properti = '$id_properti'");

$response = array( 
    'status'   =>'success',    
    'message' =>'Data properti Berhasil dihapus',
    'data'   =>NULL,
);


echo json_encode($response);

?>