<?php 

//CRUD
class RegistroService {

    private $conexao;
    private $sistole;
    private $diastole;
    private $responsavel;

    public function __construct(Conexao $conexao, Registro $sistole, Registro $diastole, Registro $responsavel) {
        $this->conexao = $conexao->conectar();
        $this->sistole = $sistole;
        $this->diastole = $diastole;
        $this->responsavel = $responsavel;
    }

    public function inserir() { //create
        $query = 'insert into tb_registropa(sistole, diastole, responsavel)values(:sistole, :diastole, :responsavel)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':sistole', $this->sistole->__get('sistole'));
        $stmt->bindValue(':diastole', $this->diastole->__get('diastole'));
        $stmt->bindValue(':responsavel', $this->responsavel->__get('responsavel'));
        $stmt->execute();
    }

    public function recuperar() { //read
        $query = 'select * from tb_registropa';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchall(PDO::FETCH_OBJ);
    }

    public function atualizar() { //update
        //
    }

    public function remover() { //delete
        //
    }
}