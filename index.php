<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Taller1</title>
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
                <div class="col-4 border border-danger border-3">
                    <form action="index.php" method="POST">
                        <h3>GYM Bodytech</h3>
                        <div>
                          <img class="w-100" src="https://i.pinimg.com/originals/f0/ee/cf/f0eecff8f557c63bca90b7b738c3df73.png" alt="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="nombre">
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Peso:</label>
                            <input type="number" class="form-control" name="peso" placeholder="kg" step="0.01">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Altura:</label>
                            <input type="text" class="form-control" name="altura" placeholder="m" step="0.01">
                            
                        </div>
                        
                        <button type="submit" class="btn btn-warning" name="calcular">Calcular</button>
                    </form>

                    <br>

                    <?php

                        if(isset($_POST["calcular"])){

                            $peso=$_POST["peso"];
                            $altura=$_POST["altura"];
                            

                            $imc=$peso/($altura*$altura);

                            echo("Su IMC es de: ".$imc);
                            echo("<br>");

                            if($imc<18.5){

                                echo("peso insuficiente");


                            }else if($imc>=18.5 && $imc<=24.9){

                                echo("Peso normal");

                            }else if($imc>=25 && $imc<=26.9){

                                echo("Sobrepeso grado 1");

                            }else if($imc>=27 && $imc<=29.9){
                                echo("Sobrepeso grado 2");

                            }else if($imc>=30 && $imc<=34.9){
                                echo("Obesidad 1");

                            }else if($imc>=35 && $imc<=39.9){
                                echo("Obesidad 2");

                            }else if($imc>=40 && $imc<=49.9){
                                echo("Obesidad 3");

                            }else if($imc>=50){
                                echo("Obesidad 4");

                            }else{
                                echo("revisar datos registrados");
                            }



                        }
    
                    ?>


                </div>
            </div>
        </div>
          
    </main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>




