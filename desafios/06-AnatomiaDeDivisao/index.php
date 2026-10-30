
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Anatomia de divisão</title>
    </head>
    <body>
        <header>
            <!-- // o que faz  -->
            <h1>Aqui está o nosso calculo de divisão!</h1>
        </header>
        
        <main>
            <div>
                <form action="" method="post">
                    <!-- // perguntar o usuario o dividendo -->
                    <label for="dividendo">Digite seu dividendo: </label>
                    <input type="number"  name="dividendo" id="dividendo" required>            
                    
                    <!-- // perguntar ao usuario o divisor -->
                    <label for="divisor">Digite seu divisor: </label>
                    <input type="number"  name="divisor" id="divisor" required>            
                    
                    <input type="submit" value="!CALCULAR!">
                </form>
            </div>
            
            <div>
                <?php 
                //exibir um calcuo separado
                if(($_SERVER['REQUEST_METHOD']=="POST") && isset($_POST['divisor']) && $_POST['divisor']!=0){
                    $dividendo = $_POST['dividendo'];
                    $divisor = $_POST ['divisor'];
        

                    $quoeficiente = intdiv($dividendo, $divisor);
                    $resto = $dividendo % $divisor;
                    
                    // resultado
                    echo"<br>O seu dividendo é: $dividendo";
                    // dividendo 
                    echo"<br>O seu divisor é: $divisor";
                    // divisor
                    echo"<br>O seu quoeficiente é: $quoeficiente";
                    //quociente
                    echo"<br>O seu resto é: $resto";
                    //resto
                    }
                    ?>
        </div>
    </main>
</body>
</html>