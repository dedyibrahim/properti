<?php
session_start(); 
if(!empty($_SESSION['email'])){
   header('Location: Dashboard.php');
}
?>
<html>
<?php  include './umum/header.php' ?>
<body>
<main >

<div class="container-fluid  vh-100">
   <div class="row justify-content-center vh-100">
           <div class="col hidden-md-down bg-light border-end border-2 border-info shadow p-3  rounded">
              <div class="row p-3">
                  <div class="col ">
                     <p class="text-center mt-3"><img width="250px"   height="auto" src="./assets/img/banner_login.png"/>
                     </p>
                    <p class="h4 text-info mt-5">Login</p>
                    <p class="text-dark">Membuat dan mengelola data properti anda secara mudah</p>

                     <div class="row  mt-3">
                          <div class="col">
                               <label>Masukan Email</label>
                                 <input id="email"  name="email" type="text" class="form-control  " placeholder="email">
                          
                                 <label>Masukan Password</label>
                                 <input id="password"  name="password" type="password" class="form-control " placeholder="password">
                                 <hr> 
                                 <div class="d-grid gap-2">
                                 <button onclick="Login()" type="submit" class="btn btn-info btn-block ">Proses Login</button>
                                 </div>
                          </form>

                                          
                                          
                             </div>
                     </div>
                 </div>
              </div>

           </div>
           <div class="col-sm-9  d-none d-sm-block d-md-none p-5  d-md-block d-lg-block d-lg-none d-xl-block text-center">
             <img class="mt-5"  style="vertical-align: bottom;" width="600px"     height="auto" src="./assets/img/banner_login.png"/>
             <p class="text-center h1 text-muted">Selamat Datang di Properti G G P</p>
             <p class="text-center h3 text-muted">
             JL.Cempedak No.1 Leuwinanggung Kec.Tapos Kota Depok Provinsi Jawa Barat
             </p>
           </div>

 </div>
</div>
</main>
</body>
</html>
<script type="text/javascript">
function Login(){
var email      = $("#email").val();
var password   = $("#password").val();
$.ajax({
method   :"post",
url      :"ProsesLogin.php",
data     :"email="+email+"&password="+password,
success  :function(data){
 var r  = JSON.parse(data);
 if(r['status'] =='success'){
   toastr.success(r.message, 'Success Message')
   window.location.replace("Dashboard.php");
 }else{
   toastr.error(r.message, 'Erorr Message')

 }
 
}
});

}

</script>
