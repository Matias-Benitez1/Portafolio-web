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
                <div class="collapse navbar-collapse w-100" id="nav_principal">
                    <ul class="nav nav-justified w-100 flex-column flex-sm-row">
                        <li class="nav-item">
                              <a href="verproblema.php" class="nav-link">Ver problema</a>
                        </li>
                        <li class="nav-item">
                              <a href="Eliminarproblema.php" class="nav-link">Eliminar Problema</a>
                        </li> 
                        <li class="nav-item">
                              <a href="calcularavance.php" class="nav-link">Calcular Avance</a>
                        </li>
                        <li class="nav-item">
                              <a href="finalizartare.php" class="nav-link">Finalizar Tarea</a>
                        </li> 
                        <li class="nav-item">
                                    <a href="asignartareaSubor.php" class="nav-link">Finalizar tarea sub</a>
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