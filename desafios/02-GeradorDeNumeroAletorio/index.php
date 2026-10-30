<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gerador de numero aleatorio</title>
    </head>
    <body>
        <header>
         <!-- o que faz -->
        <h1>Aqui é o meu sorteador de senha</h1>
    </header>
    <main>
        <div>
                <form action="" method="post">
                    
                    <label for="min">Digite um numero minimo para o sorteador começar: <br></label>
                    <input type="number" name="min" id="min" required>
                    
                    <label for="max"><br>Digite um numero maximo para o sortador contar: <br></label>
                    <input type="number" name="max" id="" required>
                    
                    <button type="submit" name="sortear">Sortear Número </button>
                </form>
        </div>
        <div>
            <?php 
                if($_SERVER['REQUEST_METHOD']=="POST"){
                    $minimo = $_POST['min'];  
                    $maximo = $_POST['max'];

                    $sortear=rand($minimo,$maximo);

                    echo "Seu numero sorteado foi: $sortear";
                }  
            ?>
        </div>
    </main>
</body>
</html>