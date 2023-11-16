<?php 
$errorUsernamemsg = "";
$errorPassmsg = "";
if((isset($_POST['login'])))
{
    $username=$_POST['Username'];
    $pass=$_POST['password'];

    $res= mysqli_query($con,"SELECT * FROM korisnici WHERE username='$username'");
    if(mysqli_num_rows($res)>0){
        $row=mysqli_fetch_assoc($res);
        $verify= password_verify($pass,$row['password']);
        if($verify==1){
            $ret=mysqli_query($con,"SELECT * FROM korisnici WHERE username='$username'");
            $num=mysqli_fetch_array($ret); 

            if($num>0)
            {   
                $_SESSION['logiran'] = 1;
                $_SESSION['id_korisnika'] = $num['id'];
                $_SESSION['korisnicko_ime'] = $num['username'];
                $_SESSION['ime_korisnika'] = $num['ime'];
                $_SESSION['prezime_korisnika'] = $num['prezime'];
                
                header("location: home.php");
                exit();
            }
        }else
        {
          $errorPassmsg = "Netočna lozinka";
          
        }
    }else{
      $errorUsernamemsg = "Nema korisnika s tim korisničkim imenom";
      
    }
}

?>

<div>
<div class="container">

      <div class="col-md-6 offset-md-3">
        <div class="card my-5">
          <div class="row">
          <form method="POST" class="card-body cardbody-color p-lg-5 needs-validation" novalidate>
            <div class="mb-3">
              <label for="Username">Korisničko ime</label>
              <input type="text" class="form-control" name="Username" id="Username" aria-describedby="emailHelp"
                placeholder="User Name" required>
                <?php if((isset($_POST['login']))){ ?>
                  <div class="font-danger"> <?php echo $errorUsernamemsg; ?></div>
                  <?php } ?>
              </div>
            <div>
                <label for="password">Lozinka</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="password">
                <?php if((isset($_POST['login']))){ ?>
                  <div class="font-danger"> <?php echo $errorPassmsg; ?></div>
                  <?php } ?>
            </div >
            <div>
              <button type="submit" class="btn btn-primary loginbtn" name="login">Ulaz u sustav <i class="fa-solid fa-arrow-right"></i></button>
            </div>
            
          </form>
          </div>

        </div>

      </div>

  </div>
</div>

