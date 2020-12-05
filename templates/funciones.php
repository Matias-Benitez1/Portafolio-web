
<?php
            //Conexión a la base de datos de la nube
            $conexión = oci_connect("Admin", "admin123", "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = portafolio.cmva6l5m8wzt.sa-east-1.rds.amazonaws.com)(PORT = 1521)) (CONNECT_DATA = (SERVICE_NAME = PORTA) (SID = PORTA)))","AL32UTF8");
            if (!$conexión) {
                echo "fallo la conexion";
                $e = oci_error();
                trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
            }
            ?>
            <?php 
                // Procedimiento almacenado de insertar Tarea
                if ((isset($_POST['nT']))&&(isset($_POST['descrip'])&&(isset($_POST['combo5']))))
                {           
                    $nombre_Tarea=$_POST['nT'];
                    $descripcion=$_POST['descrip'];
                    $id_sub=$_POST['combo5'];
                    $stid = oci_parse($conexión, 'begin insertarTarea(:nT, :descrip, :combo5); end;');
                    oci_bind_by_name($stid, ':nT', $nombre_Tarea);
                    oci_bind_by_name($stid, ':descrip', $descripcion);
                    oci_bind_by_name($stid, ':combo5', $id_sub);


                    oci_execute($stid);

                    oci_free_statement($stid);

                    echo '<span id="cont-error11" >
                    <p class="alert alert-success" role="alert">Tarea Insertada Correctamente!</p></span>';
                    
                }

            ?>



<?php
// Procedimiento almacenado de insertar Tarea Subordinada
if ((isset($_POST['TS']))&&(isset($_POST['descripTS'])))
{           
    $tarea_subordinada=$_POST['TS'];
    $descripcion=$_POST['descripTS'];
    $stid = oci_parse($conexión, 'begin insertarTareaSubordinada(:TS, :descripTS); end;');
    oci_bind_by_name($stid, ':TS', $tarea_subordinada);
    oci_bind_by_name($stid, ':descripTS', $descripcion);


    oci_execute($stid);

    oci_free_statement($stid);

    echo '<span id="cont-error5" >
                      <p class="alert alert-success" role="alert">La tarea subordinada se creada correctamente</p></span>';
}
?>

<?php 
            //Select de tarea subordinada
             $queryT1 = oci_parse($conexión, 'SELECT * FROM TAREA_SUBORDINADA');
             oci_execute($queryT1);
?>

<?php
                //Select de tareas
                $queryT = oci_parse($conexión, 'SELECT * FROM TAREAS');
                oci_execute($queryT);
?>

<?php
                //Select de USUARIO
                $queryT2 = oci_parse($conexión, 'SELECT * FROM USUARIO');
                oci_execute($queryT2);
?>
<?php
                //Select de USUARIO
                $queryT3 = oci_parse($conexión, 'SELECT * FROM FLUJO_DETAREAS');
                oci_execute($queryT3);
?>
<?php
                //Select de PROBLEMA
                $queryT4 = oci_parse($conexión, 'SELECT * FROM PROBLEMA');
                oci_execute($queryT4);
?>


<?php
            //Eliminar tarea
            if ((isset($_POST['combo1'])&& ($_POST['combo1']!="")))
            {           
                $id_tarea=$_POST['combo1'];
                
                $stid = oci_parse($conexión, 'begin EliminarTarea(:combo1); end;');
                oci_bind_by_name($stid, ':combo1', $id_tarea);

                oci_execute($stid);

                oci_free_statement($stid);

               echo '<span id="cont-error10" >
                      <p class="alert alert-success" role="alert">Tarea Asignada Correctamente!</p></span>';

            }
?>


<?php


            //Eliminar tarea subordinada
            if ((isset($_POST['combo4'])&& ($_POST['combo4']!="")))
            {           
                $id_tarea=$_POST['combo4'];
                
                $stid = oci_parse($conexión, 'begin EliminarTareaSubordinada(:combo4); end;');
                oci_bind_by_name($stid, ':combo4', $id_tarea);

                oci_execute($stid);

                oci_free_statement($stid);

                echo '<span id="cont-error12" >
                      <p class="alert alert-success" role="alert">Tarea Asignada Correctamente!</p></span>';

            }
            ?>

<?php 
                // Procedimiento almacenado de Reportar Problema 
                if ((isset($_POST['descrip'])&&(isset($_POST['combo7']))))
                {   
                    $ID_TAREAS=$_POST['combo7'];        
                    $descripcion=$_POST['descrip'];
                    $stid = oci_parse($conexión, 'begin insertarProblema(:combo7 , :descrip); end;');
                    oci_bind_by_name($stid, ':combo7', $ID_TAREAS);
                    oci_bind_by_name($stid, ':descrip', $descripcion);
                   
                    

                    oci_execute($stid);
                    

                    oci_free_statement($stid);
                    
                    echo '<span id="cont-error13" >
                      <p class="alert alert-success" role="alert">Problema Reportado!</p></span>';
                }

            ?>

