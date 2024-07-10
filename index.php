//01 Calcular e exibir a pontuação total das quatro notas do aluno.

<?php
$nota1 = 8;
$nota2 = 7;
$nota3 = 9;
$nota4 = 6;

$total = $nota1 + $nota2 + $nota3 + $nota4;
echo "A pontuação total das quatro notas é: $total";
?>

//02 Calcular e exibir a média das quatro notas do aluno.

<?php
$nota1 = 8;
$nota2 = 7;
$nota3 = 9;
$nota4 = 6;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
echo "A média das quatro notas é: $media";
?>

//03 Calcular e exibir a área do retângulo em metros quadrados.

<?php
$largura = 5; // em metros
$altura = 10; // em metros

$area = $largura * $altura;
echo "A área do retângulo é: $area metros quadrados";
?>

//04 Informar a diferença entre dois valores diferentes.

<?php
$valor1 = 15;
$valor2 = 7;

$diferenca = $valor1 - $valor2;
echo "A diferença entre os dois valores é: $diferenca";
?>

//05 Calcular e exibir a divisão do primeiro valor pelo segundo.

<?php
$valor1 = 20;
$valor2 = 4;

if ($valor2 != 0) {
    $divisao = $valor1 / $valor2;
    echo "A divisão do primeiro valor pelo segundo é: $divisao";
} else {
    echo "Divisão por zero não é permitida.";
}
?>

//06 Calcular e mostrar o peso em gramas. 

<?php
$pesoKg = 70; // peso em quilos

$pesoGramas = $pesoKg * 1000;
echo "O peso em gramas é: $pesoGramas gramas";
?>

// 07 Calcular o valor a pagar no self- service.-

<?php
$temperaturaF = 100; // temperatura em Fahrenheit

$temperaturaC = ($temperaturaF - 32) / 1.8;
echo "A temperatura em Celsius é: $temperaturaC °C";
echo "A temperatura em Fahrenheit é: $temperaturaF °F";
?>

// 08 Converter Fahrenheit para Celsius.

<?php
$temperaturaF = 100; // temperatura em Fahrenheit

$temperaturaC = ($temperaturaF - 32) / 1.8;
echo "A temperatura em Celsius é: $temperaturaC °C";
echo "A temperatura em Fahrenheit é: $temperaturaF °F";
?>

// 09 Calcular diâmetro, comprimento  e área da circunferência.

<?php
$raio = 7;

$diametro = 2 * $raio;
$comprimento = 2 * pi() * $raio;
$area = pi() * pow($raio, 2);

echo "O diâmetro da circunferência é: $diametro";
echo "O comprimento da circunferência é: $comprimento";
echo "A área da circunferência é: $area";
?>

// 10 Inverter os valores de duas variáveis e exibir. 

<?php
$a = 5;
$b = 10;

echo "Valores antes da troca: a = $a, b = $b\n";

$temp = $a;
$a = $b;
$b = $temp;

echo "Valores após a troca: a = $a, b = $b";
?>


