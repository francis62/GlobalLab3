<?php
    session_start();
    error_reporting(0);
    include("config.php");

    if(isset($_POST['submit'])){
        $ret=mysqli_query($con,"SELECT * FROM users WHERE email='".$_POST['username']."' and password='".md5($_POST['password'])."'");
        $num=mysqli_fetch_array($ret);

        if($num>0){
            $extra="patientPanel.php";
            $_SESSION['login']=$_POST['username'];
            $_SESSION['id']=$num['id'];
            $host=$_SERVER['HTTP_HOST'];
            $uip=$_SERVER['REMOTE_ADDR'];
            $status=1;
            
            $log=mysqli_query($con,"insert into userlog(uid,username,userip,status) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip','$status')");
            $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
            header("location:http://$host$uri/$extra");
            exit();
        }else{
            $_SESSION['login']=$_POST['username'];	
            $uip=$_SERVER['REMOTE_ADDR'];
            $status=0;
            mysqli_query($con,"insert into userlog(username,userip,status) values('".$_SESSION['login']."','$uip','$status')");
            $_SESSION['errmsg']="Invalid username or password";
            $extra="index.php";
            $host  = $_SERVER['HTTP_HOST'];
            $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
            header("location:http://$host$uri/$extra");
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/png" sizes="32x32" href="../../resources/images/1.png">
        <link rel="stylesheet" href="../../resources/css/login.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <script src="https://kit.fontawesome.com/36defbaad1.js" crossorigin="anonymous"></script>
        <title>Medical History</title>
    </head>
    <body>   
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-none d-md-block imageContainer"></div>
    
                <div class="col-lg-6 col-md-6 formContainer">
                    <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 formBox text-sm-center">
                        <div class="logo mb-5">
                            <a href="../../index.php"><img src="../../resources/images/2.png" width="300px"></a>
                        </div>

                        <div class="mb-4">
                            <h3 class="formTitle">
                                Ingresa a tu cuenta
                                <span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
                            </h3>
                        </div>

                        <form method="post">
                            <div class="form-input">
                                <span><i class="fa fa-envelope"></i></span>
                                <input name="username" type="text" placeholder="Email" required>
                            </div>
                            <div class="form-input">
                                <span><i class="fa fa-lock"></i></span>
                                <input name="password" type="password" placeholder="Contraseña" required>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6 d-flex">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          Recordarme
                                        </label>
                                    </div>

                                </div>
                                <div class="col-6 text-sm-end">
                                    <a href="#" class="forgetLink">Olvidé mi contraseña</a>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button name="submit" type="submit" class="ingresarButton">Ingresar</button>
                            </div>

                            <div style="color: #000">Todavía no tienes una cuenta?
                                <a href="registration.php" class="registerLink">Registrate aca</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="../../resources/js/main.js"></script>

		<script src="../../resources/js/login.js"></script>
		<!--<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>-->
    </body>
</html>