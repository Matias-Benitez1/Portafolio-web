<?php
    if(isset($_COOKIE["BLOK"])){$rol= true;} else { header('Location: login.php');exit;}
    include 'templates/header.php';
    include 'templates/navegacionC.php';
    include 'templates/funciones.php';
?>

            <main class="pt-4" >
                <div class="container"> 
                    <h2 class="text-center mb-4">Borrar Problema</h3>
                    <div class="row">
                        <div class="col">
                            <form class="needs-validation" novalidate method="POST" action="Eliminarproblema.php"> 
                                <div class="form-group">
                                    <label for="Nombre">ID Problema:</label>
                                    <select id="combo" name="combo10" onclick="document.getElementById('cont-error').innerHTML='';">
                                    <option>
                                        <?php 
                                            while(($datos = oci_fetch_array($queryT4, OCI_BOTH)) !=false)
                                            {
                                           
                                           echo  '<option value="'.$datos['ID_PROBLEMA'].'" des= "'.$datos['DESCRIPCION'].'"n ="'.$datos['ID_PROBLEMA'].'">'.$datos['ID_PROBLEMA'].'</option>';
                                  
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
                                
                                <button type="submit" id="eliminar" class="btn btn-outline-danger" >Borrar</button>

                                
                            </form>
                        </div>
                    </div>
                    <script>
                        var combo;
                        window.onload=function(){
                        combo = document.getElementById("combo");
                        combo.addEventListener("change", function(){
                        var opt = combo.options[combo.selectedIndex];
                        //document.getElementById("ELIMPUTQUEMUESTRAELNOMBRE").innerText= opt.getAttribute("n");
                        document.getElementById("Descripcion").value= opt.getAttribute("des");
                            });
                        };
                    </script>  
                </div>
            </main>

