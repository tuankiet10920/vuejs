<?php
class HomeController {
    public $id;
    public $action;
    public function __construct($action, $id){
        $this->action = $action;
        $this->id = $id;
    }
}