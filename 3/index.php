<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 3</title>
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-12">
                <h2 class="mt-3 text-center">Cálculo de la Depreción Anual</h2>
            </div>
        </div>


        <br>
        <div class="row">
            <div class="col-12">
                <h5>
                    3. Elabore una aplicación web con PHP utilizando clases que permita generar una tabla de
                    depreciación lineal de un
                    activo determinado, conociendo su precio original y la cantidad de años de vida útil utilizando los
                    siguientes
                    enunciados:
                </h5>

                <ul>
                    <li>a. La depreciación anual se calcula dividiendo el precio original entre la vida útil.</li>
                    <li>b. En el año cero no hay valor recuperado.</li>
                    <li>c. En cada iteración se debe restar al precio original la depreciación anual.</li>
                </ul>
            </div>
        </div>





        <div class="row mt-4 d-flex justify-content-between">
            <div class="col-3">
                <form action="index.php" method="get" class="d-grid gap-2">
                    <input type="text" name="nombre_activo" id="" placeholder="Nombre del activo">
                    <input type="number" name="precio_original" id="" placeholder="Precio original">
                    <input type="number" name="vida_util" id="" placeholder="Vida útil">
                    <button class="btn btn-primary">Aceptar</button>
                </form>
            </div>


            <div class="col-6">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Año</th>
                            <th scope="col">Valor por año</th>
                            <th scope="col">Valor recuperado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if(isset($_GET['nombre_activo']) && isset($_GET['precio_original']) && isset($_GET['vida_util'])){
                                require_once "activo.php";
                                $obj = new Activo();

                                $activo = [
                                "nombre" => $_GET['nombre_activo'],
                                "precio_original" => $_GET['precio_original'],
                                "vida_util" => $_GET['vida_util']
                                ];

                                $obj->setVidaUtil($activo['vida_util']);
                                $obj->setDepreciacion_anual($activo['precio_original']/$activo['vida_util']);


                                $valor_recuperado = 0;
                                $valor_year = $activo['precio_original'];
                                
                                echo '<h4>Nombre del activo: '.$activo['nombre'].'</h4>';
                                echo '<h4>Vida útil: '.$obj->getVidaUtil().' años</h4>';
                                echo '<h4>Depreciación anual: '.$obj->getDepreciacion_anual().'$ dólares</h4><br>';
                            

                                for($i=0; $i<=$activo['vida_util']; $i++){
                                    echo   
                                        '<tr>'.
                                            '<td>'.$i.'</td>'.
                                            '<td>'.number_format($valor_year, 2).'$</td>'.
                                            '<td>'.number_format($valor_recuperado, 2).'$</td>'.
                                        '</tr>';

                                    $valor_recuperado += $obj->getDepreciacion_anual();
                                    $valor_year -= $obj->getDepreciacion_anual();
                                }
                            }
                        ?>
                    </tbody>
                </table>
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

    ul {
        list-style: none;
    }
    </style>
</body>

</html>