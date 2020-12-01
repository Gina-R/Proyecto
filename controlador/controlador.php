<?php

class Controlador{


    function __construct(){

        if(isset($_GET['go'])){
            switch($_GET['go']){
                case 'inicio':
                    include_once('./vista/inicio.php');
                break;
                case 'acerca':
                    include_once('./vista/acerca.html');
                break;
                case 'contactenos':
                    include_once('./vista/contactenos.html');
                break;

                default:
                    include_once('./vista/inicio.php');
                    break;
   

            }
        }else{
            include_once('./vista/inicio.php');
        }
    }



}
?>