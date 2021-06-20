
<html>
<?php  include './umum/header.php' ?>
<body>
<?php  include './NavbarHome.php' ?>
<?php  include './SliderHome.php' ?>




<Section id="Tentang">
<br>
<div class="container-fluid  bg-white ">
 <div  class="container pt-5 pb-5">
     <div class="row">
         <div class="col">
      <p   data-aos="zoom-in" class="text-center text-info h3 "  >TENTANG PESONA PROPERTI</p> <br>
     <p  data-aos="fade-left" class="text-justify  text-muted fs-5">Pesona Properti merupakan perusahaan yang bergerak di bidang properti,Pesona Properti Memiliki cita-cita untuk membuat tempat hunian yang layak nyaman dan berkualitas. Menjadikan lingkungan, hijau, sehat, aman dan nyaman serta terwujudnya serta terwujudnya negara Indonesia yang maju.</p></div>
  <div class="col-md-5">
  <img width="512px"   height="auto" src="./assets/img/banner_login.png"/>
     </div>


      </div>

    </div>
</div>
<br>
</Section>



<section id="Properti">
<div class="container-fluid  bg-light ">
<br>

<div class="container mt-3 mb-3">
<div class="row">
 <?php 
 
 include './Koneksi.php';
 $sql = "SELECT * FROM tb_properti ";
 
 $query = $conn->query($sql);
 while ( $row = mysqli_fetch_assoc($query))
 {

echo ' <div class="col-3">
<div class="card shadow" >
<img src="./foto/'.$row['foto'].'" class="card-img-top" alt="'.$row['nama_properti'].'">
<div class="card-body">
    <h5 class="card-title text-info">'.$row['nama_properti'].'</h5>
    <p class="card-text text-danger">Rp.'.number_format($row['harga_properti']).'.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Jumlah Kamar : '.$row['jumlah_kamar'].'</li>
    <li class="list-group-item">Listik : '.$row['daya_listrik'].'</li>
    <li class="list-group-item">Air : '.$row['sumber_air'].'</li>
  </ul>
  <div class="card-body">
  <div class="d-grid gap-2">
   <button onclick=BookingUnit("'.$row['id_properti'].'") class="btn btn-info ">Booking Unit</button>
  </div>
   </div></div></div>';
    
 }
 ?>
</div>
</div>
<br>
</div>
</section>

<Section id="VisiMisi">

<div class="container-fluid  bg-white">
<br>
<br>
<br> <div  class="container  text-muted">
     <div class="row">
      <div class="col-md-6 mt-3">
          <div data-aos="flip-right" class="card shadow-sm  p-3">
                <p   data-aos="zoom-in" class="text-center text-info h1">VISI</p> <br>

              <p class="text-justify">Terwujudnya perumahan Properti yang, Sehat , Berwawasan Lingkungan, dan Menjadikan Masyarakat Indonesia yang Modern </p>
          </div>
      </div>
      <div class="col-md-6 mt-3">
          <div data-aos="flip-right" class="card shadow-sm  p-3">
   <p   data-aos="zoom-in" class="text-center text-info h1">MISI</p> <br>

              <p class="text-justify">
                  1. Meningkatkan Daya Beli Masyarakat akan pentingnya Tempat Tinggal.<br>
                  2. Meningkatkan Masyarakat berdasarkan wawasan lingkungan dengan semangat keunggulan secara efektif dan efisien.<br>
3. Meningkatkan kualitas Masyarakat yang memiliki sikap, pengetahuan, dan keterampilan yang seimbang dan kompetitif.<br>
4. Melaksanakan perumahanan berstandar Adiwiyata.
                  </p>  </div>
      </div>
   </div>

    </div>
    
<br>
<br>
<br></div>

</Section>

<Section id="Kontak">
<br>
<div class="container-fluid  bg-light" >
 <div  class="container pt-5 pb-3 text-muted">
     <div class="row">
      <div class="col  ">
                <p   data-aos="zoom-in" class="text-center text-info h1">KONTAK KAMI</p> <br>

             <div class="row">
                 <div class="col-md-6">
                            <p   data-aos="zoom-in" class="text-center text-info h4">Anda Bisa Menghubungi Kami di </p> <br>
                       <p class="h5 text-justify">JL.Cempedak No.1 Leuwinanggung Kec.Tapos Kota Depok Provinsi Jawa Barat <br><br> Telp: +62 812 8990 3664 <br><br> Fax: +62 812 8990 3664<br><br> Email: dedyibrahym23@gmail.com</p>

                 </div>
                 <div class="col-md-6">
                                 <p   data-aos="zoom-in" class="text-center text-info h4">Atau Mengisi Form di Bawah ini</p> <br>

                             <label class="text-muted">Nama Lengkap</label>
                             <input id="nama_pesan" placeholder="Masukan Nama Lengkap" type="text" class="form-control btn-outline-info">
                             <label class="text-muted ">Email</label>
                             <input id="email_pesan" placeholder="Masukan Email" type="text" class="form-control btn-outline-info">
                             <label class="text-muted">No Telepon</label>
                             <input id="no_hp_pesan" placeholder="Masukan No Telepon" type="text" class="form-control btn-outline-info">
                            <label class="text-muted">Deskripsi Pesan</label>
                            <textarea id="deskripsi"   placeholder="Deskripsi Pesan" class="form-control btn-outline-info" rows="5" ></textarea>
                           <hr>
                           <button onclick="SimpanTamu()" class="btn btn-outline-info float-right">KIRIM PESAN</button>
                 
                 </div>
             </div>
      </div>

   </div>

       </div>

         <div class="row">
             <div class="col">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.991561026506!2d106.8061893141966!3d-6.522747665580784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c3311745daa5%3A0xf25379ca039d2a7a!2sSMAN%202%20Cibinong!5e0!3m2!1sid!2sid!4v1581590703829!5m2!1sid!2sid" style="width: 100%; height: 300px;"  frameborder=""  allowfullscreen=""></iframe>
             </div>
         </div>

