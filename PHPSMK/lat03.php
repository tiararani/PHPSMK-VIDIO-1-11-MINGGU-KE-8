<?php 



    function belajar(){
        echo "Saya belajar PHP";
    }

    function LuasPersegi($p = 5, $l = 3){
        $Luas = $p * $l;

        echo $Luas;
    }

    function Luas($p = 5, $l = 3){
        $luas = $p * $l;

        return $luas;
    }

    function output(){
            return "belajar function";
    }
    
    echo Luas(100,3)*5;
?>