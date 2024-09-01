<?php 
include_once 'helper.php';
include_once 'homeModel.php';
$homeModel = new HomeModel();
$data = $homeModel->getData('product');
$data = json_decode($data);
debug_self($data);
// debug_self($data);