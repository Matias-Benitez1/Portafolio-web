<?php
      session_start();
 ?>
<div class="navegacion mt-3 py-1">
      <nav class="nav-principal navbar navbar-expand-md navbar-light bg-faded">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_principal" aria-label="Mostrar Navegacion">
              <span class="navbar-toggler-icon"></span>
          </button>
          <a href="#" class="navbar-brand d-lg-none">Process.sa</a>
          <div class="container">
                <div class="collapse navbar-collapse w-100 " id="nav_principal">
                    <ul class="nav nav-justified w-100 flex-column flex-sm-row">
                         
                              <li class="nav-item">
                                    <a href="crearTarea.php" class="nav-link">Crear Tareas</a>
                              </li>
                              <li class="nav-item">
                                    <a href="eliminarTarea.php" class="nav-link">Eliminar Tareas</a>
                              </li>
                              <li class="nav-item">
                                    <a href="editarTarea.php" class="nav-link">Editar Tareas</a>
                              </li>
                              <li class="nav-item">
                                    <a href="tareasubordinada.php" class="nav-link">Crear Tareas Sub</a>
                              </li>
                              <li class="nav-item">
                                    <a href="editarTareaS.php" class="nav-link">Editar Tareas Sub</a>
                              </li>
                              <li class="nav-item">
                                    <a href="eliminarTareaS.php" class="nav-link">Eliminar Tareas Sub</a>
                              </li>
                              <li class="nav-item">
                                    <a href="asignartarea.php" class="nav-link">Asignar tarea</a>
                              </li>
                              <li class="nav-item">
                                    <a href="asignarflujodetarea.php" class="nav-link">Asignar flujo de tarea</a>
                              </li> 
                              <?php
                               if(($_SESSION["name"] !=' ')) {
                              ?>
                               <li class="nav-item">
                              <a href="login.php?cerrar=" class="nav-link"><?php echo $_SESSION['name']?></a>
                              </li>
                              <?php 
                               }
                              ?>
                              
                        
                    </ul>
                </div> <!--.collapse-->
          </div><!--.container-->
      </nav>
      <script src="js/jquery.slim.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    </div>