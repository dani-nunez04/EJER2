<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Parte A Ejercicio 2 PHP</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <form action="" method="post">

                <fieldset>

                    <h1 class="card-title">Introduce los datos para crear la cookie</h1>

                    <label class="form-label" for="NombreCookie">Cookie Name:</label><br>
                    <input class="form-text" type="text" name="NombreCookie" id="NombreCookie"><br>
                    <label class="form-label" for="ValorCookie">Valor Cookie</label><br>
                    <input class="form-text" type="text" name="ValorCookie" id="ValorCookie"><br>
                    <label class="form-label" for="DuracionCookie">Duracion Cookie:</label><br>
                    <input class="form-label" type="number" name="DuracionCookie" id="DuracionCookie"><br>
                    <input class="btn btn-primary" type="submit" value="EnviarGuardadoCookies">

                    




                </fieldset>

                </form>

                <?php  
                
                if (isset($_POST["NombreCookie"], $_POST["ValorCookie"], $_POST["DuracionCookie"])) {
                    $nombre = $_POST["NombreCookie"];
                    $valor = $_POST["ValorCookie"];
                    $duracion = $_POST["DuracionCookie"];

                    setcookie($nombre, $valor, time()+$duracion);
                }

                ?>
        </div>
        <!-- Parte B -->
        <div class="row">
            <h1 class="text-start">Cookies Creadas</h1>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">Cookie Name</th>
                <th scope="col">Cookie Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>John</td>
                <td>Doe</td>
                <td>@social</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>