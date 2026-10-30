
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Analise de salario</title>
    </head>
    <body>
        <header>
            // oq faz
            <h1>Analise de salario</h1>
            <h4>Considerando o salario de <strong>$1.621,00</strong></h4>
        </header>
        
        <main>
            <div>
                <form action="" method="post">
                    // perugnta o salario
                    <label for="salario">Coloque um salario: </label>
                    <input type="number"   step="0.01"  name="salario" id="salario" required>             
                    
                    <input type="submit" value="Analiar">
                </form>
            </div>
            
            <div>
                <?php 
                if($_SERVER['REQUEST_METHOD']=="POST"){
                    $salarioMin= 1621.00;
                    $salario=$_POST['salario'];
                    //exibir o salario fixo a ser comparado
                    echo "O salario que foi contabilizado: $salario<br>";
                    
                    //mostrar  o resultado de qunatos salarios o usuario ganha
                    $quantidade = intdiv($salario,$salarioMin);
                    
                    //mostrar o quanto sobra
                    $sobra = $quantidade % $salarioMin;

                    echo "<br>O salario digitado representa esta quantidade de salarios minimos: $quantidade";
                    echo "<br>O salario digitado tem essa sobra: $sobra";
                }

            
            ?>

        </div>
    </main>
</body>

</html>