<?php
    if(isset($_COOKIE["BLOK"])&& isset($_GET['cerrar']))
    {setcookie('BLOK',"", time()-3600, '/'); }
    include 'templates/header.php';
    include 'templates/navegacion.php';
?>


    <div class="container">
        <div id="slider-principal" class="carousel slide mt-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slider-principal" data-slide-to="0" class="active"></li>
                <li data-target="#slider-principal" data-slide-to="1"></li>
                <li data-target="#slider-principal" data-slide-to="2"></li>
            </ol>


            <div >

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="img/slide_1.jpg" data-src="" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="img/slide_2.png" data-src="" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="img/slide_4.jpg" data-src="" alt="third slide">
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
            </div><!--.carousel-inner-->

            <a href="#slider-principal" class="carousel-control-prev" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a href="#slider-principal" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </a>
        </div>
    </div>
    </div>
    <section class="nuevo-sitio py-5">
        <h1 class="text-center text-uppercase mt-4 encabezado">
            <span class="text-lowercase d-block">bienvenido a nuestro </span> sitio Web
        </h1>
        <p class="text-center mt-4"> Brindando satisfacción a nuestros clientes<br>
            desde 1999.</p>
    </section>

    <div class="container mb-5">
        <div class="row">
            <div class="col-md-4 text-center mb-4">
                <div class="imagen-servicio">
                    <img src="img/servicio_2.png" class="img-fluid">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-md-10 pt-4 servicio-info">
                            <h2 class="text-center text-uppercase encabezado">
                                <span class="text-lowercase d-block">Conoce sobre</span> nosotros
                            </h2>
                            <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                        </div>
                    </div> <!--.row-->
                </div> <!--.imagen-destacada-->
            </div> <!--.col-md-4-->
            <div class="col-md-4 text-center mb-4">
                <div class="imagen-servicio">
                    <img src="img/servicio_1.jpg" class="img-fluid">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-md-10 pt-4 servicio-info">
                            <h2 class="text-center text-uppercase encabezado">
                                <span class="text-lowercase d-block">Nuestros</span> servicios
                            </h2>
                            <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                        </div>
                    </div> <!--.row-->
                </div> <!--.imagen-destacada-->
            </div> <!--.col-md-4-->
            <div class="col-md-4 text-center mb-4">
                <div class="imagen-servicio">
                    <img src="img/servicio_3.jpg" class="img-fluid">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-md-10 pt-4 servicio-info">
                            <h2 class="text-center text-uppercase encabezado">
                                <span class="text-lowercase d-block">Visita nuestra</span> sucursal
                            </h2>
                            <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
                        </div>
                    </div> <!--.row-->
                </div> <!--.imagen-destacada-->
            </div> <!--.col-md-4-->
        </div>
    </div>

    <div class="horario">
      <div class="container">
          <div class="row">
              <div class="col-md-6 p-4">
                  <h2 class="text-center text-uppercase mt-5">Horarios Call cente</h2>
                  <p class="text-center mt-3 lead">
                        Los Horarios estan sujetos a cambios por festividades.
                  </p>
                  <table class="table table-hover text-center mt-3">
                      <thead>
                          <tr>
                              <th class="text-center">Día</th>
                              <th class="text-center">De</th>
                              <th class="text-center">Hasta</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                             <td>Lunes</td>
                              <td>08:00</td>
                              <td>19:00</td>
                          </tr>
                          <tr>
                              <td>Martes</td>
                              <td>08:00</td>
                              <td>19:00</td>
                          </tr>
                          <tr>
                              <td>Miércoles</td>
                              <td>08:00</td>
                              <td>19:00</td>
                          </tr>
                          <tr>
                              <td>Jueves</td>
                              <td>08:00</td>
                              <td>19:00</td>
                          </tr>
                          <tr>
                              <td>Viernes</td>
                              <td>08:00</td>
                              <td>19:00</td>
                          </tr>
                          <tr>
                              <td>Sábado</td>
                              <td>10:00</td>
                              <td>14:00</td>
                          </tr>
                          <tr>
                              <td>Domingo</td>
                              <td>Cerrado</td>
                              <td>Cerrado</td>
                          </tr>
                      </tbody>
                 </table>
              </div>
              <div class="col-md-6 bg-horario"></div>
          </div>
      </div>
    </div>
    <BR></BR>
    <div class="citas container-fluid py-5">
      <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6 text-center">
              <h3 class="text-uppercase">Realiza una cita</h3>
              <p class="mt-5">
                Si estas interesado en contratar nuestros servicios contactanos o agendar una cita personalisada.
              </p>
              <a href="#" class="btn btn-primary mt-3 text-uppercase">Leer más</a>
          </div>
      </div>
    </div>

<?php
      include 'templates/footer.php';
?>

   