<?php 

include './Koneksi.php';

$id_properti     = $_POST['id_properti'];
$nama_pemesan    = $_POST['nama_pemesan'];
$no_hp           = $_POST['no_hp']; 
$email           = $_POST['email']; 
$alamat_lengkap  = $_POST['alamat_lengkap']; 


if($id_properti == ''|| $nama_pemesan == ''|| $no_hp == ''|| $email == ''|| $alamat_lengkap == ''){
    $response = array( 
        'status'   =>'error',
        'message' =>'Your data given is invalid',
        'data'   =>NULL,
       );
}else{

    $sql = "INSERT INTO tb_pemesan (id_properti,nama_pemesan,no_hp,email,alamat_lengkap)VALUES('$id_properti','$nama_pemesan','$no_hp','$email','$alamat_lengkap')";

   $conn->query($sql);
$response = array( 
    'status'   =>'success',    
    'message' =>'Data booking berhasil ditambahkan, customer service kami akan menghubungi anda',
    'data'   =>NULL,
);

}

echo json_encode($response);

?>