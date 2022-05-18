<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 02 - POO</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Caneta.php';
            $caneta1 = new Caneta("BIC", "Azul" , 1.0);
            $caneta2 = new Caneta("FC", "Verde", 0.5);
            print_r ($caneta1);
            print_r ($caneta2);
            /*$caneta1->setModelo("BIC");
            $caneta1->setPonta(0.5);
            print "Eu tenho uma caneta {$caneta1->getModelo()} de ponta {$caneta1->getPonta()}";

            /*$caneta1->cor = "Azul";
                $caneta1->ponta = 0.5;
                $caneta1->tampada = true;
                $caneta1->carga = 100;


                $caneta1->tampar();
                $caneta1->rabiscar();

                print_r($caneta1);
                echo "<br></br>";
                $caneta2 = new Caneta;
                $caneta2->cor = "Verde";
                $caneta2->ponta = 1.0;
                $caneta2->tampada = true; 
                $caneta2->carga = 50;

                $caneta2->destampar();
                $caneta2->rabiscar();
                print_r($caneta2);
                    */

        ?>
    </pre>
</body>
</html>