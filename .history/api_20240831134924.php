<?php 
    class HomeModel {
        public function getData($table){
            include_once 'connectModel.php';
            $homeModel = new ConnectModel();
            $sql = "select * from $table";
            return $homeModel->selectall($sql);
        }
    }
?>