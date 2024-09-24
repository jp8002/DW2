
<?php
    require 'pessao.php';

    class aulaV{

        public static $id;
        public $quantidade = 0;
        public $professor;
        public $alunos = [];
        public $acesso; 



        public function mostrar_participantes(){
            var_dump($this->alunos,$this->professor;);
        } 

        public function ad_aluno($nome,$idade,$cpf,$sexo){
            $this->alunos = new pessoa();
            $this->alunos[$this->quantidade]->registrar($nome,$idade,$cpf,$sexo);

        }

        public function __construct($acesso){
            $this->id++;
            $this->acesso;
        }
    }





?>