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
<div class="card-header bg-info"><p class="h3 text-white">Data Pemesan</p></div>
<div class="card-body">
<div class="row">
<div class="col">

<table id="example" class="table table-bodered table-striped table-hover" style="width:100%">
        <thead>
            <tr>
                <th>Nama Pemesan</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Alamat Lengkap</th>
                <th>Nama Properti</th>
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
        "ajax": "DataTablePemesan.php"
    } );
} );

function HapusPemesan(id_pemesan){
$.ajax({
method   :"post",
url      :"HapusPemesan.php",
data     :"id_pemesan="+id_pemesan,
success  :function(data){
 var r  = JSON.parse(data);
 if(r['status'] =='success'){
   toastr.success(r.message, 'Success Message')
 
$('#example').DataTable().ajax.reload();
  }else{
   toastr.error(r.message, 'Erorr Message')

 }
 
}
});
}
</script>


</body>