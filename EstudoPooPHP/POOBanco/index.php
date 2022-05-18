<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body><pre>
    <?php
        require_once '../POOBanco/ContaBanco.php';
        $pessoa1 = new ContaBanco();
        $pessoa2 = new ContaBanco();
        $pessoa1->abrirConta("CC");
        $pessoa1->setnumConta(1111);
        $pessoa1->setdonoConta("Matheus");
        $pessoa1->depositar(300);
        $pessoa2->abrirConta("CP");
        $pessoa2->setnumConta(2222);
        $pessoa2->setdonoConta("Camila");
        $pessoa2->depositar(500);
        $pessoa2->sacar(90);
        $pessoa1->fecharConta();
        $pessoa2->sacar(560);
        $pessoa2->fecharConta();



        print_r ($pessoa1);
        print_r ($pessoa2);
    ?>
</body></pre>
</html>