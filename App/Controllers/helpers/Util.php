<?php

namespace App;

class Util
{
    public static function trataValor($valor) /* insere o formato de reais, nos valores */
    {
        return "R$ ".number_format($valor,2,',','.');
    }
}