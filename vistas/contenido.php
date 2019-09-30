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