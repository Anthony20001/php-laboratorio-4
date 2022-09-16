<?php 
    class Contabilidad{
        public function __construct(){
            
        }

        public static function salario_neto($horas, $pago_hora){
            define("DESCUENTO", 20);
            $salario_bruto = $horas * $pago_hora;
            $salario_neto = $salario_bruto - ($salario_bruto * 0.2);
            return $salario_neto;
        }

        public static function saludo(){
            echo "HolaMundo";
        }
    }
?>