<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculo de Consumo de Combustível</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
       <main>
<div class="painel">
<h2>Instruções</h2>
<div class="conteudo-painel">
<p>Esta aplicação tem como finalidade demonstrar os valores que
					serão gastos com combustível durante uma viagem, com base no
				consumo do seu veículo, e com a distância determinada por você!</p>
				<p>Os combustíveis disponíveis para este cálculo são:</p>

                <ul>
                <li><b>Álcool</b></li>
                <li><b>Diesel</b></li>
                <li><b>Gasolina</b></li>
                </ul>
</div>
</div>

<div class="painel">
<h2>Cálculo do valor (R$) do consumo</h2>
<div class="conteudo-painel">
    <form action="calculo.php" method="post">
    
    <label for="distancia">Distância em Quilômetros a ser percorrida</label>
    <input type="number" name="distancia" class= "campoTexto" required>

    <label for="autonomia">Consumo de combustível do veículo (Km/l)</label>
    <input type="number" name="autonomia" class = "campoTexto" required>

    <button type="submit" class = "botao"> Calcular</button>
    </form>
</div>
</div>
       </main>

    </body>
</html>
