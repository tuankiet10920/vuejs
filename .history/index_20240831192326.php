<?php 

$page = isset($_POST['page']) ? $_POST['page'] : '';
$action = isset($_POST['action']) ? $_POST['action'] : '';

switch ($page) {
    case 'value':
        # code...
        break;
    
    default: // home
        include_once 'controller/HomeController.php';

        $id = '';

        if(isset($action)){
            $id = $_GET['id'];
        }

        $home = new HomeController($action, $id);

        break;
}