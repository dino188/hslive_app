<?php 
session_start();

if($_SESSION['logiran'] == 0){
    header('location: ../index.php');
}
$username = $_SESSION['korisnicko_ime'];
$ret=mysqli_query($con,"SELECT korisnici.id, korisnici_prava.* FROM korisnici
LEFT JOIN korisnici_prava ON korisnici.id = korisnici_prava.id_korisnik WHERE username ='$username'");
$num=mysqli_fetch_array($ret); 

$pravo_izvjestaji_pregled = $num['modul_izvjestaji_pregled'];
$pravo_izvjestaji_proizvod = $num['modul_izvjestaji_proizvodi'];
$pravo_izvjestaji_narudzbe = $num['modul_izvjestaji_narudzbe'];
?>