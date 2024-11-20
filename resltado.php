<?php include "./head.php" ?>

<body>

    <div class="container">
         
        <h1>Calculadora PHP</h1>

        <?php
        $nu1 = $_POST['n1'];
        $nu2 = $_POST['n2'];

        if ($nu1 != "") {
            if ($nu2 != "") {
                $resut = $nu1 + $nu2;

                echo "<h2>O resultado da some é:<br><br> {$resut}</h2>";
            } else {
                echo ("<h2>Preencha os campos corretamente</h2>");
            }
        } else {
            echo ("<h2>Preencha todos os campos corretamente</h2>");
        }
        ?>
        <div class="container_a">
        <a href="./index.php" class="voltar">Realizer um novo Calculo</a>
        </div>
    </div>

</body>

</html>