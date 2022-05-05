<?php
session_start();
include('verifica_login.php');
?>
<center>
    <br>
    <br>
    <h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
    <br>
</center>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro - PHP + MySQL </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <center>
                        <form action="painel_fornecedor.php">
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar fornecedor</button>
                        </form>
                    </center>
                    <h3 class="title has-text-grey">Sistema de Cadastro de Produtos</h3>
                    <h3 class="title has-text-grey"><a href="https://youtube.com/canaltioficial" target="_blank"></a></h3>
                    <div class="notification is-success">
                        <?php

                        if (isset($_SESSION['nao_autenticado'])) :
                        ?>
                            <p>Cadastro efetuado!</p>
                            <p>Faça o cadastro informando os dados abaixo <a href="painel.php">aqui</a></p>
                    </div>
                    <div class="notification is-info">
                        <p>O fornecedor já existe. Informe outro e tente novamente.</p>
                    <?php
                        endif;
                        unset($_SESSION['nao_autenticado']);
                    ?>
                    </div>
                    <div class="box">
                        <form action="painel_fornecedor.php" method="POST">
                            <div class="field">
                                <div class="control">

                                    <input name="produto_nome" type="text" class="input is-large" placeholder="Nome" autofocus required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="produto_descricao" type="text" class="input is-large" placeholder="Descrição" required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="produto_estoque_minimo" class="input is-large" type="text" placeholder="Estoque minimo">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="produto_estoque_atual" class="input is-large" type="text" placeholder="Estoque atual">
                                    <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                                 <center>
                                     <br>
                                     <br>
                                 <h2><a href="index.php">Sair</a></h2>
                                 </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>