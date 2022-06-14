<?php

class UsuarioController extends Controller
{

    /**
     * Lista os usuários
     */
    public function listar()
    {
        $usuario = Usuario::all();
        return $this->view('gradeuser', ['usuario' => $usuario]);
    }

    /**
     * Mostrar formulario para criar um novo Usuario
     */
    public function criar()
    {
        return $this->view('formuser');
    }

    /**
     * Mostrar formulário para editar um Usuario
     */
    public function editar($dados)
    {
        $id      = (int) $dados['id'];
        $usuario= Usuario::find($id);

        return $this->view('formuser', ['usuario' => $usuario]);
    }

    /**
     * Salvar o Usuario submetido pelo formulário
     */
    public function salvar()
    {
        $usuario           = new Usuario;
        $usuario->usuario     = $this->request->nome;
        $usuario->senha    = $this->request->senha;
        $usuario->email    = $this->request->email;
        if ($usuario->save()) {
            return $this->listar();
        }
    }

    /**
     * Atualizar o Usuario conforme dados submetidos
     */
    public function atualizar($dados)
    {
        $id                = (int) $dados['id'];
        $usuario           = Usuario::find($id);
        $usuario->usuario  = $this->request->nome;
        $usuario->senha    = $this->request->senha;
        $usuario->email    = $this->request->email;
        $usuario->save();

        return $this->listar();
    }

    /**
     * Apagar um Usuairoconforme o id informado
     */
    public function excluir($dados)
    {
        $id      = (int) $dados['id'];
        $usuario = Usuario::destroy($id);
        return $this->listar();
    }
}