</div>
<br>
</Section>


<?php  include './FooterHome.php' ?>



<!-- Modal -->
<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="row">
              <div class="col">
              <img src="" id="fotodetail" class="card-img-top" >
              <p class=" mt-3 h1 text-danger" id="harga_properti"></p>
              <p class="text-muted mt-3" id="keterangan"></p>
              <table class="table mt-3 table-bordered table-hover table-striped">
              <tr>
                <td>Harga</td>
                <td id="harga_properti"></td>
              </tr>
              <tr>
                <td>Jumlah Kamar</td>
                <td id="jumlah_kamar"></td>
              </tr> 
              <tr>
                <td>Sumber Air</td>
                <td id="sumber_air"></td>
              </tr>
              <tr>
                <td>Daya Listrik</td>
                <td id="daya_listrik"></td>
              </tr>
              </table>
              </div>
              <div class="col-4">
              <p  class="text-muted fs-2">FORM BOOKING UNIT</p>
              <hr>
              <label>Nama Pemesan</label>
              <input type="hidden" id="id_properti" class="form-control" placeholder="Nama Pemesan">
              <input type="text" id="nama_pemesan" class="form-control" placeholder="Nama Pemesan">
              <label>No HP /Telp</label>
              <input type="text" id="no_hp" class="form-control" placeholder="No HP">
              <label>Email</label>
              <input type="text" id="email" class="form-control" placeholder="Email">
              <label>Alamat Lengkap</label>
              <textarea rows="3" id="alamat_lengkap" class="form-control" placeholder="Alamat Lengkap"></textarea>
              <hr>
               <div class="d-grid gap-2">
                <button onclick=SimpanPemesan() class="btn btn-info ">Booking Unit</button>
                </div>
              </div>
       </div>
      </div>
      
    </div>
  </div>
</div>

</body>
</html>

<script type="text/javascript">

function BookingUnit(id_properti){
    $('#staticBackdrop').modal('show');


    $.ajax({
     method :"post",    
     url : "DetailUnit.php",
     data:"id_properti="+id_properti,
     success:function(data){
        var r = JSON.parse(data);
         
        $(".modal-title").html(r.nama_properti)
        $("#fotodetail").attr("src","./foto/"+r.foto);
        $("#harga_properti").html(r.harga_properti);
        $("#jumlah_kamar").html(r.jumlah_kamar);
        $("#keterangan").html(r.keterangan);
        $("#sumber_air").html(r.sumber_air);
        $("#daya_listrik").html(r.daya_listrik);
        $("#id_properti").val(r.id_properti);
        var harga_properti = addCommas(r.harga_properti);
        $("#harga_properti").html("RP. "+harga_properti);
       
     }
    
    });
}

function addCommas(nStr)
{
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}

function SimpanPemesan(){
var id_properti     = $("#id_properti").val();
var nama_pemesan    = $("#nama_pemesan").val();
var no_hp           = $("#no_hp").val();
var email           = $("#email").val();
var alamat_lengkap  = $("#alamat_lengkap").val();

$.ajax({
    method:"post",
    url:"SimpanDataPemesan.php",
    data:"id_properti="+id_properti+"&nama_pemesan="+nama_pemesan+"&no_hp="+no_hp+"&email="+email+"&alamat_lengkap="+alamat_lengkap,
    success:function(data){
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


function SimpanTamu(){
var nama_pesan    =$("#nama_pesan").val();
var no_hp_pesan   =$("#no_hp_pesan").val();
var deskripsi     =$("#deskripsi").val();
var email_hp      =$("#email_pesan").val();

$.ajax({
  method:"post",
  url:"SimpanTamu.php",
  data:"nama_pesan="+nama_pesan+"&no_hp="+no_hp_pesan+"&deskripsi="+deskripsi+"&email_hp="+email_hp,
  success:function(data){
    var r  = JSON.parse(data);
 if(r['status'] =='success'){
   toastr.success(r.message, 'Success Message')
   $('.form-control').val('')
 }else{
   toastr.error(r.message, 'Erorr Message')

 }
  }
});

}

</script>
