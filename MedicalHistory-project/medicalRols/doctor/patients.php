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
      
                  <a href="patients.php" class="nav-link align-middle px-0">
                    <i class= "fa-solid fa-address-book me-2"></i>Mis pacientes
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
                <h3 class="navbarText">Mis pacientes</h3>
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
            
            <div class="mt-3 ms-3 containerListPatients">
              <card class="listPatients">

                <div class="d-flex align-items-center highlight-toolbar bg-light ps-3 pe-2 py-1" style="background: none !important;">
                  <h1>??Que quieres hacer hoy?</h1>
                  <div class="d-flex ms-auto">
                    <button type="button" class="btn text-nowrap">
                      A??adir paciente
                      <i class="fa-solid fa-circle-plus"></i>
                    </button>
                  </div>
                </div>

                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Nombre del paciente
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <div class="row justify-content-center">
                          <div class="col-6">
                            <h1>Diagnostico</h1>
                          </div>

                          <div class="col-5">
                            <h1>Recetas</h1>

                            <ul>
                              <li>Nombre del usuario       Descargar</li>
                              <li>Nombre del usuario       Descargar</li>
                              <li>Nombre del usuario       Descargar</li>
                            </ul>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Nombre del paciente
                      </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <div class="row justify-content-center">
                          <div class="col-6">
                            <h1>Diagnostico</h1>
                          </div>

                          <div class="col-5">
                            <h1>Recetas</h1>

                            <ul>
                              <li>Nombre del usuario       Descargar</li>
                              <li>Nombre del usuario       Descargar</li>
                              <li>Nombre del usuario       Descargar</li>
                            </ul>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Nombre del paciente
                      </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                       <div class="row justify-content-center">
                          <div class="col-6">
                            <h1>Diagnostico</h1>
                          </div>

                          <div class="col-5">
                            <h1>Recetas</h1>

                            <ul>
                              <li>Nombre del usuario       Descargar</li>
                              <li>Nombre del usuario       Descargar</li>
                              <li>Nombre del usuario       Descargar</li>
                            </ul>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </div>
                  
                </div>
              </card>
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
                          <span aria-hidden="true">??</span>
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

