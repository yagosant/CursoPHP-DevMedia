<?php

//função para pular linha
function pulaLinha(){
 
   echo "</br>";
}

//verifica se tem valor no post
if($_POST){
    //recebendo as informações de um form
$distancia = $_POST['distancia'];
$autonomia = $_POST['autonomia'];

$valorGasolina = 4.80;
  $valorAlcool   = 3.80;
  $valorDiesel   = 3.90;

  $mensagem = "";

//verifica se eles são numericos
if(is_numeric($distancia) && is_numeric($autonomia)){

    //verifica se eles são maiores que zero
    if($autonomia > 0 && $distancia > 0 ){
  

  $consumoGasolina = ($distancia / $autonomia ) * $valorGasolina;
  $consumoGasolina = number_format($consumoGasolina,2, ',','.');
  $consumoAlcool   = ($distancia / $autonomia ) * $valorAlcool;
  $consumoAlcool = number_format($consumoAlcool,2,',','.');
  $consumoDiesel   = ($distancia / $autonomia ) * $valorDiesel;
  $consumoDiesel = number_format($consumoDiesel,2, ',','.');


    $mensagem.= "<div class='sucesso'>";
            $mensagem.= "O valor total gasto será de:";
            pulaLinha();
			$mensagem.= "<ul>";
			$mensagem.= "<li><b>Gasolina:</b> R$ ".$consumoGasolina."</li>";
			$mensagem.= "<li><b>Álcool:</b> R$ ".$consumoAlcool."</li>";
			$mensagem.= "<li><b>Diesel</b>: R$ ".$consumoDiesel."</li>";
			$mensagem.= "</ul>";
            $mensagem.= "</div>";
            
    }else{
        $mensagem.= "<div class='erro'>";
        $mensagem.= "<b>O valor da distância e da autonomia deve ser maior que zero.</b>";
        $mensagem.= "</div>";
    }

}else{
    $mensagem.= "<div class='erro'>";
    $mensagem.= "<b>O valor recebido não é numérico</b>";
    $mensagem.= "</div>";
}

  
}else{
    $mensagem = "<div class='erro'>";
	$mensagem.= "<b>Nenhum dado foi recebido pelo formulário</b>";
	$mensagem.= "</div>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Consumo de Combustível</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main>
		<div class="painel">
			<h2>Resultado do cálculo de consumo</h2>
			<div class="conteudo-painel">
				<?php
				echo $mensagem;
				?>
				<a class="botao" href="index.php">Voltar</a>
			</div>
		</div>
	</main>
    
</body>
</html>