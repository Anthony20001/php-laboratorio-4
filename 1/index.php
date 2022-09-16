<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 1</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5>
                    1. Utilizando programación orientada a objeto, desarrolle este problema: Elaborar un programa en PHP
                    + HTML que
                    permita calcular el salario neto de un trabajador en función del número de horas trabajadas, pago
                    por hora de trabajo
                    y un descuento fijo al sueldo bruto del 20% (este valor es una constante). Los cálculos a efectuar
                    para obtener el
                    salario neto de un trabajador se muestran a continuación: SalarioBruto = HorasTrabajadas *
                    PagoPorHora Descuento = 0.2 * SalarioBruto SalarioNeto = SalarioBruto – Descuento
                </h5>
            </div>
        </div>



        <div class="row mt-4">
            <div class="col-3">
                <form action="index.php" method="get" class="d-grid gap-2">
                    <input type="text" name="nombre" id="" placeholder="Nombre">
                    <input type="number" name="pago_hora" id="" placeholder="Pago por horas">
                    <input type="number" name="horas" id="" placeholder="Horas trabajadas">
                    <button class="btn btn-primary">Aceptar</button>
                </form>
            </div>


            <div class=" col-9">
                <?php 
                    if(isset($_GET['nombre']) && isset($_GET['pago_hora']) && isset($_GET['horas'])){
                        require_once "contabilidad.php";
                        $nombre = $_GET['nombre'];
                        $pago_hora = $_GET['pago_hora'];
                        $horas = $_GET['horas'];
                        echo '<h4 class="text-center">Sr. '.$nombre.' su salario neto es de: '.'<span class="text-primary">'.Contabilidad::salario_neto($horas, $pago_hora).'$ dólares</span>'.'</h4>';
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