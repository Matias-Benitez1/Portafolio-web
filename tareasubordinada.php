<?php
    if(isset($_COOKIE["BLOK"])){$rol= true;} else { header('Location: login.php');exit;}
    include 'templates/header.php';
    include 'templates/navegacionA.php';
    include 'templates/funciones.php';
?>
            <main class="pt-4">
                
                <div class="container">
                    <h2 class="text-center mb-4">Crear tarea subordinada</h3>
                    <div class="row">
                        <div class="col">
                            <form class="needs-validation" novalidate method="POST" action="tareasubordinada.php"> 
                                <div class="form-group">
                                    <label for="Nombre">Nombre Tarea subordinada:</label>
                                    <input onclick="document.getElementById('cont-error5').innerHTML='';" type="text" class="form-control" id="Nombre_Tarea" placeholder="Nombre " name="TS" required>
                                    <div class="invalid-feedback">
                                            Este campo es obligatorio
                                    </div>
                                    <div class="valid-feedback">
                                        Correcto
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Descripcion">Descripcion:</label>
                                    <input type="text" class="form-control" id="Descripcion" placeholder="Descripcion" name="descripTS" required>
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