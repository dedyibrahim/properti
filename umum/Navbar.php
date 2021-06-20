<nav class="navbar navbar-expand-lg navbar-light bg-info p-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Pesona Properti</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="DataProperti.php">Data Properti</a>
        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="DataPemesan.php">Data Pemesan</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="DataTamu.php">Buku Tamu</a>
        </li>

      </ul>
      <div class="d-flex mb-0">
   <button onclick="Keluar()" class="btn btn-light" type="submit">Keluar</button>
      </div>
    </div>
  </div>
</nav>

<script type="text/javascript">
function Keluar(){
window.location.href ="Keluar.php";
}
</script>