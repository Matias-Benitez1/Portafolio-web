<?php
    if(isset($_COOKIE["BLOK"])){$rol= true;} else { header('Location: login.php');exit;}
    include 'templates/header.php';
    include 'templates/navegacionB.php';
    include 'templates/funciones.php';
?>

         
            <main class="pt-4">
                
                <div class="container">
                    <h2 class="text-center mb-4">Reportar Problema</h3>
                    <div class="row">
                        <div class="col">
                            <form class="needs-validation" novalidate method="POST" action="reportarproblema.php"> 
                                
                            <div class="form-group">
                                    <label for="Nombre">Tarea:</label>
                                    <select id="combo" name="combo7" onclick="document.getElementById('cont-error13').innerHTML='';">
                                    <option>
                                        <?php 
                                            while(($datos = oci_fetch_array($queryT, OCI_BOTH)) !=false)
                                            {
                                           
                                           echo  '<option value="'.$datos['ID_TAREAS'].'">'.$datos['NOMBREUSUARIO'].'</option>';
                                  
                                            }
                                        ?>
                                        </option>
                                    </select>

                                    
                                </div>

                                <div class="form-group">
                                    <label for="Descripcion">Descripcion:</label>
                                    <input type="text" class="form-control" id="Descripcion" placeholder="Descripcion" name="descrip" required>
                                    <div class="invalid-feedback">
                                            Este campo es obligatorio
                                    </div>
                                    <div class="valid-feedback">
                                        Correcto
                                    </div>
                                    <BR>
                                </div>

                                    </div>
                                        
                                    </div>
                                
                                <button type="submit" class="btn btn-outline-primary">Agregar</button>  
                            </form>
                        </div>
                    </div>
                </div>
            </main>