<?php

use PHPUnit\Framework\TestCase;
use Dcorazolla\DigitalCep\Search;

class SearchTest extends TestCase {

    /**
     * @dataProvider dadosTeste
     */
    public function testGetAddressFromZipcodeUsage(string $input, array $esperado){
        $resultado = new Search();
        $resultado = $resultado->getAddressFromZipcode($input);
        $this->assertEquals($esperado, $resultado);
    }

    public function dadosTeste(){
        return [
            "Endereço Praça da Sé" => [
                "01001000",
                [
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado ímpar",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ],
            "Endereço Chapada" => [
                "73770000",
                [
                    "cep" => "73770-000",
                    "logradouro" => "",
                    "complemento" => "",
                    "bairro" => "",
                    "localidade" => "Alto Paraíso de Goiás",
                    "uf" => "GO",
                    "ibge" => "5200605",
                    "gia" => "",
                    "ddd" => "62",
                    "siafi" => "9211"
                ]
            ]
        ];
    }


}