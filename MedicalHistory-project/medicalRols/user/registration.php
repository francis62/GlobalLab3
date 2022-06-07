<?php
    include_once('config.php');
    
    if(isset($_POST['submit'])){
        $fname=$_POST['full_name'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $query=mysqli_query($con,"insert into users(fullname,address,city,gender,email,password) values('$fname','$address','$city','$gender','$email','$password')");
        
        if($query){
            echo "<script>alert('Successfully Registered. You can login now');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/png" sizes="32x32" href="../../resources/images/1.png">
        <link rel="stylesheet" href="../../resources/css/registration.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <script type="text/javascript">
            function valid(){
            
                if(document.registration.password.value!= document.registration.password_again.value){
                    alert("Password and Confirm Password Field do not match  !!");
                    document.registration.password_again.focus();
                    return false;
                }
                return true;
            }
        </script>
		
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
                            <a href="index.php"><img src="../../resources/images/2.png" width="300px"></a>
                        </div>

                        <div class="mb-4">
                            <h3 class="formTitle">
                                Crea tu cuenta
                            </h3>
                        </div>

                        <form name="registration" id="registration"  method="post" onSubmit="return valid();">
                            <div class="form-input">
                                <span><i class="fa fa-user"></i></span>
                                <input name="full_name" type="text" placeholder="Nombre y Apellido" required>
                            </div>

                            <div class="form-input">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <input type="text" name="address" placeholder="Direccion" required>
                            </div>

                            <div class="form-input">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <input type="text" name="city" placeholder="Ciudad" required>
                            </div>

                            <label class="block">
                                Genero
                            </label>

                            <div class="form-check">
                                <input class="form-check-input" name="gender" type="radio" value="female" id="rg-female">
                                <label class="form-check-label" for="rg-female">
                                    Mujer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="gender" type="radio" value="male" id="rg-male">
                                <label class="form-check-label" for="rg-male">
                                    Hombre
                                </label>
                            </div>

                            <div class="form-input">
                                <span><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()"  placeholder="Email" required>
                            </div>

                            <div class="form-input">
                                <span><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                            </div>

                            <div class="form-input">
                                <span><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control"  id="password_again" name="password_again" placeholder="Confirmar contraseña" required>
                            </div>

                            <div class="mb-3">
                                <button type="submit" id="submit" name="submit" class="ingresarButton">Registrarse</button>
                            </div>

                            <div style="color: #000">Ya tienes una cuenta?
                                <a href="login.php" class="loginLink">Ingresa aca</a>
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
		</script>
		
        <script>
            function userAvailability() {
                $("#loaderIcon").show();
                jQuery.ajax({
                    url: "check_availability.php",
                    data:'email='+$("#email").val(),
                    type: "POST",
                    success:function(data){
                        $("#user-availability-status1").html(data);
                        $("#loaderIcon").hide();
                    },
                    error:function (){}
                });
            }
        </script>-->	
    </body>
</html>