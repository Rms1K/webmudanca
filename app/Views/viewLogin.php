<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Web Mudança - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/viewLogin.css">
    <style>
        *{margin: 0; padding: 0; box-sizing: border-box; text-decoration: none; font-family: 'Times New Roman', Times, serif;}

         /* Nav bar*/
        #nav {
            width: 100%;
            height: 10vh;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: black;
        }

        .logo {
            width: 150px;
            height: 10vh;
            margin-left: 20px;

        }

        #nav ul {
            list-style: none;
            display: flex;
            margin-right: 20px;
            margin-bottom: 0px;
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


        /* Fim da nav bar */
        body {
            position: relative;
            margin: 0 auto;
            background-image: url(img/preto-fosco.jpg);
            background-size: cover;
            background-position: center;
        }

        .sessao-login {
            color: whitesmoke;
            border-radius: 10px;
            border: 1px solid rgb(255, 140, 0);
            border: 1px solid rgb(255, 140, 0);
            width: 350px;
            height: 350px;
            position: absolute;
            left: 490px;
            top: 160px;
        }

        .container {
            margin-top: 40px;
        }

        .formulario-login {
            display: flex;
            flex-direction: column;
            align-items: center;
            row-gap: 15px;
        }

        .formulario-login input {
            width: 265px;
            padding: 10px;
            border: none;
            border-radius: 8px;
        }

        .btn-login {
            width: 270px;
            padding: 10px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .btn-criarConta {
            width: 265px;
            padding: 10px;
            border: none;
            border-radius: 8px;
            position: absolute;
            top: 270px;
            left: 43px;
            cursor: pointer;

        }

        .formulario-login a {
            color: white;
            font-size: 16px;
        }

        .hr {
            border: none;
            height: 1px;
            background-color: white;
            margin: 225px 25px;
            position: absolute;
            width: 80%;
            top: 20px;
        }

        .alert{
            width: 300px;
            position: absolute;
            top: 550px;
            left: 520px;
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
            </ul>
        </nav>

    </header>
    <section class="sessao-login">
        <div class="container">
            <form class="formulario-login" method="post" action="<?= base_url('dadoslogin'); ?>">
                <input type="text" name="usuario" placeholder="Usuario">
                <input type="password" name="senha" placeholder="Senha">
                <input class="btn-login" type="submit" name="Entrar" value="Entrar">
                <a href="<?= base_url('recuperacaosenha'); ?>">Esqueceu a senha?</a>
            </form>
            <div class="hr"></div>
            <a href="<?= base_url('cadastrousuario'); ?>"><button class="btn-criarConta">Criar uma conta</button></a>
        </div>
  
    </section>

    <?php
            if($msgErro != null){
            ?>
                <div class="alert alert-danger" role="alert">
                    <?=$msgErro?>
                </div>
            <?php
            }
        ?>
</body>

</html>