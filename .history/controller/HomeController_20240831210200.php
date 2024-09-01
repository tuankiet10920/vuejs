<?php
class HomeController
{
    public $id;
    public $action;
    public $name;
    public $price;
    public $qty;
    public $image;
    public function __construct($action, $id, $name, $price, $qty, $image)
    {
        $this->action = $action;
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->qty = $qty;
        $this->image = $image;
    }

    public function index()
    {
        include_once 'model/homeModel.php';
        $homeModel = new HomeModel();
        $table = 'product';
        switch ($this->action) {
            case 'delete':
                $homeModel->deleteOne($table, $this->id);
                break;
            case 'add':
                $homeModel->deleteOne($table, $this->id);
                break;
            default: // getData()

                break;
        }
        $lsProduct = $homeModel->getData($table);
        include_once 'view/home.php';
    }
}
