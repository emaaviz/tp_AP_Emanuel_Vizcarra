
<?php 
require_once("../include/funciones.php");
require_once("../include/head.php");
require_once("../include/header.php");


?>



<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 bg-light form-demo rounded mt-5">
                <h1 class="text-center text-dark">Formulario de contacto</h1>
                <hr class="bg-light w-75">
                <form  method="post"  class="w-75 mx-auto" >
                    <div class="form-group">
                        <input type="text" name="name"  class="form-control bg-light" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control bg-light" placeholder="email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="asunto"  class="form-control bg-light" placeholder="Asunto" required>
                    </div>
                    <div class="form-group">
                        <textarea name="mensaje"   class="form-control bg-light" placeholder="Mensaje" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="contacto"  class="btn btn-primary btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>

        <?php 
        include("form_procesar.php");
        ?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



</body>

</html>




