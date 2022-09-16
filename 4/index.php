<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 4</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5>
                    4. Crear una clase que tenga 2 atributos: password y salt. La clase debe tener métodos para cifrar
                    la contraseña
                    concatenada al salt enviado como parámetro GET. El resultado debe mostrarse en una tabla de la
                    siguiente manera:
                </h5>
            </div>
        </div>



        <div class="row mt-4 d-flex justify-content-between">
            <div class="col-3">
                <form action="index.php" method="get" class="d-grid gap-2">
                    <input type="text" name="password" id="" placeholder="Texto a cifrar">
                    <input type="text" name="salt" id="" placeholder="Salt para fortalecer el cifrado">
                    <button class="btn btn-primary">Aceptar</button>
                </form>
            </div>


            <div class="col-8">
                <?php 
                    if(isset($_GET['password']) && isset($_GET['salt'])){
                        require_once "seguridad.php";
                        $password = $_GET['password'];
                        $salt = $_GET['salt'];

                        echo 
                            '<h4 class="mb-4">Cifrado de texto</h4>'.
                            '<table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Contraseña a cifrar</th>
                                        <th scope="col">Esto se va cifrar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Salt</td>
                                        <td>'.$salt.'</td>
                                    </tr>';       
                        
                                    foreach(Seguridad::cifrar($password) as $key => $value){
                                        echo 
                                            '<tr>'.
                                                '<td>'.$key.'</td>'.
                                                '<td>'.$value.'</td>'.
                                            '</tr>';
                                    }
                        echo    '</tbody>
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