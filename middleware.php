<?php
class MiddleWare{
    public function __construct($param){
        if(
            !isset($_SESSION['login'])
            || $_SESSION['login']!=true
        ){
            //header
        }
    }
}