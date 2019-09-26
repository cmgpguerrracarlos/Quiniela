<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Quiniela</title>
</head>
<body>
    <div id="main">
        <header>
            <h1>Sorteo de quiniela del dia de hoy</h1>
        </header>
        <div id="main_php">
            <p>Ingrese numero y apuesta en pesos</p>
            <form action="resultados.php" method="POST" name="ver">
                <div class = "botones">
                    Numero:<input type="text" name="apuesta" > 
                    Apuesta:<input type="text" name="plata" ><br><br>
                    <input type="radio" name="opcion"  value="v" checked > Entre los 20<br>
                    <input type="radio" name="opcion" value="d">  Entre los 10<br>
                    <input type="radio" name="opcion" value="c"> El 1er
                </div>
                <br><br>
                <input type="submit" name="submit" value="apostar">
            </form>
        </div>
    </div>
</body>
</html>