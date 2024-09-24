<?php
    class pessoa{
        public $nome;
        public $idade;
        private $cpf;
        protected $sexo;


        function registrar_pf($cpf2){
           $this->cpf = $cpf2;
        }

        function registrar($nome,$idade,$cpf,$sexo){

            $this->nome = $nome;
            $this->idade = $idade;
            $this->cpf = $cpf;
            $this->sexo = $sexo;

        }
    }

    $p1 = new pessoa();
    $p2 = new pessoa();
    $p3 = new pessoa();
    $p4 = new pessoa();
    $p5 = new pessoa();


    $p1->nome= "Paulo";
    $p1->idade = 20;
    $p1->registrar_pf("7898786765465");
    var_dump($p1);

    $p2->registrar("Clara",21,"12358978","F");
    $p3->registrar("Kurtz",36,"45632132","M");
    $p4->registrar("Tomas",18,"64423454","M");
    $p5->registrar("Laura",45,"54423132","F");

    var_dump($p2);
    var_dump($p3);
    var_dump($p4);
    var_dump($p5);







?>