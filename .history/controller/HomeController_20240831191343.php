<?php
class HomeController {
    public $id;
    public $action;
    public function __construct($action, $id){
        $this->action = $action;
        $this->id = $id;
    }

    public function index(){
        switch ($this->action) {
            case 'value':
                # code...
                break;
            
            default: // getData()
                # code...
                break;
        }
    }
}