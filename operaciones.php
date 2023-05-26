<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacion suma y resta</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>"method="post">
    <fieldset>
        <legend>Calculo de operaciones</legend>
        <label for="">
            Ingrese el primer valor:<input type="number" name="Num1"><br><br>
            Ingrese el segundo valor:<input type="number" name="Num2"><br><br>
            <select name="operacion">
                <option>Suma</option>
                <option>Resta</option>
                
            </select><br><br>
            <input type="submit" name="enviar" value="Calcular">
        </label>
    </fieldset>
</form>
    
</body>
</html>

<?php
if(isset($_POST['enviar'])){
    $num1=$_POST['Num1'];
    $num2=$_POST['Num2'];
    $operacion=$_POST['operacion'];
    $resp=0;
    $resp2=0;
    if($operacion=="Suma") {
        $resp=$num1+$num2;
        echo "la suma de $num1 + $num2 el resultado es: $resp";
    }else if($operacion=="Resta"){
        $resp=$num1-$num2;
        echo "la resta de $num1 - $num2 el resultado es: $resp";
    }
}

?>