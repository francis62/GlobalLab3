<?php
    session_start();
    error_reporting(0);
    include('config.php');

    if(isset($_POST['submit']))
    {	
        $docid=$_SESSION['id'];
        $patname=$_POST['patname'];
        $patcontact=$_POST['patcontact'];
        $patemail=$_POST['patemail'];
        $gender=$_POST['gender'];
        $pataddress=$_POST['pataddress'];
        $patage=$_POST['patage'];
        $medhis=$_POST['medhis'];
        $sql=mysqli_query($con,"insert into tblpatient(Docid,PatientName,PatientContno,PatientEmail,PatientGender,PatientAdd,PatientAge,PatientMedhis) values('$docid','$patname','$patcontact','$patemail','$gender','$pataddress','$patage','$medhis')");
        
        if($sql){
            echo "<script>alert('Patient info added Successfully');</script>";
            header('location:addPatient.php');
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/png" sizes="32x32" href="../../resources/images/1.png">
        <link rel="stylesheet" href="../../resources/css/docIndex.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <script src="https://kit.fontawesome.com/36defbaad1.js" crossorigin="anonymous"></script>
        <title>Medical History</title>
    </head>
    <body>
      <div class="container-fluid">
        <div class="row flex-nowrap">
          <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-white">
            <div class="d-flex flex-column px-3 pt-2 text-white min-vh-100">
              <a href="principalPanel.php" class="d-flex align-items-center justify-content-center pb-3 mb-md-0 me-m  text-decoration-none">
                <img class="img-fluid logo" src="../../resources/images/3.png" alt="">
              </a>
              <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <li class="nav-item">
                  <a href="principalPanel.php" class="nav-link align-middle px-0">
                    <i class="fa-solid fa-house-user me-2"></i>Panel principal
                  </a>

                  <a href="addPatient.php" class="nav-link align-middle px-0">
                    <i class= "fa-solid fa-address-book me-2"></i>Añadir paciente
                  </a>

                  <a href="listPatients.php" class="nav-link align-middle px-0">
                    <i class= "fa-solid fa-address-book me-2"></i>Lista de pacientes
                  </a>

                  <a href="patientSearch.php" class="nav-link align-middle px-0">
                    <i class= "fa-solid fa-address-book me-2"></i>Buscador
                  </a>
      
                  <a href="calendar.php" class="nav-link align-middle disabled px-0">
                    <i class="fa-solid fa-calendar-days me-2"></i>Turnos
                  </a>
      
                  <a href="configuration.html" class="nav-link align-middle disabled px-0">
                    <i class="fa-solid fa-gear me-2"></i>Configuracion
                  </a>
                </li>
                
                <li class="mt-4 mb-1">
                  <a href="index.html">
                    <button type="button" class="btn btn-primary btn-sm ps-3 pe-3 me-sm-2 buttonsNav">
                      <a href="logout.php" class="logoutButton" style="text-decoration: none;">
                        Cerrar sesion
                      </a>
                    </button>     
                  </a>
                </li>
              </ul>
              
              <div class="align-items-center pb-4">
                <div class="d-flex align-items-center justify-content-center flex-column bd-highlight bottom-0 start-0" style="margin-top: 100%;">
                  <div class="p-2 bd-highlight align-items-center" style="padding:0 !important;">
                    <div class="card align-items-center pt-4 pb-3" style="border: none; background-color: #c8d2e6;width: 13rem !important; border-radius: 30px;">
                    <img src="../../resources/images/sideBarImage.png" class="card-img-top img-fluid" style="max-width: 7rem;" alt="...">
                    <div class="card-body text-center text-black">
                      <h5 class="card-title">Medical History</h5>
                      <p class="card-text">medicalihistory@info.com</p>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col py-3" style="background-color:#c8d2e6">
            <header class="navbar justify-content-start sticky-top flex-md-nowrap p-0">
              <div>
                <h3 class="navbarText">Añadir paciente</h3>
              </div>
          
              <div class="topnav">
                <input type="text" class="searchBar" placeholder="Buscar">
          
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
              
              <div class="dropdown d-flex flex-row-reverse">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../../resources/images/profile.jpg" alt="" width="32" height="32" class="rounded-circle me-2 ms-2 border border-white border-3">
                <strong>Natalia Moyano</strong>
                </a>
                <ul class="dropdown-menu  dropdown-menu-end" aria-labelledby="dropdownMenuButton1"> 
                <li><a class="dropdown-item" href="#">Editar perfil</a></li>
                </ul>
          
                <a class="d-flex align-items-center text-decoration-none notificationsIcon">
                <i class="fa-solid fa-bell me-2 ms-2"></i>
                <i class="fa-solid fa-user me-2 ms-2"></i>
                </a>
              </div>
            </header>				
            
            <div class="containerListPatients">                  
                <form role="form" name="" method="post">

                    <div class="form-floating">
                        <input type="text" name="patname" class="form-control"  placeholder="Enter Patient Name" required="true">
                        <label for="floatingTextarea">Nombre del paciente</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" name="patcontact" class="form-control"  placeholder="Enter Patient Contact no" required="true" maxlength="10" pattern="[0-9]+">
                        <label for="floatingTextarea">Numero de contacto del paciente</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" id="patemail" name="patemail" class="form-control"  placeholder="Enter Patient Email id" required="true" onBlur="userAvailability()">
                        <label for="floatingTextarea">Email del paciente</label>
                    </div>

                    <div class="form-floating">
                        <h3>Gender</h3>

                        <div class="form-check">
                            <input class="form-check-input" id="rg-female" type="radio" name="gender">
                            <label class="form-check-label" for="rg-female">
                                Female
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" id="rg-male" type="radio" name="gender">
                            <label class="form-check-label" for="rg-male">
                                Male
                            </label>
                        </div>
                    </div>

                    <div class="form-floating">
                        <textarea name="pataddress" class="form-control"  placeholder="Enter Patient Address" required="true"></textarea>
                        <label for="address">Direccion del paciente</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" name="patage" class="form-control"  placeholder="Enter Patient Age" required="true">
                        <label for="address">Edad del paciente</label>
                    </div>

                    <div class="form-floating">
                        <textarea type="text" name="medhis" class="form-control"  placeholder="Enter Patient Medical History(if any)" required="true"></textarea>
                        <label for="address">Historia Clinica</label>
                    </div>	

                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Añadir</button>
                </form>
            </div>

          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
    <!--
      ESTO ES PARA VER  COMO SE HACE UNA VENTANA POPUP PARA QUE INGRESEN LOS DATOS DEL PACIENTE

      <a href="javascript:void(0);" data-toggle="modal" data-target="#hireModal">Connect with Support Team</a>  
    

      <div class="modal fade in" id="hireModal" tabindex="-1" role="dialog" style="display: block;" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header 
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                          <span aria-hidden="true">×</span>
                          <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">
                        Connect with our Support Team
                    </h4>
                </div>
                
                <!-- Modal Body 
                <div class="modal-body hireUsModal">
            <p style="font-size: 15px;font-family: cursive;">Do you want support for the script installation or customization? Submit your request for customization of our scripts, support for the existing web application, and new development service.</p>
                  <p class="hireStatusMsg"></p>
                    <form class="form-horizontal" role="form">
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="hireName">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="hireName" placeholder="Your Name" required="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="hireEmail">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="hireEmail" placeholder="Your Email" required="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="hireMessage">Requirements</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="hireMessage" placeholder="Your Requirements" rows="8"></textarea>
                        </div>
                      </div>
                                      </form>
            <p style="font-size: 14px;font-style: italic;margin-bottom: 0;">You can connect with the support team directly via email at <b>support@codexworld.com</b> for any inquiry/help.</p>
                </div>
                
                <!-- Modal Footer 
                <div class="modal-footer" style="margin-top: 0;">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="submitHireRequest();" id="submitHireRequestBtn">Submit</button>
                </div>
            </div>
        </div>
      </div>
    -->
</html>

