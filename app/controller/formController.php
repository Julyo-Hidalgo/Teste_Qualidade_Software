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
        $model->chassi = $_POST['chassi'];
        $model->revisao = $model->getCheckbox($_POST['revisao']);
        $model->sinistro = $model->getCheckbox($_POST['sinistro']);
        $model->roubo_furto = $model->getCheckbox($_POST['roubo_furto']);
        $model->aluguel = $model->getCheckbox($_POST['aluguel']);
        $model->venda = $model->getCheckbox($_POST['venda']);
        $model->particular = $model->getCheckbox($_POST['particular']);

        /*$model->save();

        header("Location: /sucesso");*/
        echo (var_dump($model));
    }

    public static function sucesso(){
        include 'view/cadastrado.php';
    }
}