<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'ContaBanco.php';
            $p1 = new ContaBanco();  //Jubileu
            $p2 = new ContaBanco();  //Creusa   
            $p1->abrirConta("Cc");
            $p1->setNumConta(1245);
            $p1->setTitular("Jubileu");
            $p1->depositar(5000);
            $p2->abrirConta("Cp");
            $p2->setNumConta(2214);
            $p2->setTitular("Creusa");
            $p2->depositar(2000);
            $p1->pagarMensalidade();
            $p2->pagarMensalidade();
            $p2->pagarMensalidade();
            $p2->sacar(2000);
            //$p2->sacar(1000);
            //$p1->fecharConta();
            //$p2->fecharConta();
            
            print_r($p1);
             
            print_r($p2);
        ?> 
        </pre>
    </body>
</html>
