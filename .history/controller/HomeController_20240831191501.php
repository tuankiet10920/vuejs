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
        switch ($this->action) {
            case 'delete':
                # code...
                break;
            
            default: // getData()
                $lsProduct = $homeModel->getData($this->id);
                break;
        }
        include_once 'view/home.php';
    }
}