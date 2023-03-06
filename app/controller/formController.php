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
        $model->kilometragem= $_POST['kilometragem'];
        $model->id_marca = $_POST['marca'];
        $model->id_tipo = $_POST['tipo'];
        $model->id_fabricante = $_POST['fabricante'];
        $model->ano = $_POST['ano'];

        $model->save();

        header("Location: /");
    }
}