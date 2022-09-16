<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 5</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h6>
                    5. Crear una clase llamada Componentes. Esta clase tendrá solo métodos estáticos:
                    a. Un método estático llamado myModal que me devuelva el código XML de un Modal. Este método
                    recibirá
                    como parámetros el El texto del botón modal, el color del botón modal (El color predeterminado
                    es verde),
                    título del modal, texto que va en el cuerpo del modal, el Texto del botón cerrar, el texto del
                    botón ir, y el
                    vínculo del botón ir: por ejemplo:
                </h6>
            </div>
        </div><br>

        <div class="row">
            <div class="col-6">
                <?php 
                require_once "componentes.php";

                echo "<h4>Modal dinámico</h4>";
                echo Componentes::myModal('Ir a GitHub', 'Modal para ir a GitHub', 'presiona el botón Github para dirigirse al portal', 'Cerrar', 'GitHub', 'https://github.com/', 'warning');

                echo "<h4 class='mt-5'>Progress - bar  dinámico</h4>";
                echo 
                    '<script>'.
                        
                    '</script>';
                echo  Componentes::progressBar(20, "warning");
            ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>