<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Calculadora</title>
</head>
<body class="bg-dark text-white">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Bodytech</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="zapatos.php">Zapatos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="salpicon.php">salpicon</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </header>

    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-4 border border-warning border-3">
                    <form action="numeros.php" method="POST">
                    <h3>Calculadora</h3>
                    <div class="mb-3">
                            <label class="form-label">Numero 1</label>
                            <input type="number" class="form-control" name="numero1" placeholder="Ingrese primer numero">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Numero 2</label>
                            <input type="number" class="form-control" name="numero2" placeholder="Ingrese segundo numero">
                        </div>

                            <button type="submit" class="btn btn-danger" name="calcularSuma"><i class="fas fa-plus"></i></button>

                            <button type="submit" class="btn btn-danger" name="calcularResta"><i class="fas fa-minus"></i></button>

                            <button type="submit" class="btn btn-danger" name="calcularMultiplicacion"><i class="fas fa-times"></i></button>

                            <button type="submit" class="btn btn-danger" name="calcularDivision"><i class="fas fa-divide"></i></button>
                    </form>

                    <br>

                    <?php

                        if(isset($_POST["calcularSuma"])){
                            $numero1=$_POST["numero1"];
                            $numero2=$_POST["numero2"];

                            $total=$numero1+$numero2;

                            echo("El resultado de su suma es: ".$total);
                        }

                        if(isset($_POST["calcularResta"])){
                            $numero1=$_POST["numero1"];
                            $numero2=$_POST["numero2"];

                            $total=$numero1-$numero2;

                            echo("El resultado de su resta es: ".$total);
                        }

                        if(isset($_POST["calcularMultiplicacion"])){
                            $numero1=$_POST["numero1"];
                            $numero2=$_POST["numero2"];

                            $total=$numero1*$numero2;

                            echo("El resultado de su multiplicacion es: ".$total);
                        }

                        if(isset($_POST["calcularDivision"])){
                            $numero1=$_POST["numero1"];
                            $numero2=$_POST["numero2"];
                            if($numero2==0){
                                echo("como va a dividir por eso ");
                            }else{
                                $total=$numero1/$numero2;
                                echo("El resultado de su division es: ".$total);
                            }
                            
                            

                            
                        }
                    
                    
                    ?>
                </div>
            </div>
        </div>
    </main>


    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/38d623f6cf.js" crossorigin="anonymous"></script>
</body>
</html>








