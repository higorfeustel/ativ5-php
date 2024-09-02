<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id="fundo">
        <form method="POST">
            <div id="centro">
                <label class="texto"> Insira o valor da base: </label>
                <input type="text" id="base" name="base" step="0.01" required> 
                <label class="texto"> Insira o valor da altura:</label>
                <input type="text" id="altura" name="altura" step="0.01" required>
                <button type="submit" name="enviar">Enviar</button>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['enviar'])){
                $base = $_POST['base'];
                $altura = $_POST['altura'];
                $area = ($base*$altura)/2;
                echo '<p class="resultado"> A área do triângulo é ' . $area . '</p>'; 
                if($area > 100){
                    echo '<p class="resultado"> A área do triângulo é maior que 100.' . '</p></div></form></div>'; 
                } elseif ($area == 100){
                    echo '<p class="resultado"> A área do triângulo é igual a 100.' . '</p></div></form></div>'; 
                } else {
                    echo '<p class="resultado"> A área do triângulo é menor que 100.' . '</p></div></form></div>'; 
                }
                }
            }
    ?>
</body>
</html>