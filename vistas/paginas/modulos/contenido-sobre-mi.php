<div class="container-fluid bg-white">

    <div class="container py-4">
        <div class="row">
            <div class="col-12 col-lg-6">
                <?php
                    echo $blog["sobre_mi_completo"];
                ?>
            </div>
            <div class="col-12 col-lg-6">
                <h4 class="mb-4">Contáctenos</h4>
                <form method="post">
                    <input type="text" class="form-control my-2" name="nombreContacto" placeholder="Nombre y apellido"
                        requiered>
                    <input type="email" class="form-control my-2" name="emailContacto"
                        placeholder="Escriba su correo electronico" requiered>
                    <textarea name="mensajeContacto" class="form-control my-2" cols="30" rows="10"></textarea>
                    <input type="submit" class="btn btn-primary" value="Enviar">
                </form>

            </div>
        </div>
    </div>
</div>