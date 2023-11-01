<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
require_once('vendor/autoload.php');

use tiosilvah\CnpjController;

$cnpj = new CnpjController();
$cnpj->cnpjBusca('18715383000140');
$cnpj->buscar();
var_dump($cnpj);
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CNPJ</title>
</head>
<body>
<form>
    <input type="text" value="<?= $cnpj->Nome() ?>">
    <input type="text" value="<?= $cnpj->atividadePrincipal() ?>">
    <input type="text" value="<?= $cnpj->telefone() ?>">
</form>
</body>
</html>
