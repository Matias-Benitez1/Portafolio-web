<?php
    if(isset($_COOKIE["BLOK"])){$rol= true;} else { header('Location: login.php');exit;}
    include 'templates/header.php';
    include 'templates/navegacionA.php';
    include 'templates/funciones.php';
?>


         
            <main class="pt-4">
                
                <div class="container">
                    <h2 class="text-center mb-4">Crear tarea</h3>
                    <div class="row">
                        <div class="col">
                            <form class="needs-validation" novalidate method="POST" action="crearTarea.php"> 
                                <div class="form-group">
                                    <label for="Nombre">Nombre Tarea:</label>
                                    <input onclick="document.getElementById('cont-error1').innerHTML='';" type="text" class="form-control" id="Nombre_Tarea" placeholder="Nombre Tarea" name="nT" required>
                                    <div class="invalid-feedback">
                                            Este campo es obligatorio
                                    </div>
                                    <div class="valid-feedback">
                                        Correcto
                                    </div>
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
                                <div class="form-group">
                                    <label for="Nombre">Tarea subordinada:</label>
                                    <select id="combo" name="combo5" onclick="document.getElementById('cont-error11').innerHTML='';">
                                    <option>
                                        <?php 
                                            while(($datos = oci_fetch_array($queryT1, OCI_BOTH)) !=false)
                                            {
                                           
                                           echo  '<option value="'.$datos['IDTAREASUBORDINADA'].'" des1= "'.$datos['DESCRIPCION'].'"n ="'.$datos['NOMBRETS'].'">'.$datos['NOMBRETS'].'</option>';
                                  
                                            }
                                        ?>
                                        </option>
                                    </select>

                                    
                                </div>
                                    </div>
                                        
                                    </div>
                                
                                <button type="submit" class="btn btn-outline-primary">Agregar</button>  
                            </form>
                        </div>
                    </div>
                </div>
            </main>



