<?php
    include 'templates/header.php';
    include 'templates/navegacion.php';
?>
    
    <div class="container pt-4">
        <div class="row no-gutters">
            <div class="col-12 hero">
                <img src="img/nosotros.jpg" class="img-fluid">
                <h2 class="text-uppercase d-none d-md-block py-3 px-5">Nosotros</h2>
            </div>
        </div>
    </div>

    <div class="container pt-4">
        <div class="row">
                <main class="col-lg-8 contenido-principal">
                    <h2 class="d-block d-md-none text-uppercase text-center">
                        Nosotros
                    </h2>
                    <p>El principal objetivo de negocio de Process SA es mejorar los procesos de gestión de las tareas de los clientes en cuanto a su organización interna para hacerla más eficiente y rentable para el negocio, con el fin de agilizar los tiempos de estos y reducir los gastos asociados como también la organización de estos.</p>
                      
                    <p>falta vision.</p>
                      

                    <h1 class="text-center text-uppercase mt-5 encabezado">
                        <span class="text-lowercase d-block">conoce nuestras </span> instalaciones
                    </h1>
                    <div class="imagenes pt-4">
                        <a href="#" data-target="#imagen_1" data-toggle="modal">
                            <img src="img/galeria_mini_01.jpg" class="img-fluid">
                        </a>
                        <a href="#" data-target="#imagen_2" data-toggle="modal">
                            <img src="img/galeria_mini_02.jpg" class="img-fluid">
                        </a>
                        <a href="#" data-target="#imagen_3" data-toggle="modal">
                            <img src="img/galeria_mini_03.jpg" class="img-fluid">
                        </a>

                        <div class="modal fade" id="imagen_1" tabindex="-1" role="dialog" aria-labelledby="Imagen 1" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="img/galeria_grande_01.jpg" class="img-fluid">
                                    </div><!--modal-body-->
                                </div><!--modal-content-->
                            </div><!--modal-dialog-->
                        </div> <!--modal-->
                        <div class="modal fade" id="imagen_2" tabindex="-1" role="dialog" aria-labelledby="Imagen 2" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="img/galeria_grande_02.jpg" class="img-fluid">
                                    </div><!--modal-body-->
                                </div><!--modal-content-->
                            </div><!--modal-dialog-->
                        </div> <!--modal-->
                        <div class="modal fade" id="imagen_3" tabindex="-1" role="dialog" aria-labelledby="Imagen 3" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="img/galeria_grande_03.jpg" class="img-fluid">
                                    </div><!--modal-body-->
                                </div><!--modal-content-->
                            </div><!--modal-dialog-->
                        </div> <!--modal-->
                    </div>
                </main>

                <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
                    <div class="sidebar horario">
                            <h2 class="text-center text-uppercase mt-5">Horarios</h2>
                            <p class="text-center mt-3 lead">
                                Morbi risus mi, feugiat non nulla eu, dapibus sagittis turpis. Praesent vel dignissim libero. Morbi vel porttitor orci. Integer non elit eu odio vulputate aliquet at sed odio.
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
                </aside>
        </div>
    </div>
    
    <?php
      include 'templates/footer.php';
?>
