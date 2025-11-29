<?php

class Lanche
{

    //Atributos
    private $nome;
    private $ingredientes;
    private $preco;

    //Construtor

    public function __construct($nome, $ingredientes, $preco)
    {
        $this->nome = $nome;
        $this->ingredientes = $ingredientes;
        $this->preco = $preco;

    }


    //Gets e Sets
    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of ingredientes
     */
    public function getIngredientes()
    {
        return $this->ingredientes;
    }

    /**
     * Set the value of ingredientes
     *
     * @return  self
     */
    public function setIngredientes($ingredientes)
    {
        $this->ingredientes = $ingredientes;

        return $this;
    }


    //Métodos
    public function cadastrar()
    {
        if (strlen($this->ingredientes) > 0)
            return true;
        else
            return false;
    }

    //Métodos Estáticos
    public static function informar()
    {
        return "<h1>Nossos lanches são servidos de acordo com as indicações no cardápio. 
        Para retirar algum item, solicite ao garçom. </h1>";
    }
}