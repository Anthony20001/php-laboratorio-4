<?php 
    class Activo{
        private $vida_util, $depreciacion_anual;

        public function __construct(){
        }

        public function setVidaUtil($vida_util){
            $this->vida_util = $vida_util;
        }

        public function getVidaUtil(){
            return $this->vida_util;
        }

        public function setDepreciacion_anual($depreciacion_anual){
            $this->depreciacion_anual = $depreciacion_anual;
        }

        public function getDepreciacion_anual(){
            return $this->depreciacion_anual;
        }
    }
?>