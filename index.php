<?php 
    DEFINE('_PATH', $_SERVER['DOCUMENT_ROOT']. '/dentidesk/php-mysql-login/');
    if(isset($_GET["controller"])&&isset($_GET["action"])){
        $controller = $_GET["controller"];
        $action = $_GET["action"];
    }elseif(isset($_GET["controller"])&&!isset($_GET["action"])){
        $controller = $_GET["controller"];
        $action = "index";
        
    }else{
        $controller = "public";
        $action = "index";
    }
    require_once(_PATH."controllers/".$controller."_controller.php");
    

?>