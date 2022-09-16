<?php  
    class Seguridad{
        private $password, $salt;

        public static function cifrar($texto){
            $funciones_cifrado = [
                "base64" => base64_encode($texto),
                "md5" => md5($texto),
                "sha1" => sha1($texto),
                "crc32" => crc32($texto),
                "crypt" => crypt($texto, $texto),
                "hash-sha224" => hash("sha224", $texto),
                "hash-sha512" => hash("sha512", $texto),
                "hash-whirlpool" => hash("whirlpool", $texto),
                "hash-snefru" => hash("snefru", $texto),
                "hash-haval128,3" => hash("haval128,3", $texto),
                "hash-haval128,5" => hash("haval128,5", $texto)
            ];

            foreach($funciones_cifrado as $item){
                $item = $item . password_hash($texto, 1);    
            }

            return  $funciones_cifrado;
        }
    }
?>