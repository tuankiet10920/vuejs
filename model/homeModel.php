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

        public function insertOne($table, $name, $price, $qty, $image){
            include_once 'connectModel.php';
            $homeModel = new ConnectModel();
            $sql = "insert into $table values (null, '$name', '$image', $price, $qty)";
            $homeModel->insert($sql);
        }
    }
?>