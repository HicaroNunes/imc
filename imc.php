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
        <h>Seu IMC</h2>
            <?php 
                $altura = $_POST["altura"];
                $peso = $_POST["peso"];
                $genero = $_POST["genero"];
                $alturaform = $altura = str_replace(',', '.', $altura);
                $pesoform = $peso = str_replace(',', '.', $peso);
        //echo $alturaform;
        //echo $peso;
        //echo $altura;

                $imc = $pesoform / ($alturaform * 2);
        //echo number_format($imc, 2, '.', '')
        
                    if  ($imc <= 16.9 && $genero == "Masculino") { 
                        echo "Seu Imc é: " . number_format($imc, 2, '.', '');
                        echo "</br> Vocé está muito abaixo do peso!";
                    } elseif ($imc >= 17.0 && $imc <= 18.4 && $genero == "Masculino" ) {
                        echo "Seu Imc é: " . number_format($imc, 2, '.', '');
                        echo "</br> Vocé está abaixo do peso!";
                    } elseif ($imc >= 18.5 && $imc <= 24.9 && $genero == "Masculino") {
                        echo "Seu Imc é: " . number_format($imc, 2, '.', '');
                        echo "</br> Vocé está no peso ideal!";
                    } elseif ($imc >= 25.0 && $imc <= 29.9 && $genero == "Masculino") {
                        echo "Seu Imc é: " . number_format($imc, 2, '.', '');
                        echo "</br> Vocé está acima do peso!";
                    } elseif ($imc >= 30.0 && $imc <= 34.9 && $genero == "Masculino") {
                        echo "Seu Imc é: " . number_format($imc, 2, '.', '');
                        echo "</br> Obesidade grau I";
                    } elseif ($imc >= 35.0 && $imc <= 39.9 && $genero == "Masculino") {
                        echo "Seu Imc é: " . number_format($imc, 2, '.', '');
                        echo "</br> Obesidade grau II(severa)";
                    } elseif ($imc >= 40. && $genero == "Masculino"){
                        echo "Seu Imc é: " . number_format($imc, 2, '.', '');
                        echo "</br> Obesidade grau III(Mórbida)";
                    } elseif  ($imc <= 16.9 && $genero == "Feminino") { 
                        echo "Seu Imc é: " . number_format($imc, 2, '.', '');
                        echo "</br> Vocé está muito abaixo do peso!";
                    } elseif ($imc >= 17.0 && $imc <= 18.9 && $genero == "Feminino" ) {
                        echo "Seu Imc é: " . number_format($imc, 2, '.', '');
                        echo "</br> Vocé está abaixo do peso!";
                    } elseif ($imc >= 19.0 && $imc <= 23.9 && $genero == "Feminino") {
                        echo "Seu Imc é: " . number_format($imc, 2, '.', '');
                        echo "</br> Vocé está no peso ideal!";
                    } elseif ($imc >= 24.0 && $imc <= 28.9 && $genero == "Feminino") {
                        echo "Seu Imc é: " . number_format($imc, 2, '.', '');
                        echo "</br> Vocé está acima do peso!";
                    } elseif ($imc >= 29.0 && $imc <= 33.9 && $genero == "Feminino") {
                        echo "Seu Imc é: " . number_format($imc, 2, '.', '');
                        echo "</br> Obesidade grau I";
                    } elseif ($imc >= 34.0 && $imc <= 38.9 && $genero == "Feminino") {
                        echo "Seu Imc é: " . number_format($imc, 2, '.', '');
                        echo "</br> Obesidade grau II(severa)";
                    } else {
                        echo "Seu Imc é: " . number_format($imc, 2, '.', '');
                        echo "</br> Obesidade grau III(Mórbida)";
                    }
                    
            ?>
    </main>
</body>
</html>