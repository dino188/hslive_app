<?php 
include("../config/config.php");
include("../prava.php");
$page_name = "IZVJESTAJI";
include("../template/header.php");

if ($pravo_izvjestaji_pregled != 1){ ?>

<div class="container ">
    <div class="row ">
    <div class="warningReport">
    Nemate prava za pregled modula!
    </div>    
    
    </div>
</div>

<?php }else{ ?>

<?php } 


include("../template/footer.php")
?>
