<?php 
header("Access-Control-Allow-Origin: *"); // Allow requests from any origin
header("Access-Control-Allow-Methods: GET, POST, DELETE");
include_once 'helper.php';
include_once 'homeModel.php';
$homeModel = new HomeModel();
$data = $homeModel->getData('product');
echo json_encode($data);