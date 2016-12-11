<?php

    class ContatoController
    {
        private $contatoModel;

        private $contatoDAO;

        function __construct()
        {

            $this->contatoModel = new ContatoModel();

            $this->contatoDAO = new ContatoDAO();
        }

        public function editarAction(){

        }

        public function listarAction(){

            $sites = array();

            $sites = $this->contatoDAO->listar();

            include_once "views/contato/listar.php";

        }

        public function selecionarAction($id){

        }

        public function excluirAction(){

        }

        public function cadastrarAction(){

        }
    }
?>