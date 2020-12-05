<?php
    if(isset($_COOKIE["BLOK"])){$rol= true;} else { header('Location: login.php');exit;}
    include 'templates/header.php';
    include 'templates/navegacionC.php';
    include 'templates/funciones.php';

    
?>

            <main class="pt-4">
                <div class="container">
                    <h2 class="text-center mb-4">Finalizar tarea sub</h3>
                    
                    <div class="form-group">
                        <form class="needs-validation" novalidate method="POST" action="asignartareaSubor.php"> 
                                    <label for="Nombre">Tarea Subordinada:</label>
                                    <select id="combo" name="combo10" onclick="document.getElementById('cont-error8').innerHTML='';">
                                    <option>
                                        <?php 
                                            while(($datos = oci_fetch_array($queryT1, OCI_BOTH)) !=false)
                                            {
                                           
                                           echo  '<option value="'.$datos['IDTAREASUBORDINADA'].'"n ="'.$datos['NOMBRETS'].'">'.$datos['NOMBRETS'].'</option>';
                                  
                                            }
                                        ?>
                                        </option>
                                    </select>           
                                </div>
                                <div class="form-group">
                                    <label for="terminado">Terminado:</label>
                                    <input type="checkbox" name="checkbox1"/>
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