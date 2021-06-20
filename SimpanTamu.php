<?php 

include "./Koneksi.php";

$nama_pesan     = $_POST['nama_pesan'];
$no_hp          = $_POST['no_hp'];
$deskripsi      = $_POST['deskripsi'];
$email_hp       = $_POST['email_hp'];

if( $nama_pesan == ''|| $no_hp == ''|| $deskripsi == ''|| $email_hp == ''){
  $response = array( 
      'status'   =>'error',
      'message' =>'Your data given is invalid',
      'data'   =>NULL,
     );
}else{
if (!$conn -> query("INSERT INTO tb_tamu (nama_lengkap,email,no_hp,deskripsi) VALUES ('$nama_pesan','$no_hp','$deskripsi','$email_hp')")) {
    echo("Error description: " . $conn -> error);
 
    $response = array( 
      'status'   =>'error',
      'message' =>'Your data given is invalid',
      'data'   =>NULL,
     );
}
  }
echo json_encode($response);

?>