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
                    <h2 class="text-center mb-4">Asignar flujo de tarea</h3>
                    
                    <div class="form-group">
                        <form class="needs-validation" novalidate method="POST" action="asignarflujodetarea.php"> 
                                    <label for="Nombre">Flujo de tarea:</label>
                                    <select id="combo" name="combobox1" onclick="document.getElementById('cont-error6').innerHTML='';">
                                    <option>
                                        <?php 
                                            while(($datos = oci_fetch_array($queryT3, OCI_BOTH)) !=false)
                                            {
                                           
                                           echo  '<option value="'.$datos['ID_FLUJO'].'" des1= "'.$datos['DESCRIPCION'].'"n ="'.$datos['NOMBRE_FLUJO'].'">'.$datos['NOMBRE_FLUJO'].'</option>';
                                  
                                            }
                                        ?>
                                        </option>
                                    </select>           
                                </div>
                                <div class="form-group">
                                    <label for="Nombre">Usuario:</label>
                                    <select id="combo" name="combobox2" >
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
                                    <input type="datetime" name="FechaInicio1" value="<?= $fecha_actual?>" placeholder="Fecha Inicio"  required/>
                                    <div class="invalid-feedback">
                                        Este campo es obligatorio
                                    </div>
                                    <div class="valid-feedback">
                                        Correcto
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Fecha Termino">Fecha Termino:</label>
                                    <input type="datetime" name="FechaTermino1" value="<?= $fecha_actual?>" placeholder="Fecha Termino" required />
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