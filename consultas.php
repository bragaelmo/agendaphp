<?php

/**
 * Classe Usuario - baseado no modelo Active Record (Simplificado) 
 * @author Alexandre Bezerra Barbosa
 */
class Consultas
{
    private $atributos;

    public function __construct()
    {

    }

    public function __set(string $atributo, $valor)
    {
        $this->atributos[$atributo] = $valor;
        return $this;
    }

    public function __get(string $atributo)
    {
        return $this->atributos[$atributo];
    }

    public function __isset($atributo)
    {
        return isset($this->atributos[$atributo]);
    }


    /**
     * Retorna uma lista de usuario
     * @return array/boolean
     */
    public static function retornauser()
    {
        $conexao = Conexao::getInstance();
        $stmt    = $conexao->prepare("SELECT * FROM usuario;");
        $result  = array();
        if ($stmt->execute()) {
            while ($rs = $stmt->fetchObject(Consultas::class)) {
                $result[] = $rs;
            }
        }
        if (count($result) > 0) {
            return $result;
        }
        return false;
    }

        /**
     * Retorna uma lista de contatos
     * @return array/boolean
     */
    public static function retornacontato()
    {
        $conexao = Conexao::getInstance();
        $stmt    = $conexao->prepare("SELECT * FROM contato;");
        $result  = array();
        if ($stmt->execute()) {
            while ($rs = $stmt->fetchObject(Consultas::class)) {
                $result[] = $rs;
            }
        }
        if (count($result) > 0) {
            return $result;
        }
        return false;
    }

}