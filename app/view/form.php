<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inicial-scale=1.0">

        <style>
            body{
                background-image: linear-gradient(darkblue, white);
                font-size: 2vw;
            }

            fieldset{
                border-radius: 10px;
                border-width: 5px;
            }

            legend{
                color: white;
            }

            form div{
                display: inline-grid;
                width: 45%;
                margin-left: 2%;
                border-radius: 10px;
                padding: 1%;
                box-shadow: 2px 0px 15px black;
            }

            label, input, select{
                padding: 3px;
                text-align: center;
                display: block;
                margin: 0 auto;
            }

            label{
                margin-top: 3%;
                border-top: 1px black solid;
                width: 100%;
            }

            textarea{
                width: 70%;
                display: block;
                margin: auto;
                height: 100px;
            }

            .noneBorder{
                border: none;
            }

            button{
                margin: 5% auto;
                display: block;
                text-align: center;
                padding: 1%;
                font-size: 2vw;
                color: white;
                background-color: gray;
                border-radius: 10px;
                border: 5px solid black;
            }
        </style>

    </head>

    <body>
        <form method="post" action="/form/save">
            <fieldset>
                <legend>Cadastro de Veículos</legend>

                <div>
                    <input id="id" type="hidden" readonly>

                    <label for="marca" class="noneBorder">Marca:</label>
                    <select id="marca" name="marca" required>

                        <option value="">Selecione uma marca:</option>
                        <?php   
                            include 'dao/marcaDAO.php';
                            $dao = new marcaDAO();
                            $var = $dao->selectMarca();

                            foreach ($var as $option){
                        ?>
                            <option value="<?php echo($option['id']);?>">
                                <?php echo($option['nome']); ?>
                            </option>
                        <?php } ?>
                    </select>

                    <label for="modelo">Modelo:</label>
                    <input id="modelo" name="modelo" type="text" required>

                    <label for="tipo">Tipo:</label>
                    <select id="tipo" name="tipo" required>
                        <option value="">Selecione um tipo:</option>
                        <?php   
                            include 'dao/tipoDAO.php';
                            $dao = new tipoDAO();
                            $var = $dao->selecTipo();

                            foreach ($var as $option){
                        ?>
                            <option value="<?php echo($option['id']);?>">
                                <?php echo($option['nome']); ?>
                            </option>
                        <?php } ?>
                    </select>

                    <label for="fabricante">Fabricante:</label>
                    <select id="fabricante" name="fabricante" required>
                        <option value="">Selecione um fabricante:</option>
                        <?php   
                            include 'dao/fabricanteDAO.php';
                            $dao = new fabricanteDAO();
                            $var = $dao->selectFabricante();

                            foreach ($var as $option){
                        ?>
                            <option value="<?php echo($option['id']);?>">
                                <?php echo($option['nome']); ?>
                            </option>
                        <?php } ?>
                        
                    </select>

                    <label for="ano">Ano:</label>
                    <input id="ano" name="ano" type="number" min=2000 max=2023 required>

                    <label for="combustivel">Combustível</label>
                    <select id="combustivel" name="combustivel" required>
                        <option value="">Selecione um combustível:</option>
                        <?php   
                            include 'dao/combustivelDAO.php';
                            $dao = new combustivelDAO();
                            $var = $dao->selectCombustivel();

                            foreach ($var as $option){
                        ?>
                            <option value="<?php echo($option['id']);?>">
                                <?php echo($option['nome']); ?>
                            </option>
                        <?php } ?>

                    </select>

                    <label for="cor">Cor:</label>
                    <input id="cor" name="cor" type="text" required>

                    <label for="chassi">Número do chassi:</label>
                    <input id="chassi" name="chassi" type="text" required minlength="17" maxlength="17" type="17" autocomplete="off">
                </div>

                <div>
                    <label for="kilometragem" class="noneBorder">Kilometragem:</label>
                    <input id="kilometragem" name="kilometragem" type="number" min=0 required>

                    <label for="revisao">Revisão:</label>
                    <input type="checkbox" id="revisao" name="revisao">

                    <label for="sinistro">Sinistro:</label>
                    <input type="checkbox" id="sinistro" name="sinistro">

                    <label for="roubo_furto">Roubo/Furto:</label>
                    <input type="checkbox" id="roubo_furto" name="roubo_furto">

                    <label for="aluguel">Aluguel:</label>
                    <input type="checkbox" id="aluguel" name="aluguel">

                    <label for="venda">Venda:</label>
                    <input type="checkbox" id="venda" name="venda">

                    <label for="particular">Particular:</label>
                    <input type="checkbox" id="particular" name="particular">

                    <label for="observacoes">Observações:</label>
                    <textarea id="observacoes" name="observacoes"></textarea>
                </div>
                <button type="submit">Cadastrar</button>
            </fieldset>
        </form>
    </body>
</html>