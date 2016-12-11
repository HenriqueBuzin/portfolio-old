<?php

    class SitesController
    {
        private $sitesModel;

        private $sitesDAO;

        function __construct()
        {

            $this->sitesModel = new SitesModel();

            $this->sitesDAO = new SitesDAO();
        }

        public function editarAction(){

        }

        public function listarAction(){

            $sites = array();

            $sites = $this->sitesDAO->listar();

            include_once "views/sites/listar.php";

        }

        public function selecionarAction($id){

        }

        public function excluirAction(){

        }

        public function cadastrarAction(){

        }

    }

?>