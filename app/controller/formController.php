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
        $model->cor = $_POST['cor'];
        $model->observacoes = $_POST['observacoes'];
        $model->observacoes = $_POST['kilometragem'];

        $model->save();

        header("Location: /");
    }
}