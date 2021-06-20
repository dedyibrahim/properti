<?php 

include './Koneksi.php';

//----------------------------------------------------------------------------------
//join 2 tabel dan bisa lebih, tergantung kebutuhan
$sql = "SELECT * FROM tb_pemesan LEFT JOIN tb_properti ON tb_pemesan.id_properti = tb_properti.id_properti  ";
$query = $conn->query($sql);
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;
$requestData= $_REQUEST;
$columns = array( 
	0 =>'nama_pemesan', 
	1 =>'email',
	2 =>'no_hp',
	3=> 'alamat_lengkap',
	4=> 'nama_properti',
);
//----------------------------------------------------------------------------------
$sql = "SELECT * FROM tb_pemesan LEFT JOIN tb_properti ON tb_pemesan.id_properti = tb_properti.id_properti ";
$sql.= " WHERE 1=1";
if( !empty($requestData['search']['value']) ) {
	//----------------------------------------------------------------------------------
	$sql.=" AND (nama_properti LIKE '%".$requestData['search']['value']."%' ";    
	$sql.=" OR no_properti LIKE '%".$requestData['search']['value']."%' ";
	$sql.=" OR harga_properti LIKE '%".$requestData['search']['value']."%' )";
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
	$nestedData[] = $row["nama_pemesan"];
	$nestedData[] = $row["email"];
	$nestedData[] = $row["no_hp"];
	$nestedData[] = $row["alamat_lengkap"];
	$nestedData[] = $row["nama_properti"];
	$nestedData[] = " <button onclick='HapusPemesan(".$row['id_pemesan'].")' class='btn btn-danger'>Hapus</button>";
	
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