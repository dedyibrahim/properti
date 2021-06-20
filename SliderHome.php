
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  <?php 
 
  include './Koneksi.php';
  $sql = "SELECT * FROM tb_properti ";
  
  $query = $conn->query($sql);
  $i=0;
  while ( $row = mysqli_fetch_assoc($query))
  {
    $active = ($i++ == 0) ? 'active' : '';
       echo '<div class="carousel-item '.$active.' ">
       <img style="  opacity: 0.5;" src="./foto/'.$row['foto'].'" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
         <h1 class="text-dark ">'.$row['nama_properti'].'</h1>
         <br>
         <button onclick=BookingUnit("'.$row['id_properti'].'") class="btn btn-info">BOOKING UNIT SEKARANG</button>
         </div>
     </div>';
  } 
  ?>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>