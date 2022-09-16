<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 2</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5>
                    2. Utilizando programación orientada a objeto, desarrolle este problema: Se pide crear un algoritmo
                    que calcule el
                    porcentaje de alumnos y alumnas de un salón de clase. Por ejemplo, si hay 25 alumnos y 20 alumnas la
                    salida debe
                    ser: Porcentaje de alumnos: (25/45)*100 = 55.55555% Porcentaje de alumnas: (20/45)*100 = 44.44444%
                    Generar una
                    tabla html con los resultados
                </h5>
            </div>
        </div>



        <div class="row mt-4 d-flex justify-content-between">
            <div class="col-3">
                <form action="index.php" method="get" class="d-grid gap-2">
                    <input type="number" name="cant_alumnas" id="" placeholder="Cantidad de alumnas">
                    <input type="number" name="cant_alumnos" id="" placeholder="Cantidad de alumnos">
                    <button class="btn btn-primary">Aceptar</button>
                </form>
            </div>


            <div class=" col-6">
                <?php 
                    if(isset($_GET['cant_alumnas']) && isset($_GET['cant_alumnos'])){
                        require_once "estudiantes.php";
                        $cant_alumnas = $_GET['cant_alumnas'];
                        $cant_alumnos = $_GET['cant_alumnos'];
                        $obj = new Estudiante($cant_alumnas, $cant_alumnos);
                        $distribucion = $obj->distribucion_sexo();

                        echo 
                            '<h4 class="mb-4">Distribución por sexo</h4>'.
                            '<table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Damas</th>
                                        <th scope="col">Caballeros</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>'.number_format($distribucion['mujeres'], 2).'%</td>
                                        <td>'.number_format($distribucion['hombres'], 2).'%'.'</td>
                                    </tr>       
                                </tbody>
                        </table>';
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>



    <style>
    input {
        border-box: box-sizing;
        display: block;
        width: 100%;
    }
    </style>
</body>

</html>