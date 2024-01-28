<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Web Mudança - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/viewLogin.css">
    <style>
        *{margin: 0; padding: 0; box-sizing: border-box; text-decoration: none; font-family: 'Times New Roman', Times, serif;}
        body {
        background-image: url(img/azul..jpg);
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