<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de senha</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        *{margin: 0; padding: 0; box-sizing: border-box; text-decoration: none; font-family: 'Times New Roman', Times, serif;}

        #nav {
            width: 100%;
            height: 10vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: black;
        }

        .logo {
            width: 150px;
            height: 10vh;
        }

        #nav ul {
            list-style: none;
            display: flex;
            margin-left: 700px;
        }

        #nav ul li {
            letter-spacing: 3px;
            margin-left: 32px;
            padding-bottom: 10px;
            padding-top: 10px;
        }

        #nav a {
            color: white;
        }

        #nav ul li a:hover {
            color: rgb(255, 140, 0);
            font-weight: 500;

        }

        #login a{
            border: 2px solid rgb(255, 140, 0);
            border-radius: 8px;
            background-color: rgb(255, 140, 0);
            padding:9px ;
            
        }

        #login a:hover{
            background-color: black;
            color: rgb(255, 140, 0); 
            cursor: pointer;
        }

        body {

            position: relative;
        }

        .box-form-novasenha form {
            position: absolute;
            left: 31%;
            top: 240px;
            color: white;
            border: 1px solid rgb(255, 140, 0);
            width: 500px;
            height: 220px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            flex-wrap: wrap;
        }
        .box-form-novasenha form input[type="text"], .box-form-novasenha form input[type="password"]{
            width: 200px;
            height: 20px;
        }

        .box-form-novasenha form input[type="submit"]{
            width: 200px;
            height: 25px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .alert{
            position: absolute;
            top: 500px;
            left: 38%;
        }

       
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
                
                <li><a href="<?= base_url('sobre'); ?>">Sobre</a></li>
                <li><a href="<?= base_url('/') ?>#footer">Suporte</a></li>
                <li><a href="<?= base_url('/') ?>#footer">Contatos</a></li>
                <li id="login"><a href="<?= base_url('login'); ?>">Entrar</a></li>
            </ul>
        </nav>

    </header>
    <section class="box-form-novasenha">

        <form method="post" action="<?= base_url('senhaeditar') ?>">
            <div>
                <label for="senha">Digite a nova senha:</label>
                <br>
                <input type="password" name="senha" id="senha">
            </div>
            <div>
                <label for="emailConfirmacao">Digite seu email:</label>
                <br>
                <input type="text" name="emailConfirmacao" id="emailConfirmacao">
            </div>
            <br>
            <div>
                <input type="submit" value="Salvar">
            </div>
        </form>
    </section>

    <?php

        if ($msgConfirmacao!= null) {
        ?>
            <div class="alert alert-success" role="alert">
                <?= $msgConfirmacao ?>
            </div>
        <?php
        }
        ?>

</body>

</html>