<?php

    class SitesModel
    {

        private $idSite;

        private $name;

        private $description;

        private $photo;

        private $link;

        public function setIdSite($idSite)
        {
            $this->idSite = $idSite;
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function setDescription($description)
        {
            $this->description = $description;
        }

        public function setPhoto($photo)
        {
            $this->photo = $photo;
        }

        public function setLink($link)
        {
            $this->link = $link;
        }

        public function getIdSite()
        {
            return $this->idSite;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getDescription()
        {
            return $this->description;
        }

        public function getPhoto()
        {
            return $this->photo;
        }

        public function getLink()
        {
            return $this->link;
        }

    }

?>