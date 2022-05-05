<?php
    session_start();
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">+
    <title>Cadastro</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Cadastro</h3>
                    <h3 class="title has-text-grey"><a href="https://youtube.com/canaltioficial" target="_blank"></a>
                    </h3>
                    <div class="notification is-success">
                        <?php
                    
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                        <p>Cadastro efetuado!</p>
                        <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
                    </div>
                    <div class="notification is-info">
                        <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                        <?php  
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    </div>
                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Usuário">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario_nivel" class="input is-large" type="text"
                                        placeholder="usuario nivel">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="Nome_da_empresa" class="input is-large" type="text"
                                        placeholder="Nome da empresa">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="CNPJ" class="input is-large" type="text" placeholder="CNPJ">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="CEP" class="input is-large" type="text" placeholder="CEP">
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input name="Logradouro" class="input is-large" type="text"
                                            placeholder="Logradouro">
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <input name="Complemento" class="input is-large" type="text"
                                                placeholder="Complemento">
                                        </div>
                                        <div class="field">
                                            <div class="control">
                                                <input name="Número" class="input is-large" type="text"
                                                    placeholder="Número">
                                            </div>
                                            <div class="field">
                                                <div class="control">
                                                    <input name="Bairro" class="input is-large" type="text"
                                                        placeholder="Bairro">
                                                </div>
                                                <div class="field">
                                                    <div class="control">
                                                        <input name="Cidade" class="input is-large" type="text"
                                                            placeholder="Cidade">
                                                    </div>
                                                    <div class="field">
                                                        <div class="control">
                                                            <input name="Estado" class="input is-large"
                                                                type="text" placeholder="Estado">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>