<?php 
                // Procedimiento Devolver tarea
                if ((isset($_POST['descrip'])&&(isset($_POST['combo8']))))
                {   
                    $ID_TAREAS=$_POST['combo8'];        
                    $estado_tarea=$_POST['descrip'];
                    $stid = oci_parse($conexión, 'begin devolverTarea(:combo8 , :descrip); end;');
                    oci_bind_by_name($stid, ':combo8', $ID_TAREAS);
                    oci_bind_by_name($stid, ':descrip', $estado_tarea);
                   
                    

                    oci_execute($stid);
                    

                    oci_free_statement($stid);

                    echo '<p class="alert alert-success" role="alert">Se ha devuelto la tarea correctamente';
                    
                }

            ?>


<?php 
                // Procedimiento asignar tarea 
                if ((isset($_POST['combo5']))&&(isset($_POST['combo6']))&&(isset($_POST['FechaInicio']))&&(isset($_POST['FechaTermino'])))
                {           
                    
                    $id_tareitias=$_POST['combo5'];
                    $id_usuario=$_POST['combo6'];
                    $fecha_inicio=date("d-m-Y H:i:s",strtotime($_POST['FechaInicio']));
                    $fecha_termino=date("d-m-Y H:i:s",strtotime($_POST['FechaTermino']));
                    $stid = oci_parse($conexión, 'begin AsignarTarea(:combo5, :combo6, :FechaInicio, :FechaTermino); end;');
                    oci_bind_by_name($stid, ':combo5', $id_tareitias);
                    oci_bind_by_name($stid, ':combo6', $id_usuario);
                    oci_bind_by_name($stid, ':FechaInicio', $fecha_inicio);
                    oci_bind_by_name($stid, ':FechaTermino', $fecha_termino);


                    oci_execute($stid);

                    oci_free_statement($stid);

                    echo '<span id="cont-error10" >
                      <p class="alert alert-success" role="alert">Tarea Asignada Correctamente!</p></span>';
                  
                    
                }
            ?>


<?php 
                // Procedimiento asignar flujo
                if ((isset($_POST['combobox1']))&&(isset($_POST['combobox2']))&&(isset($_POST['FechaInicio1']))&&(isset($_POST['FechaTermino1'])))
                {           
                    
                    $id_tareitias=$_POST['combobox1'];
                    $id_usuario=$_POST['combobox2'];
                    $fecha_inicio=date("d-m-Y H:i:s",strtotime($_POST['FechaInicio1']));
                    $fecha_termino=date("d-m-Y H:i:s",strtotime($_POST['FechaTermino1']));
                    $stid = oci_parse($conexión, 'begin AsignarFT(:combobox1, :combobox2, :FechaInicio1, :FechaTermino1); end;');
                    oci_bind_by_name($stid, ':combobox1', $id_tareitias);
                    oci_bind_by_name($stid, ':combobox2', $id_usuario);
                    oci_bind_by_name($stid, ':FechaInicio1', $fecha_inicio);
                    oci_bind_by_name($stid, ':FechaTermino1', $fecha_termino);


                    oci_execute($stid);

                    oci_free_statement($stid);

                    echo '<span id="cont-error6" >
                      <p class="alert alert-success" role="alert">Flujo de Tarea Asignado Correctamente!</p></span>';
                    
                }

?>
<?php
            //Eliminar problema
            if ((isset($_POST['combo10'])&& ($_POST['combo10']!="")))
            {           
                $id_problema=$_POST['combo10'];
                
                $stid = oci_parse($conexión, 'begin EliminarProblema(:combo10); end;');
                oci_bind_by_name($stid, ':combo10', $id_problema);

                oci_execute($stid);

                oci_free_statement($stid);

                echo '<span id="cont-error" >
                      <p class="alert alert-success" role="alert">Se borro el Problema!</p></span>';

            }
?>



            

<?php
        //terminar tareas subordinadas
        if ((isset($_POST['combo10'])))
        {           
            $id_tareas=$_POST['combo10'];
            $terminado="";
            if(isset($_POST['checkbox1'])){
                $terminado = 'T' ;
            }
            else
            {
                $terminado = 'N' ;
            }
            $stid = oci_parse($conexión, 'begin actualizarTS(:combo10, :checkbox1); end;');
            oci_bind_by_name($stid, ':combo10', $id_tareas);
            oci_bind_by_name($stid, ':checkbox1', $terminado);


            oci_execute($stid);

            oci_free_statement($stid);
            oci_close($conexión);
            
            echo '<span id="cont-error8" >
                  <p class="alert alert-success" role="alert">Tarea subordinada terminada correctamente</p></span>';
        }
?>



<?php
        //terminar tareas 
        if ((isset($_POST['combo9'])))
        {           
            $id_tareas=$_POST['combo9'];
            $terminado="";
            if(isset($_POST['checkbox4'])){
                $terminado = 'T' ;
            }
            else
            {
                $terminado = 'N' ;
            }
            $stid = oci_parse($conexión, 'begin actualizarFT(:combo9, :checkbox4); end;');
            oci_bind_by_name($stid, ':combo9', $id_tareas);
            oci_bind_by_name($stid, ':checkbox4', $terminado);


            oci_execute($stid);

            oci_free_statement($stid);
            oci_close($conexión);
            
            echo '<span id="cont-error8" >
                  <p class="alert alert-success" role="alert">Tarea terminada correctamente</p></span>';
        }
?>