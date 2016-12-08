<?php

    class SiteController
    {
        private $siteModel;

        private $siteDAO;

        function __construct()
        {

            $this->siteModel = new SiteModel();

            $this->siteDAO = new SiteDAO();
        }

        public function editarAction(){

        }

        public function listarAction(){

            $sites = array();

            $sites = $this->siteDAO->listar();

            include_once "view/site/listar.php";

        }

        public function selecionarAction($id){

        }

        public function excluirAction(){

        }

        public function cadastrarAction(){

        }

    }

?>