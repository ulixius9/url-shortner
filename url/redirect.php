<?php
    require_once 'classes/shorten.php';

    if(isset($_GET['code'])){
        $s = new shorten;
        $code=$_GET['code'];
        if ($url=$s->getURL($code)){
            header("LOCATION:$url");
            die();
        }
        header("LOCATION:index.php");
    }
?>