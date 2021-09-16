<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tienda de zapatos</title>
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
                            <a class="nav-link" href="numeros.php">Calculadora</a>
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
                <div class="col-4 border border-info border-3">

                <form action="zapatos.php" method="POST">
                        <h3>Spring Step</h3>
                        <div class="mb-3">
                            <label class="form-label">Cuantos pares de zapatos son:</label>
                            <input type="number" class="form-control" name="pares">
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Precio de los zapatos:</label>
                            <input type="number" class="form-control" name="precio">
                        </div>

                        <div>
                            <img class="w-100" src="https://i.pinimg.com/originals/d8/72/62/d87262450689ed2cd76a03043fee764a.png" alt="">
                        </div>
                        
                        <button type="submit" class="btn btn-secondary" name="proceso">Procesar compra</button>
                    </form>

                    <br>

                    <?php

                        if(isset($_POST["proceso"])){

                            $pares=$_POST["pares"];
                            $precio=$_POST["precio"];
                            $totalCompra=$precio*$pares;
                            
                            echo("<h2>------Factura------</h2><br>");
                        

                            if($pares==2){

                                $descuento=$totalCompra*0.1;
                                $totalCompra=$totalCompra-$descuento;
                                echo("su total a pagar es: ".$totalCompra);
                                echo("<br>");
                                echo("<h4>!Muchas gracias por su compra¡</h4>");



                            }else if($pares>3 && $pares<=4){

                                $descuento=$totalCompra*0.2;
                                $totalCompra=$totalCompra-$descuento;
                                
                                echo("su total a pagar es: ".$totalCompra);
                                echo("<br>");
                                echo("<h4>!Muchas gracias por su compra¡</h4>");

                            }else if($pares>=5){

                                $descuento=$totalCompra*0.5;
                                $totalCompra=$totalCompra-$descuento;
                                echo("su total a pagar es: ".$totalCompra);
                                echo("<br>");
                                echo("<h4>!Muchas gracias por su compra¡</h4>");

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