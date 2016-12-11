<?php

    error_reporting(-1);

    ini_set('display_errors', 'On');

    class ContatoDAO extends Model implements CRUD
    {
        public function editar($obj)
        {

        }

        public function listar() {

            try {

                $array = array();

                $sql = "SELECT * FROM contact";

                $sql = $this->db->prepare($sql);

                $sql->execute();

                if ($sql->rowCount() > 0) {

                    $array = $sql->fetchAll(PDO::FETCH_ASSOC);

                }

                return $array;

            } catch (PDOException $e) {

                echo $e->getMessage();

                return false;

            }

        }

        public function selecionar($url)
        {

        }

        public function excluir($url)
        {

        }

        public function cadastrar($obj)
        {

        }

    }

?>