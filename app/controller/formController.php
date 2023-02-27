<?php

class formController{
    public static function index(){
        include 'view/form.php';
    }

    public static function save(){
        include 'model/formModel.php';

        $model = new formModel();

        $model->id_combustivel = $_POST['combustivel'];
        $model->modelo = $_POST['modelo'];

        $dao = new formDAO();
        $dao->insert($model);
    }
}