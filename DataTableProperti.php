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
	0 =>'nama_properti', 
	1 => 'no_properti',
	2=> 'harga_properti',
	3=> 'jumlah_kamar',
	4=> 'daya_listrik'
);
//----------------------------------------------------------------------------------
$sql = "SELECT * FROM tb_properti ";
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
	$nestedData[] = $row["nama_properti"];
	$nestedData[] = $row["no_properti"];
	$nestedData[] = $row["harga_properti"];
	$nestedData[] = $row["jumlah_kamar"];
	$nestedData[] = $row["daya_listrik"];
	$nestedData[] = "<button onclick='Editproperti(".$row['id_properti'].")' class='btn btn-warning'>Edit</button> <button onclick='Hapusproperti(".$row['id_properti'].")' class='btn btn-danger'>Hapus</button>";
	
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