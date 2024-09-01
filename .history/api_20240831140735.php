<?php 
// header('Access-Control-Allow-Origin: *');
include_once 'helper.php';
include_once 'homeModel.php';
$homeModel = new HomeModel();
$data = $homeModel->getData('product');
echo json_encode($data);