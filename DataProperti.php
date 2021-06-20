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
<div class="card-header bg-info"><p class="h3 text-white">Input data properti</p></div>
<div class="card-body">
<div class="row">
             <div class="col-6">
                  <label>Nama properti</label>
                  <input id="nama_properti" value="" type="text" class="form-control" placeholder="Nama properti">
                  <label>No properti</label>
                  <input id="no_properti" value="" type="number" class="form-control" placeholder="No properti"> 
                  <label>Harga properti</label>
                  <input id="harga_properti" value="" type="number" class="form-control" placeholder="Harga properti">
                  <label>Jumlah Kamar</label>
                  <input id="jumlah_kamar" value="" type="number" class="form-control" placeholder="Jumlah Kamar">
  </div>
            
            <div class="col-6">
                  <label>Daya Listrik</label>
                  <input id="daya_listrik"  value="" type="text" class="form-control" placeholder="Daya Listrik">
                  <label>Sumber Air</label>
                  <select id="sumber_air" class="form-control">
                  <option value="SUMUR">Sumur</option>
                  <option value="PDAM">PDAM</option>
                  </select>
                  <label>Foto properti</label>
                  <input value="" id="Fotoproperti" type="file" class="form-control" placeholder="Foto properti"> 
                  <label>Keterangan </label>
                  <textarea id="keterangan" class="form-control" rows="3.5" placeholder="Keterangan"></textarea>

            </div>
   </di>
</div>
</div>
<div class="card-footer">
<button onclick="SimpanDataproperti()" class="btn btn-info float-end">Simpan Data Properti</button>
</div>
</div>
<div class="card mt-5">
<div class="card-header bg-info"><p class="h3 text-white">Data Properti</p></div>
<div class="card-body">
<div class="row">
<div class="col">

<table id="example" class="table table-bodered table-striped table-hover" style="width:100%">
        <thead>
            <tr>
                <th>Nama Properti</th>
                <th>No Properti</th>
                <th>Harga Properti</th>
                <th>Jumlah Properti</th>
                <th>Listrik </th>
                <th>Aksi </th>
            </tr>
        </thead>
       
    </table>

</div>
</div>
</div>
</div>

<script type="text/javascript">
function SimpanDataproperti(){
$('.btn').attr('disabled','disabled');
var file_data = $('#Fotoproperti').prop('files')[0];   
var form_data = new FormData();                  
form_data.append('foto', file_data);
form_data.append('nama_properti', $("#nama_properti").val());   
form_data.append('no_properti', $("#no_properti").val());
form_data.append('harga_properti', $("#harga_properti").val());
form_data.append('jumlah_kamar', $("#jumlah_kamar").val());
form_data.append('daya_listrik', $("#daya_listrik").val());
form_data.append('sumber_air', $("#sumber_air option:selected").val());
form_data.append('keterangan', $("#keterangan").val());

$.ajax({
        url: 'SimpanDataProperti.php', // <-- point to server-side PHP script 
        dataType: 'text',  // <-- what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(data){
            var r  = JSON.parse(data);
 if(r['status'] =='success'){
   toastr.success(r.message, 'Success Message')
   $('.form-control').val('')
 }else{
   toastr.error(r.message, 'Erorr Message')

 }
        }
     });
     $('.btn').removeAttr('disabled');
  
     $('#example').DataTable().ajax.reload();
}

$(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "DataTableproperti.php"
    } );
} );


function Hapusproperti(id_properti){
$.ajax({
method   :"post",
url      :"Hapusproperti.php",
data     :"id_properti="+id_properti,
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