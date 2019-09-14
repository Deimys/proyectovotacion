<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>elecciones</title>
    <link rel="stylesheet" href="{{asset('Bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{asset('Bootstrap/css/styles.css') }}">
</head>

<body>
    <header id="baner"> <img class="col" src="Bootstrap/imagenes/banner.jpg"></header>

    <br>
    <div class="container">
        <!-- cuadro contenedor-->
        <div class="row">
            <div class="col-12 col-sm-12  col-md-8 col-lg-8 col-xl-8 mx-auto">

                <div class="fonlogin card">
                    <br>
                    <center>
                        <form >

                            <div>
                                <img src="Bootstrap/imagenes/user.png">
                                <h2> <strong>Ingresar</strong> </h2>
                                <hr>
                            </div>


                            <div class="col-12 col-sm-12  col-md-8 col-lg-6 col-xl-4 form-group">
                                <label class="alineacion" for=""><b>Rol:</b> </label>
                                <select class=" borde  form-control" name="" id="" required>
                                    <option value="">Administrador</option>
                                    <option value="">Candidato</option>
                                    <option value="">Votante</option>
                                </select>
                            </div>

                            <div class="col-12 col-sm-12  col-md-8 col-lg-6 col-xl-4 form-group">
                                <label class="alineacion" for="username"> <b>Usuario:</b></label>
                                <input type="text" class="borde form-control" id="username" placeholder="Usuario" required>
                            </div>

                            <div class=" col-12 col-sm-12  col-md-8 col-lg-6 col-xl-4 form-group">
                                <label class="alineacion" for="pwd"> <b>Contraseña</b> :</label>
                                <input type="password" class=" borde  form-control" id="pwd" placeholder="Contraseña" required>
                            </div>


                            <div class=" col-12 col-sm-12  col-md-8 col-lg-6 col-xl-4 form-group">
                                <button type="submit" id="boton" class=" btn btn-dark btn-lg">Enviar</button>
                            </div>

                            
                        </form>

                    </center>


                </div>

            </div>

        </div>
    </div>
    <br>
                            <br>

</body>

</html>