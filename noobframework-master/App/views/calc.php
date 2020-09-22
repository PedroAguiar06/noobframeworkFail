
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/calc.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Controllers/calc.php">
    <title>Document</title>
</head>
<body>
    <p>era pra esse ser o .html, no entanto <br> não sei interligar com o .php</p>

    <div class="calc">
        
        <form action="" method="post" action="../Controllers/calc.php">
            

            <div class="calc-1" id="calc">
                <h1>Cálculo</h1>

            
                <h2>Cálculo de Delta</h2>

                    <p>Fórmula b²-4.a.c</p>
                    <a href="index.html">Voltar</a><br>

                    <label for=""> Valor de a: </label>
                    <input type="number" name="va"> <br>

                    <label for=""> Valor de b: </label>
                    <input type="number" name="vb"> <br>

                    <label for=""> Valor de c: </label>
                    <input type="number" name="vc"> <br>
                    
                    <input type="submit" name="result">
                    <label class="lb1" for="" name="most1">Resultado:</label>
                    <?php
                    // function Calculadora()
                    // {
                    function delta(){
                        $a = $_POST ['va'];
                        $b = $_POST ['vb'];
                        $c = $_POST ['vc'];
                        $x = $_POST ['result'];
                        
                        $x = ($b*$b)-4*$a*$c;
                        if($x > 0)
                        {
                            $rq = sqrt($x);
                            echo "A raíz de $x é igual a $rq";
                                
                        }        
                        return $x;
                    
                    }
                    echo delta();

                    ?>

            </div>
            
        </form>
    </div>
</body>
</html>

