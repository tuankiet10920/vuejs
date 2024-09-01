<?php 

header('Access-Control-Allow-Origin: http://localhost:5173');
header('Access-Control-Allow-Methods: GET, DELETE, PUT');

$page = isset($_POST['page']) ? $_POST['page'] : '';
$action = isset($_POST['action']) ? $_POST['action'] : '';

switch ($page) {
    case 'value':
        # code...
        break;
    
    default: // home
        include_once 'controller/HomeController.php';

        $id = isset($_GET['id']) ? (int)$_GET['id'] : '';
        

        $home = new HomeController($action, $id);
        $home->index();
        break;
}