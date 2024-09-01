<?php
class HomeController {
    public $id;
    public $action;
    public function __construct($action, $id){
        $this->action = $action;
        $this->id = $id;
    }

    public function index(){
        include_once 'model/homeModel.php';
        $homeModel = new HomeModel();
        $table = 'product';
        switch ($this->action) {
            case 'delete':
                
                $lsProduct = $homeModel->getData($table);
                break;
            
            default: // getData()
                
                break;
        }
        $lsProduct = $homeModel->getData($table);
        include_once 'view/home.php';
    }
}