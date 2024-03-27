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
            <form id="form" action=""> <h2 id="tittle">Seu IMC</h2>
                <?php 
                    $nome = $_POST["nome"];
                    $data = $_POST["nasc"];
                    $altura = $_POST["altura"];
                    $peso = $_POST["peso"];
                    $genero = $_POST["genero"];
                    $alturaform = $altura = str_replace(',', '.', $altura);
                    $pesoform = $peso = str_replace(',', '.', $peso);
        //echo $alturaform;
        //echo $peso;
        //echo $altura;
                        list($ano, $mes, $dia) = explode('-', $data);
                        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                        $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
                        $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
                        $imc = $pesoform / ($alturaform * 2);
                        

                        //Visualização
                        echo $nome . "</br>" . $idade . " anos." . "</br>" . "Sexo: " . $genero . "</br>";

                    
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
            </form>
    </main>
</body>
</html>