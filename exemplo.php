<?php

require("vendor/autoload.php");

use Dcorazolla\DigitalCep\Search;

$busca = new Search();

$resultado = $busca->getAddressFromZipcode("73770000");

print_r($resultado);