<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/png" sizes="32x32" href="resources/images/1.png">
        <link rel="stylesheet" href="resources/css/login.css">
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
                            <a href="index.php"><img src="resources/images/2.png" width="300px"></a>
                        </div>

                        <div class="mb-4">
                            <h3 class="formTitle">
                                Elije el tipo de cuenta a la que quieres ingresar 
                            </h3>
                        </div>

                        <div class="loginButtons" style="display:flex;">
                            <div class="mb-3">
                                <a href="medicalRols/admin/index.php"><button type="submit" class="ingresarButton">Login de admin</button></a>
                            </div>
                            
                            <div class="mb-3">
                                <a href="medicalRols/doctor/index.php"><button type="submit" class="ingresarButton">Login de doctor</button></a>
                            </div>
                
                            <div class="mb-3">
                                <a href="medicalRols/user/index.php"><button type="submit" class="ingresarButton">Login de paciente</button></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>