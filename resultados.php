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
        <?php   //Genera los numeros del sorteo
            require_once 'Sorteo.php';
            $s = new Sorteo();
            $sorteo = $s->getNumeros();
        ?>
        <header>
            <h1>Sorteo de quiniela del dia de hoy</h1>
        </header>
        <div id="main_php">
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

                    if($opcion == "v"){
                        for($i=1;$i<=20;$i++){
                            if($apuesta > 99){
                                if($apuesta == $sorteo[$i]){
                                    $ganar = true;
                                }
                            }else{
                                $resto = $sorteo[$i] % 100;
                                if($resto == $apuesta){
                                    $ganar = true;
                                }
                            }                        
                        }
                    }else if($opcion == "d"){
                        for($i=1;$i<=10;$i++){
                            if($apuesta > 99){
                                if($apuesta == $sorteo[$i]){
                                    $ganar = true;
                                }
                            }else{
                                $resto = $sorteo[$i] % 100;
                                if($resto == $apuesta){
                                    $ganar = true;
                                }
                            }                        
                        }
                    }else{
                        if($apuesta == $sorteo[1]){
                            $ganar = true;
                        }
                    }
                    $win = $_POST['plata'];
                    if($ganar){
                        echo "<br>Felicitaciones!!!! acertaste con el $apuesta<br>";
                        if($opcion == "v"){
                            $win *= 3;
                        }else if($opcion == "d"){
                            $win *= 7;
                        }else{
                            $win *= 15;
                        }
                        
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