<?php
    if(isset($_COOKIE["BLOK"])){$rol= true;} else { header('Location: login.php');exit;}
    include 'templates/header.php';
    include 'templates/navegacionA.php';
?>
            <?php
            $conexión = oci_connect("Admin", "admin123", "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = portafolio.cmva6l5m8wzt.sa-east-1.rds.amazonaws.com)(PORT = 1521)) (CONNECT_DATA = (SERVICE_NAME = PORTA) (SID = PORTA)))","AL32UTF8");
            if (!$conexión) {
                echo "fallo la conexion";
                $e = oci_error();
                trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
            }

            
            
            ?>
            <?php
                //Select de tareas
                $queryT = oci_parse($conexión, 'SELECT * FROM TAREA_SUBORDINADA');
                oci_execute($queryT);
            ?>
            <?php
            //Editar
            if ((isset($_POST['tareas']))&&(isset($_POST['descripS'])&&($_POST['combo3']!="")))
            {           
                $id_tarea=$_POST['combo3'];
                $nombre_Tarea=$_POST['tareas'];
                $descripcion=$_POST['descripS'];
                $stid = oci_parse($conexión, 'begin actualizarTareaS(:id_tareas, :tareas, :descripS); end;');
                oci_bind_by_name($stid, ':id_tareas', $id_tarea);
                oci_bind_by_name($stid, ':tareas', $nombre_Tarea);
                oci_bind_by_name($stid, ':descripS', $descripcion);


                oci_execute($stid);

                oci_free_statement($stid);
                oci_close($conexión);
                
                echo '<span id="cont-error4" >
                      <p class="alert alert-success" role="alert">La tarea subordinada se ha modificado correctamente</p></span>';
            }
            ?>
            <main class="pt-4">
                
                <div class="container">
                    <h2 class="text-center mb-4">Editar Tareas Subordinada</h3>
                    <div class="row">
                        <div class="col">
                            <form class="needs-validation" novalidate method="POST" action="editarTareaS.php"> 
                                <div class="form-group">
                                    <label for="Nombre">Tarea:</label>
                                    <select id="combo" name="combo3" onclick="document.getElementById('cont-error4').innerHTML='';">
                                    <option>
                                        <?php 
                                            while(($datos = oci_fetch_array($queryT, OCI_BOTH)) !=false)
                                            {
                                           
                                           echo  '<option value="'.$datos['IDTAREASUBORDINADA'].'" des1= "'.$datos['DESCRIPCION'].'"n1 ="'.$datos['NOMBRETS'].'">'.$datos['NOMBRETS'].'</option>';
                                  
                                            }
                                        ?>
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Nombre">Nombre:</label>
                                    <input  type="text" class="form-control" id="namae1" placeholder="Nombre" name="tareas" required>
                                    <br>
                                    <label for="Descripcion">Descripcion:</label>
                                    <input  type="text" class="form-control" id="Descripcion1" placeholder="Descripcion" name="descripS" required>
                                    <div class="invalid-feedback">
                                            Este campo es obligatorio
                                    </div>
                                    <div class="valid-feedback">
                                        Correcto
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-outline-success">Editar</button>

                                
                            </form>
                        </div>
                    </div>
                    <script>
                        var combo;
                        window.onload=function(){
                        combo = document.getElementById("combo");
                        combo.addEventListener("change", function(){
                        var opt = combo.options[combo.selectedIndex];
                        document.getElementById("namae1").value= opt.getAttribute("n1");
                        document.getElementById("Descripcion1").value= opt.getAttribute("des1");
                            });
                        };
                    </script>   
                </div>
            </main>
