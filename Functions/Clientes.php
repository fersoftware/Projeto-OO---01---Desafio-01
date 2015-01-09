<?php

class Clientes 
{
    private $id;
    private $nome;
    private $telefone;
    private $cpf;
    private $rg;

    private $endereco;
    private $bairro;
    private $cidade;
    private $estado;
    private $cep;

    public function __construct($id,$nome,$telefone,$cpf,$rg,$endereco,$bairro,$cidade,$estado,$cep)
    {
        $this->setId($id)
            ->setNome($nome)
            ->setTelefone($telefone)
            ->setCpf($cpf)
            ->setRG($rg)
            ->setEndereco($endereco)
            ->setBairro($bairro)
            ->setCidade($cidade)
            ->setEstado($estado)
            ->setCep($cep);
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getRG()
    {
        return $this->rg;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function getEstado()
    {
        return $this->estado;
    }
    
    public function getCep()
    {
        return $this->cep;
    }

    
    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        
        return $this;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        
        return $this;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        
        return $this;
    }

    public function setRG($rg)
    {
        $this->rg = $rg;
        
        return $this;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        
        return $this;
    }

    
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
        
        return $this;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        
        return $this;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
        
        return $this;
    }
    
    public function setCep($cep)
    {
        $this->cep = $cep;
        
        return $this;
    }
}


?>