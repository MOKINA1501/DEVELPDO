<div class="d-flex justify-content-center text-center">

    <form class="p-5 bg-light" method="post">

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                </div>
                <input type="nombre" class="form-control" id="nombre" name="registroNombre">
            </div>

        </div>

        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"></i><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" name="registroEmail">
            </div>
        </div>

        <div class="form-group">
            <label for="pwd">Contraseña:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-sharp fa-solid fa-key"></i></span>
                </div>
                <input type="password" class="form-control" id="pwd" name="registroPassword">
            </div>
        </div>
        <?php

        /*=====================================
    	FORMA EN QUE SE INSTANCIA LA CLASE DE UN MÉTODO NO ESTÁTICO
    	======================================*/

        /*  $registro = new Controladorformularios();
        $registro->ctrRegistro(); */

        /*=====================================
    	FORMA EN QUE SE INSTANCIA LA CLASE DE UN MÉTODO ESTÁTICO
    	======================================*/

        $registro = ControladorFormularios::ctrRegistro();
        
        if ($registro == "ok") {

            echo '<script>
            
            if(window.history.replaceState){
                window.history.replaceState(null,null,window.location.href);
            }
            
            </script>';


            echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
        }


        ?>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

</div>