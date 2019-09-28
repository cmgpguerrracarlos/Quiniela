<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Quiniela Resultados</title>
</head>
<body>
    <div id="main">
        <header>
            <h1>Sorteo de quiniela del dia de hoy</h1>
        </header>
        <div id="main_php">
            <?php   //Genera los numeros del sorteo
                require_once 'Sorteo.php';
                $s = new Sorteo();
                $sorteo = $s->getNumeros();
            ?>
            <div id="php1"> 
                <?php   //Muestas los primeros 10 numeros
                    for($n=1; $n<=10; $n++){
                        echo $n." -- ".Sorteo::convertir($sorteo[$n]) . "<br>"; 
                    }
                ?>
            </div>

            <div id="php2">
                <?php   //Muestras del 11 al final
                    for($n=11; $n<=20; $n++){
                        echo $n." -- ".Sorteo::convertir($sorteo[$n]) . "<br>"; 
                    }
                ?>
            </div>    
            <div id="php3">
                <?php   //Muestra el resultado si gano o no y el monto ganado
                    $apuesta = $_POST['apuesta'];
                    $opcion = $_POST['opcion'];
                    $ganar = false;

                    $dividendo = $s->verificador($apuesta, $opcion);
                    $win = $_POST['plata'];

                    if($dividendo != 0){
                        echo "<br>Felicitaciones!!!! acertaste con el $apuesta<br>";
                        $win *=$dividendo;
                        echo "Has ganado $win pesos";
                    }else{
                        echo "<br>Has perdido tus $win con el $apuesta";
                    }
                ?>
            </div> 
            <form action="index.php" method="POST" name="ver">
                <input type="submit" name="boton" value="volver">
            </form>
        </div>
    </div>
</body>
</html>