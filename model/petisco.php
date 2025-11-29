<?php

//EXTENDS É USADO PARA INFORMAR QUE UMA CLASSE HERDA DE OUTRA
class Petisco extends Lanche{
    public function avisar()
    {
        return "<h1>Para meia porção será cobrado 70% do valor do Petisco</h1>";
    }
}