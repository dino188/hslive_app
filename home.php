<?php 
session_start();
include ('config/config.php');

$page_name = "POČETNA STRANICA";
include('template/header.php');
?>

<div class="container">
<div class="card">
  <div class="card-header">
    HS Produkt
  </div>
  <div class="card-body">
    <h5 class="card-title">Dobrodošao, <?php echo $_SESSION['prezime_korisnika'];?> <?php echo $_SESSION['ime_korisnika'] ?></h5>
    <p class="card-text">Ovo je test portal za ispitivanje funkcionalnosti.</p>
  </div>
</div>

</div>

<?PHP include('template/footer.php'); ?>
