<?php 
    class Estudiante{
        private $cant_alumnas;
        private $cant_alumnos;
        private $total;
        
        public function __construct($cant_alumnas, $cant_alumnos){
            $this->cant_alumnas = $cant_alumnas;
            $this->cant_alumnos = $cant_alumnos;
            $this->total = $cant_alumnas + $cant_alumnos;
        }

        public function distribucion_sexo(){
            $total = $this->cant_alumnas + $this->cant_alumnos;
            $this->cant_alumnas = ($this->cant_alumnas * 100) / $total;
            $this->cant_alumnos = ($this->cant_alumnos * 100) / $total;
            return ["mujeres" => $this->cant_alumnas, "hombres"=> $this->cant_alumnos];
        }
    }

?>