## cnpj_receitaws

## Instalação:

O projeto está disponível no Packagist, onde para fazer a instalação via Composer basta apenas adicionar ao arquivo
composer.json do seu projeto:

"require": {
"cesarferreira/cnpj-receitaws" : "dev-main"
}

# Obs:

É necessário ter o curl instalado (em sistemas operacionais linux, por exemplo). E nos demais ter as extensões
extension=curl.so extension=curl ativados no arquivo ini do seu php. Como aplicar os procedimentos de acordo com seu
sistema operacional

## Como usar:

Instanciar a classe

> arquivo index.php:

<?php

    require 'vendor/autoload.php';

    use cnpj-redeitaws\Cnpj;

    $cnpj= new Cnpj();
    $cnpj->cnpjBusca('21416530000195');
    $cnpj->buscar();

?>

> Exemplo de retorno dos dados nos values dos inputs de um form:

<body>
    <form>
        <input type="text" value="<?php echo $cnpj->Nome(); ?>">
        <input type="text" value="<?php echo $cnpj->atividadePrincipal(); ?>">    
        <input type="text" value="<?php echo $cnpj->telefone(); ?>">
    </form>  
</body>