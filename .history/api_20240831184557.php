<?php 
headers.add("Access-Control-Allow-Methods", "GET, POST, OPTIONS, PUT, DELETE");
include_once 'helper.php';
include_once 'homeModel.php';
$homeModel = new HomeModel();
$data = $homeModel->getData('product');
echo json_encode($data);