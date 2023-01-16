<?php

    require __DIR__.'/vendor/autoload.php';

    //Dependências
    use \App\WebService\ViaCEP;

    //argumentos do PHP. a posição 0 é o nome do arquivo e podemos passar na posição 1 o cep
    /* echo"<pre>";
    print_r($argv);
    echo"</pre>"; exit; */

    //Verifica a existência do CEP no comando
    if(!isset($argv[1])){
        die("CEP não definido\n");
    }

    //Executa a consulta de CEPS
    //$dadosCEP = ViaCEP::consultarCEP("01010000");
    $dadosCEP = ViaCEP::consultarCEP($argv[1]);

    //Imprime Resultado
    print_r($dadosCEP);


?>