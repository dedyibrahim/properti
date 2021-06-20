<?php 
include './Koneksi.php';
session_start();
$email       = $_POST['email'];
$password    = md5($_POST['password']);

$result = $conn->query("SELECT * FROM tb_user  WHERE  email ='$email' AND password ='$password'");
$row = $result->fetch_assoc();

if($email == '' || $password == ''){
    $response = array( 
        'status'   =>'error',
        'message' =>'Your data given is invalid',
        'data'   =>NULL,
       );
}else{
    if($result->num_rows >0){
    
        $_SESSION["email"]         = $row['email'];
        $_SESSION["nama_lengkap"]  = $row['nama_lengkap']; 

        $response = array( 
        'status'   =>'success',    
        'message' =>'Login SuccessFully',
        'data'   =>NULL,
    );

}else{
    $response = array(
        'status'   =>'error', 
        'message' =>'Login Is Not Authenticated',
        'data'   =>NULL,
       );
}
}

echo json_encode($response);

?>