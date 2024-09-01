<?php 
include_once 'helper.php';
include_once 'homeModel.php';
$homeModel = new HomeModel();
$data = $homeModel->getData('product');
// debug_self($data);