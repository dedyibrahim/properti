<?php
session_start(); 
if($_SESSION['email'] == NULL){
   header('Location: index.php');
}
?>
<html>
<?php  include './umum/header.php' ?>
<body>
<?php  include './umum/Navbar.php' ?>
<div class="container">
<div class="card mt-5">
<div class="card-header bg-info"><p class="h3 text-white">Data Tamu</p></div>
<div class="card-body">
<div class="row">
<div class="col">

<table id="example" class="table table-bodered table-striped table-hover" style="width:100%">
        <thead>
            <tr>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Deskripsi</th>
                <th>Aksi </th>
            </tr>
        </thead>
       
    </table>

</div>
</div>
</div>
</div>

<script type="text/javascript">


$(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "DataTableTamu.php"
    } );
} );



function HapusTamu(id_tamu){
$.ajax({
method   :"post",
url      :"HapusTamu.php",
data     :"id_pesan="+id_tamu,
success  :function(data){
 var r  = JSON.parse(data);
 if(r['status'] =='success'){
   toastr.success(r.message, 'Success Message')
 }else{
   toastr.error(r.message, 'Erorr Message')

 }
 
}
});
$('#example').DataTable().ajax.reload();
}

</script>


</body>