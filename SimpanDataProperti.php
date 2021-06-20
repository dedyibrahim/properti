<?php

include './Koneksi.php';

$nama_properti     = $_POST['nama_properti'];
$no_properti       = $_POST['no_properti'];
$harga_properti    = $_POST['harga_properti'];
$jumlah_kamar       = $_POST['jumlah_kamar'];
$daya_listrik       = $_POST['daya_listrik'];
$sumber_air         = $_POST['sumber_air'];
$keterangan         = $_POST['keterangan'];


if(empty($_FILES['foto']) || $nama_properti == ''|| $no_properti == ''|| $harga_properti == ''|| $daya_listrik == ''|| $sumber_air == ''|| $keterangan == ''){
    $response = array( 
        'status'   =>'error',
        'message' =>'Your data given is invalid',
        'data'   =>NULL,
       );
}else{

$namaFile           = $_FILES['foto']['name'];
$namaSementara      = $_FILES['foto']['tmp_name'];

$dirUpload          = "foto/";

$terupload          = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
$sql = "INSERT INTO tb_properti (nama_properti, no_properti, harga_properti, jumlah_kamar, daya_listrik, sumber_air, keterangan, foto) VALUES 
('$nama_properti', '$no_properti', '$harga_properti', '$jumlah_kamar', '$daya_listrik', '$sumber_air', '$keterangan', '$namaFile')";
$conn->query($sql);

$response = array( 
    'status'   =>'success',    
    'message' =>'Data properti berhasil dimasukan',
    'data'   =>NULL,
);
} else {
    $response = array( 
        'status'   =>'error',    
        'message' =>'Gagagl memasukan data properti',
        'data'   =>NULL,
    );
}

}
echo json_encode($response);
?>

