
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Convertor de moeda</title>
    </head>
    <body>
        <header>
            // oq ue o programa faz
            <h1>Conversor de moeda</h1>
        </header>
        <main>
            <div>
                <form action="" method="post">
                    <!-- // perguntar o usuario o valor em real -->
                    <!-- //o usuario vai inserir o valor -->
                    <label for="valor">Digite seu valor em R$: <br></label>
                    <!-- //exibir o valor em real para dolar -->
                    <input type="number"  step="0.01" name="valor" id="valor" required>
                    
                    <label for="moeda"><br>Digite o valor da moeda desejada: <br></label>
                    <input type="number" step="0.01" name="moeda" id="moeda" required>
                    <br>
                    <input type="submit" value="Converter!">
                </form>
            </div>
            
            <div>
                <?php 
                    //converter o valor inserido para outro valor inserido pelo usuario
                    if($_SERVER['REQUEST_METHOD']=="POST"){
                        $valor = $_POST['valor'];
                        $moeda = $_POST['moeda'];
                        $conversor = $valor * $moeda;
                        
                        //exibir o valor convertido
                        echo "Aqui está a sua conversão:  <br>". number_format( $conversor, 2, ',','.');
                        
                    }
                ?>
        </div>
    </main>
</body>
</html>