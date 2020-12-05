<?php
   
    include 'templates/header.php';
    include 'templates/navegacion.php';
?>

    <div class="container pt-4">
        <div class="row no-gutters">
            <div class="col-12 hero">
                <img src="img/contactanos.jpg" class="img-fluid">
                <h2 class="text-uppercase d-none d-md-block py-3 px-5">Contacto</h2>
            </div>
        </div>
    </div>

    <div class="container pt-4">
        <div class="row justify-content-center">
                <main class="col-lg-8 contenido-principal">
                    <h2 class="d-block d-md-none text-uppercase text-center">
                        Contacto
                    </h2>
                    <form class="p-5 mt-5 formulario-contacto needs-validation" novalidate>
                          <div class="form-group">
                              <label for="nombre">Nombre:</label>
                              <input type="text" class="form-control" id="nombre" placeholder="Tu Nombre" required>
                              <div class="invalid-feedback">
                                 El nombre es obligatorio
                              </div>
                              <div class="valid-feedback">
                                Correcto
                             </div>
                          </div>
                          <div class="form-group">
                            <label for="email">E-Mail:</label>
                            <input type="email" class="form-control" id="email" placeholder="Tu Correo" required>
                            <div class="invalid-feedback">
                              El correo es obligatorio
                           </div>
                           <div class="valid-feedback">
                             Correcto
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="mensaje">Mensaje:</label>
                          <textarea id="mensaje" class="form-control"  required></textarea>
                          <div class="invalid-feedback">
                            El mensaje es obligatorio
                         </div>
                         <div class="valid-feedback">
                           Correcto
                        </div>
                      </div>
                      <input type="submit" class="btn btn-primary text-uppercase" value="Enviar">
                    </form>
                </main>

        </div>
    </div>

    <?php
      include 'templates/footer.php';
?>

    