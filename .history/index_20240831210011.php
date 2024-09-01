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

        $id = $name = $price = $qty = $image = '';

        if(isset($action) && $action == 'delete'){
            $id = $_GET['id'];
        }
        
        if(isset($action) && $action == 'add'){
            $name = $_POST['name'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];
            $image = $_POST['image'];
        }

        $home = new HomeController($action, $id);
        $home->index();
        break;
}