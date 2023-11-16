<?php 
    $routArray= array(
        '1' => ['images\logo.png', './logout.php'],
        '2' => ['../images/logo.png', '../logout.php']
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POCETNA STRANICA</title>
    <!--Font awesom-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Styles-->
    <link rel="stylesheet" href="template/stil.css">
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<?php 
 if(isset($_SESSION['logiran']))
 {    
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="row">
        <div class="col">
            <img class="logo" src="images\logo.png">
        </div>
        <div class="col">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="modul-izvjestaji/index.php">Izvjestaji</a>
                </li>
                <li class="nav-item">
                <a class="btn navBtn" href="./log-out.php">Odjavi me</a>
                </li>
                </ul>
        </div>

        
        <div class="subNav">Prikazuje se stranica : // <?php echo $page_name ?></div>
    </div>

  </div>

</nav>
<?php }
