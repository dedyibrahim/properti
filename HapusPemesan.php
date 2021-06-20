<?php 
include './Koneksi.php';
session_start();
$id_pemesan       = $_POST['id_pemesan'];
$result = $conn->query("DELETE FROM tb_pemesan WHERE tb_pemesan.id_pemesan = '$id_pemesan'");

$response = array( 
    'status'   =>'success',    
    'message' =>'Data Pemesan Berhasil dihapus',
    'data'   =>NULL,
);

echo json_encode($response);
?>