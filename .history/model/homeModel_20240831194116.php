<?php 
    class HomeModel {
        public function getData($table){
            include_once 'connectModel.php';
            $homeModel = new ConnectModel();
            $sql = "select * from $table";
            return $homeModel->selectall($sql);
        }

        public function deleteOne($table, $id){
            include_once 'connectModel.php';
            $homeModel = new ConnectModel();
            $sql = "delete from $table where id = :id";
            $homeModel->delete($sql, $id);
        }
    }
?>