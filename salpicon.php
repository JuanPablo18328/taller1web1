<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Salpicon</title>
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
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main> 

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-4">
                <h3 class="text-center text-white">Salpicon</h3>
                <form action="salpicon.php" method="POST">
                    <div class="mb-3">
                        <label  class="form-label">Fruta uno</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="frutaUno" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Foto fruta uno</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="fotoUno" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Fruta dos</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="frutaDos">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Foto fruta dos</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="fotoDos" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Fruta tres</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="frutaTres">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Foto fruta tres</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="fotoTres" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Fruta cuatro</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="frutaCuatro">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Foto fruta cuatro</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="fotoCuatro" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Fruta cinco</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="frutaCinco">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Foto fruta cinco</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="fotoCinco" >
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name="boton">Preparar</button>
                </form>
            </div>
        </div>
    </div>
</main>


<?php
    if(isset($_POST["boton"])){
    $frutaUno=$_POST["frutaUno"];
    $frutaDos=$_POST["frutaDos"];
    $frutaTres=$_POST["frutaTres"];
    $frutaCuatro=$_POST["frutaCuatro"];
    $frutaCinco=$_POST["frutaCinco"];

    $fotoUno=$_POST["fotoUno"];
    $fotoDos=$_POST["fotoDos"];
    $fotoTres=$_POST["fotoTres"];
    $fotoCuatro=$_POST["fotoCuatro"];
    $fotoCinco=$_POST["fotoCinco"];

    $salpicones=array(array("nombre1"=>$frutaUno,"fotoUno"=>$fotoUno,"nombre2"=>$frutaDos,"fotoDos"=>$fotoDos,"nombre3"=>$frutaTres,"fotoTres"=>$fotoTres,"nombre4"=>$frutaCuatro, "fotoCuatro"=>$fotoCuatro,"nombre5"=>$frutaCinco, "fotoCinco"=>$fotoCinco),
    
    );
}


?>


    <?php foreach($salpicones as $salpicon):?>
        <div class="row row-cols-1 row-cols-md-5 g-4 text-dark">
        <div class="col">
            <div class="card h-100">
                <img src="<?php echo($salpicon["fotoUno"]) ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-black"><?php echo($salpicon["nombre1"]) ?></h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="<?php echo($salpicon["fotoDos"]) ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-black"><?php echo($salpicon["nombre2"]) ?></h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="<?php echo($salpicon["fotoTres"]) ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-black"><?php echo($salpicon["nombre3"]) ?></h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="<?php echo($salpicon["fotoCuatro"]) ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-black"><?php echo($salpicon["nombre4"]) ?></h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="<?php echo($salpicon["fotoCinco"]) ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-black"><?php echo($salpicon["nombre5"]) ?></h5>
                </div>
            </div>
        </div>
        </div>
    <?php endforeach ?>
    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>