
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Analisador de numero reais</title>
    </head>
    <body>
        <header>
            
            <h1>Analisador de Numeros</h1>
        </header>
        <main>
            <div>
                <form action="" method="post">
                    <!-- //pedir ao usuario digitar um numero -->
                    <label for="num">Digite um valor para ser analisado: <br></label>
                    <!-- //o usuarii digita o numero -->
                    <input type="number"  step="0.001" name="valor" id="valor" required>
                    
                    <!-- //ter um botao para o programa analisar -->
                    <input type="submit" value="analisar">
                </form>
        </div>
        
        <div>
            <?php 
                //exibir uma analise
                if($_SERVER['REQUEST_METHOD']=="POST"){
                $valor = $_POST['valor'];

                list ($inteiro, $fracionario) = explode ('.',$valor);

                echo "Seu numero inteiro é : ". $inteiro;

                echo "<br>Seu neumero fracionado é: ". $fracionario;

                }
            ?>
        </div>
    </main>
</body>
</html>