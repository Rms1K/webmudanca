<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Esqueci a senha</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/recuperacaoSenha.css">

    <style>
          body {
            background-image: url(img/preto-fosco.jpg);
            background-size: cover;
            background-position: center;
        }   
    </style>

</head>

<body>

    <header>
        <nav id="nav">
            <a href="<?= base_url('/'); ?>"><img class="logo" src="img/logo.png" alt="WebMudança LOGO"></a>
            <ul>
                <li><a href="<?= base_url('/'); ?>">Home</a></li>
                <li><a href="<?= base_url('sobre'); ?>">Sobre</a></li>
                <li><a href="<?= base_url('/') ?>#footer">Suporte</a></li>
                <li><a href="<?= base_url('/') ?>#footer">Contatos</a></li>
                <li id="login"><a href="<?= base_url('login'); ?>">Entrar</a></li>
            </ul>
        </nav>

    </header>

    <main>

        <section class="box-recuperacaosenha">
            <h1>Recupere sua senha</h1>


            <h5>Insira seu email para a recuperação de senha.</h5>
            <form method="post" action="<?= base_url('enviaremail') ?>">

                <input type="text" name="email" placeholder="Email">
                <hr />
                <input type="submit" value="Enviar">
            </form>
        </section>


        <?php

        if ($msgEmailErro != null) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?= $msgEmailErro ?>
            </div>
        <?php
        }
        ?>

        <?php

        if ($msgEmailEnviado != null) {
        ?>
            <div class="alert alert-success" role="alert">
                <?= $msgEmailEnviado ?>
            </div>
        <?php
        }
        ?>

    </main>

</body>

</html>

</body>

</html>