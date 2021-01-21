<?php

namespace\App\Controllers;

class ComprasController
{
    public function index()
    {
        $compras = [
            ["titulo"=>"Carvão","desc"=>"5kg"],
            ["titulo"=>"Arroz","desc"=>"1kg"],
            ["titulo"=>"Cerveja","desc"=>"Latão"]
        ];

        $listaHTML = '';

        foreach ($compras as $key => $value) {
            $listaHTML .='<li>'.$value["titulo"].' - '.$value["desc"].'</li>';
        }
        $pagina = '<!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>Principal</title>
      </head>
      <body>
        <h2>Essa é a página principal</h2>
        <p>Lista de Compras</p>
        <ul>'.$listaHTML.'</ul>

      </body>
    </html>';

        return $pagina;
    }
}