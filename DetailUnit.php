<?php 
include "./Koneksi.php";
$id_properti = $_POST['id_properti'];

$result = $conn->query("SELECT * FROM tb_properti WHERE id_properti='$id_properti'");

echo json_encode($result->fetch_array(MYSQLI_ASSOC));

?>