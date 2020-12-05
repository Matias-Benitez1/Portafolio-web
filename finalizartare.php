<?php
    if(isset($_COOKIE["BLOK"])){$rol= true;} else { header('Location: login.php');exit;}
    include 'templates/header.php';
    include 'templates/navegacionC.php';
    include 'templates/funciones.php';

    
?>

            <main class="pt-4">
                <div class="container">
                    <h2 class="text-center mb-4">Finalizar tarea</h3>
                    
                    <div class="form-group">
                        <form class="needs-validation" novalidate method="POST" action="finalizartare.php"> 
                                    <label for="Nombre">Tarea:</label>
                                    <select id="combo" name="combo9" onclick="document.getElementById('cont-error8').innerHTML='';">
                                    <option>
                                        <?php 
                                            while(($datos = oci_fetch_array($queryT, OCI_BOTH)) !=false)
                                            {
                                           
                                           echo  '<option value="'.$datos['ID_TAREAS'].'"n ="'.$datos['NOMBREUSUARIO'].'">'.$datos['NOMBREUSUARIO'].'</option>';
                                  
                                            }
                                        ?>
                                        </option>
                                    </select>           
                                </div>
                                <div class="form-group">
                                    <label for="terminado">Terminado:</label>
                                    <input type="checkbox" name="checkbox4"/>
                                    <div class="invalid-feedback">
                                        Este campo es obligatorio
                                    </div>
                                    <div class="valid-feedback">
                                        Correcto
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-primary">Agregar</button>  
                            </form>
                        </div>
                    </div>
                </div>
            </main>