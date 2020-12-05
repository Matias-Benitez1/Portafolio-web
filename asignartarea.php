<?php
    if(isset($_COOKIE["BLOK"])){$rol= true;} else { header('Location: login.php');exit;}
    include 'templates/header.php';
    include 'templates/navegacionA.php';
    include 'templates/funciones.php';

    date_default_timezone_set('America/Santiago');
    $fecha_actual=date("d-m-Y H:i:s");   
?>

            <main class="pt-4">
                <div class="container">
                    <h2 class="text-center mb-4">Asignar tarea</h3>
                    
                    <div class="form-group">
                        <form class="needs-validation" novalidate method="POST" action="asignartarea.php"> 
                                    <label for="Nombre">Tarea:</label>
                                    <select id="combo" name="combo5" onclick="document.getElementById('cont-error10').innerHTML='';">
                                    <option>
                                        <?php 
                                            while(($datos = oci_fetch_array($queryT, OCI_BOTH)) !=false)
                                            {
                                           
                                           echo  '<option value="'.$datos['ID_TAREAS'].'" des1= "'.$datos['DESCRIPCION'].'"n ="'.$datos['NOMBREUSUARIO'].'">'.$datos['NOMBREUSUARIO'].'</option>';
                                  
                                            }
                                        ?>
                                        </option>
                                    </select>           
                                </div>
                                <div class="form-group">
                                    <label for="Nombre">Usuario:</label>
                                    <select id="combo" name="combo6">
                                    <option>
                                        <?php 
                                            while(($datos = oci_fetch_array($queryT2, OCI_BOTH)) !=false)
                                            {
                                           
                                           echo  '<option value="'.$datos['ID_USUARIO'].'"n ="'.$datos['NOMBRE'].'">'.$datos['NOMBRE'].'</option>';
                                  
                                            }
                                        ?>
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="Fecha Inicio">Fecha Inicio:</label>
                                    <input type="datetime" name="FechaInicio" value="<?= $fecha_actual?>" placeholder="Fecha Inicio"  />
                                    <div class="invalid-feedback">
                                        Este campo es obligatorio
                                    </div>
                                    <div class="valid-feedback">
                                        Correcto
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Fecha Termino">Fecha Termino:</label>
                                    <input type="datetime" name="FechaTermino" value="<?= $fecha_actual?>" placeholder="Fecha Termino"  />
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




            



