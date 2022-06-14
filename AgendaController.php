<?php


class AgendaController extends Controller
{
  

    /**
     * Lista os compromissos da agenda
     */
    public function listar()
    {
        $agenda = Agenda::all();
        return $this->view('gradeagenda', ['agenda' => $agenda ]);
    }

    /**
     * Mostrar USUARIO e contatos no formulario agenda
     */
    public function criar()
    {
        $conexao = Conexao::getInstance();
        /* consulta para obter os usuairos*/
        $stmt    = $conexao->prepare("SELECT * FROM usuario;");
        $stmt    -> execute();
        $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
        /* consulta para obter os contatos*/
        $stmt    = $conexao->prepare("SELECT * FROM contatos;");
        $stmt    -> execute();
        $contato = $stmt->fetchAll(PDO::FETCH_ASSOC);

       
        return $this->view('formagenda',['usuario' => $usuario , 'contato' => $contato]);
    }

    /**
     * Mostrar formulário para editar um Agenda
     */
    public function editar($dados)
    {
        $conexao = Conexao::getInstance();
        /* consulta para obter os usuairos*/
        $stmt    = $conexao->prepare("SELECT * FROM usuario;");
        $stmt    -> execute();
        $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
        /* consulta para obter os contatos*/
        $stmt    = $conexao->prepare("SELECT * FROM contatos;");
        $stmt    -> execute();
        $contato = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $id      = (int) $dados['id'];
        $agenda= Agenda::find($id);

        return $this->view('formagenda', ['agenda' => $agenda, 'usuario' => $usuario , 'contato' => $contato]);
    }

    /**
     * Salvar o compromisso
     */
    public function salvar()
    {
        $agenda           = new Agenda;
        $agenda->contato =     $this->request->contato;
        $agenda->usuario =     $this->request->user;
        $agenda->dtcom =       $this->request->data;
        $agenda->compromisso = $this->request->comp;
        $agenda->importante =  $this->request->importante;
        if ($agenda->save()) {
            return $this->listar();
        }
    }

    /**
     * Atualizar o Usuario conforme dados submetidos
     */
    public function atualizar($dados)
    {
        $id                = (int) $dados['id'];
        $agenda           = Agenda::find($id);
        $agenda->usuario  = $this->request->nome;
        $agenda->senha    = $this->request->senha;
        $agenda->email    = $this->request->email;
        $agenda->save();

        return $this->listar();
    }

    /**
     * Apagar o compromisso
     */
    public function excluir($dados)
    {
        $id      = (int) $dados['id'];
        $agenda = Agenda::destroy($id);
        return $this->listar();
    }
}