
<?php
    if(isset($_COOKIE["BLOK"])){$rol= true;} else { header('Location: login.php');exit;}
    include 'templates/header.php';
    include 'templates/navegacionB.php';
    include 'templates/funciones.php';
?>

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-12">
                            <table class="table" >
                            <thead class="bg-primary text-white">
                                <tr>
                                <th>NOMBRE</th>
                                <th>NOMBRE DE TAREA</th>
                                <th>DESCRIPCION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql="Select * FROM TAREAS NATURAL JOIN USUARIO";
                                    $result=oci_parse($conexión,$sql);
                                    oci_execute($result);
                                    while(($datos=oci_fetch_array($result, OCI_BOTH)) !=false)
                                 {
                                    echo '<tr class="fuente_datos_grilla">
                                    <td > '. $datos['NOMBRE'].'</td>
                                    <td > '. $datos['NOMBREUSUARIO'].'</td>
                                    <td > '. $datos['DESCRIPCION'].'</td>';
                                 }
                                ?>
                                
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>