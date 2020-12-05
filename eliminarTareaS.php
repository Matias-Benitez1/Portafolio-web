<?php
    if(isset($_COOKIE["BLOK"])){$rol= true;} else { header('Location: login.php');exit;}
    include 'templates/header.php';
    include 'templates/navegacionA.php';
    include 'templates/funciones.php';
?>

            <main class="pt-4">
                
                <div class="container">
                    <h2 class="text-center mb-4">Eliminar Tareas Subordinadas</h3>
                    <div class="row">
                        <div class="col">
                            <form class="needs-validation" novalidate method="POST" action="eliminarTareaS.php"> 
                                <div class="form-group">
                                    <label for="Nombre">Tarea:</label>
                                    <select id="combo" name="combo1" onclick="document.getElementById('cont-error12').innerHTML='';">
                                    <option>
                                        <?php 
                                            while(($datos = oci_fetch_array($queryT1, OCI_BOTH)) !=false)
                                            {
                                           
                                           echo  '<option value="'.$datos['IDTAREASUBORDINADA'].'" des= "'.$datos['DESCRIPCION'].'"n ="'.$datos['NOMBRETS'].'">'.$datos['NOMBRETS'].'</option>';
                                  
                                            }
                                        ?>
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Descripcion">Descripcion:</label>
                                    <input disabled type="text" class="form-control" id="Descripcion" placeholder="Descripcion" name="descrip">
                                    <div class="invalid-feedback">
                                            Este campo es obligatorio
                                    </div>
                                    <div class="valid-feedback">
                                        Correcto
                                    </div>
                                </div>
                                
                                <button type="submit" id="eliminar" class="btn btn-outline-danger">Borrar</button>

                                
                            </form>
                        </div>
                    </div>
                    <script>
                        var combo;
                        window.onload=function(){
                        combo = document.getElementById("combo");
                        combo.addEventListener("change", function(){
                        var opt = combo.options[combo.selectedIndex];
                        document.getElementById("Descripcion").value= opt.getAttribute("des");
                            });
                        };
                    </script>   
                </div>
            </main>

