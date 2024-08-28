<?php
//Crie a classe Contatos
class Contatos{
    //Começo declarando as variáveis privadas p/armazenar os atributos dos contatos.
    private $nome;//variáveis no modo privado
    private $email;//variáveis no modo privado
    private $telefone;//variáveis no modo privado
    
    // Criei um método Construtor da classe que inicializa os atributos c/os valores informados.
    public function __construct($nome, $email, $telefone){
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;

    }
    //Crie uma função p/armazenar informações nos atributos.
    public function getNome(){
        //retorna o valor armazenado no atributo $nome.
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getTelefone(){
        return $this->telefone;
    }

}
?>