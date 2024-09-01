<?php 
include_once 'homeModel.php';
$homeModel = new HomeModel();
$data = $homeModel->getData('product');
