<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Operações</title>

<style>
input, select {
    padding: 10px;
    margin: 5px;
}
</style>

</head>
<body>

<?php
$num01 = filter_input(INPUT_POST, "txtNumero1");
$num02 = filter_input(INPUT_POST, "txtNumero2");
$opera = filter_input(INPUT_POST, "slOperacao");
$resul = "";

if(isset($_POST["btnCalcular"])) {
    if($num01 !== null && $num02 !== null) {
        switch($opera) {
            case "Adição":
                $resul = ($num01 + $num02);
                break;
            case "Subtração":
                $resul = ($num01 - $num02);
                break;
            case "Multiplicação":
                $resul = ($num01 * $num02);
                break;
            case "Divisão":
                if ($num02 != 0) {
                    $resul = ($num01 / $num02);
                } else {
                    $resul = "Erro: Divisão por zero.";
                }
                break;
            default:
                $resul = "Operação inválida";
                break;
        }
    } else {
        $resul = "Por favor, insira ambos os números.";
    }
}
?>

<h1><?=$resul;?></h1>

<form method="post">
    <label>Número 1: <input type="text" name="txtNumero1" /></label><br>
    <label>Número 2: <input type="text" name="txtNumero2" /></label><br>
    <label>Operação:
        <select name="slOperacao">
            <option value="Adição">Adição</option>
            <option value="Subtração">Subtração</option>
            <option value="Multiplicação">Multiplicação</option>
            <option value="Divisão">Divisão</option>
        </select>
    </label>
    <input type="submit" name="btnCalcular" value="Calcular" />
</form>
</body>
</html>