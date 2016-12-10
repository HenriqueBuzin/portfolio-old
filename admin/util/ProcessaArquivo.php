<?php

    class ProcessaArquivo
    {

        public static function extractZip($arquivo, $destino){
            // $arquivo = getcwd().'/arquivo-teste.zip';
            // $destino = getcwd().'/';
            $zip = new ZipArchive;
            $zip->open($arquivo);
            if($zip->extractTo($destino) == TRUE)
            {
                echo 'O Arquivo não pode ser descompactado.';
            }
            else
            {
                echo 'O Arquivo não pode ser descompactado.';
            }
            $zip->close();
        }

        public static function extractRar($arquivo, $destino){

            $archive = RarArchive::open('archive.rar');
            $entries = $archive->getEntries();
            foreach ($entries as $entry) {
                $entry->extract('/extract/to/this/path');
            }
            $archive->close();


        }
    }
?>