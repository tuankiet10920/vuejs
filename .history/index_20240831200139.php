<?php 

header('Access-Control-Allow-Origin: http://localhost:5173');
header('Access-Control-Allow-Methods: GET, DELETE, PUT');

$page = isset($_GET['page']) ? $_GET['page'] : '';
$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($page) {
    case 'value':
        # code...
        break;
    
    default: // home
        include_once 'controller/HomeController.php';

        $id = '';

        if(isset($action) && $action != ''){
            $id = $_GET['id'];
        }
        

        $home = new HomeController($action, $id);
        $home->index();
        break;
}