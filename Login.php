<?php
    if(isset($_COOKIE["BLOK"])&& isset($_GET['cerrar']))
    {setcookie('BLOK',"", time()-3600, '/'); }
?>
<!doctype html>
<html lang="en">
  <head>
        <title>PROCESS S.A </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <link rel="stylesheet" href="css/styles.css">
  </head>
  
<body class="h-100 login" >

    
                <div class="container h-100 ">
                        <div class="row h-100 align-items-center justify-content-center">
                            <div class="col-md-7">
                                <div class="contenido p-5 bg-light">
                                <h2 class="text-center bg-primary text-light py-2 text-uppercase">Login Administradores</h2>
                                    <form action="Login.php" method="POST">
                                        <div class="form-group">
                                              <label for="uname">Usuario</label>
                                              <input type="text" class="form-control" id="uname"  placeholder="Enter username" name="name" required> 
                                        </div>
                                            <div class="form-group">
                                              <label for="exampleInputPassword1">Contraseña</label>
                                              <input type="password" class="form-control" id="password" placeholder="Password" name="pwd" required>
                                            </div>
                                            <div class="form-check">
                                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                              <label class="form-check-label" for="exampleCheck1">Recordar</label>
                                            </div>
                                            <input type="submit" class="mt-4 btn btn-outline-primary" value="Iniciar Sesión">
                                    </form>
                                </div>
                            </div>
                        </div>

                </div>
         
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="js/app.js"></script>
    <?php session_start();?>
            <?php
                $con = oci_connect("Admin", "admin123", "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = portafolio.cmva6l5m8wzt.sa-east-1.rds.amazonaws.com)(PORT = 1521)) (CONNECT_DATA = (SERVICE_NAME = PORTA) (SID = PORTA)))","AL32UTF8");
                if (!$con) {
                $m = oci_error();
                echo $m['message'], "\n";
                exit;
                }
                $query = 'SELECT id_rol FROM Usuario WHERE USER_NAME =:name and CONTRASEÑA =encriptar(:pwd) AND ID_ROL IN (182,202,204)';
                //query is sent to the db to fetch row id.
                $stid = oci_parse($con, $query);
                if ((isset($_POST['name']))||(isset($_POST['pwd'])))
                {           
                    $name=$_POST['name'];
                    $pass=$_POST['pwd'];
                }
                oci_bind_by_name($stid, ':name', $name);
                oci_bind_by_name($stid, ':pwd', $pass);
                oci_execute($stid);
                $row = oci_fetch_array($stid, OCI_ASSOC) !=false;
                if ($row) {
                    $_SESSION['name']=$_POST['name'];
                }
                else 
                {
                   exit;
                } 
                   $ID = $row['ID_ROL'];
                   oci_free_statement($stid);
                   //setcookie('rol',$ID, time()+3600, '/');
                   //var_dump($ID);
                   header('Location: index5.php');
                   //header function locates you to a welcome page saved s wel.php
                   setcookie('BLOK',"SI", time()+3600, '/');
            ?>
  </body>
</html>