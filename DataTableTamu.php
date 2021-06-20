<?php 

include './Koneksi.php';

//----------------------------------------------------------------------------------
//join 2 tabel dan bisa lebih, tergantung kebutuhan
$sql = "SELECT * FROM tb_properti ";
$query = $conn->query($sql);
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;
$requestData= $_REQUEST;
$columns = array( 
	0=> 'nama_lengkap', 
	1=> 'email',
	2=> 'no_hp',
	3=> 'deskripsi',
);
//----------------------------------------------------------------------------------
$sql = "SELECT * FROM tb_tamu ";
$sql.= " WHERE 1=1";
if( !empty($requestData['search']['value']) ) {
	//----------------------------------------------------------------------------------
	$sql.=" AND (nama_properti LIKE '%".$requestData['search']['value']."%' ";    
	$sql.=" OR nama_lengkap LIKE '%".$requestData['search']['value']."%' ";
	$sql.=" OR email LIKE '%".$requestData['search']['value']."%' )";
}
//----------------------------------------------------------------------------------
$query=$conn->query($sql);
$totalFiltered = mysqli_num_rows($query);
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";	
$query=$conn->query($sql);
//----------------------------------------------------------------------------------
$data = array();
while( $row=mysqli_fetch_array($query) ) {
	$nestedData=array(); 
	$nestedData[] = $row["nama_lengkap"];
	$nestedData[] = $row["email"];
	$nestedData[] = $row["no_hp"];
	$nestedData[] = $row["deskripsi"];
	$nestedData[] = " <button onclick='HapusTamu(".$row['id_pesan'].")' class='btn btn-danger'>Hapus</button>";
	
	$data[] = $nestedData;
}
//----------------------------------------------------------------------------------
$json_data = array(
			"draw"            => intval( $requestData['draw'] ),  
			"recordsTotal"    => intval( $totalData ), 
			"recordsFiltered" => intval( $totalFiltered ), 
			"data"            => $data );
//----------------------------------------------------------------------------------
echo json_encode($json_data);

?>