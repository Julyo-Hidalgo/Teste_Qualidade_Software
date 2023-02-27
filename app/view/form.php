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

        </style>

    </head>

    <body>
        <form method="post" action="/form/save">
            <fieldset>
                <legend>Cadastro de Veículos</legend>

                <div>
                    <label for="id" class="noneBorder">Código veículo:</label>
                    <input id="id" type="number" readonly>

                    <label for="marca">Marca:</label>
                    <select id="marca" name="marca">
                    </select>

                    <label for="modelo">Modelo:</label>
                    <input id="modelo" name="modelo" type="text">

                    <label for="tipo">Tipo:</label>
                    <select id="tipo" name="tipo">

                    </select>

                    <label for="fabricante">Fabricante:</label>
                    <select id="fabricante" name="fabricante">

                    </select>

                    <label for="ano">Ano:</label>
                    <input id="ano" name="ano" type="text">

                    <label for="combustivel">Combustível</label>
                    <select id="combustivel" name="combustivel">
                        <?php   
                            include 'dao/formDAO.php';
                            $dao = new formDAO();
                            $var = $dao->selectCombustivel();

                            foreach ($var as $option){
                        ?>
                            <option value="<?php echo($option['id']);?>">
                                <?php echo($option['nome']); ?>
                            </option>
                        <?php } ?>
                    </select>

                    <label for="cor">Cor:</label>
                    <input id="cor" name="cor" type="text">

                    <label for="chassi">Número do chassi:</label>
                    <input id="chassi" name="chassi" type="text">
                </div>

                <div>
                    <label for="kilometragem" class="noneBorder">Kilometragem:</label>
                    <input id="kilometragem" name="kilometragem" type="number" min=0>

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
            </fieldset>
            <button type="submit">Cadastrar</button>
        </form>
    </body>
</html>