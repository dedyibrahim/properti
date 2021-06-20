<?php 
include './Koneksi.php';
session_start();
$id_properti       = $_POST['id_pesan'];
$result = $conn->query("DELETE FROM tb_tamu WHERE tb_tamu.id_pesan = '$id_properti'");

$response = array( 
    'status'   =>'success',    
    'message' =>'Data pesan Berhasil dihapus',
    'data'   =>NULL,
);


echo json_encode($response);

?>