<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de IMC</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
 <main>
    <form id="form" action="imc.php"method="POST">
        <h2 id="tittle">Indice de massa corporal</h2>
        <h3>Digite a altura</h2>
        <input id="box" type="number" name="altura" id="altura" placeholder=" ex:1,80" step="0.01">
        <h3>Digite o peso</h2>
        <input id="box" type="number" name="peso" id="peso" placeholder=" ex:80">
        <br></p>
        <input id="button" type="submit" value="Calcular">
    </form>

 </main>   
</body>
</html>