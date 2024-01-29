<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Web Mudança - Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/cadUsuario.css">

    <style>
        body{
            position: relative;
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
                <li><a href="<?= base_url('sobre'); ?>">Sobre</a></li>
                <li><a href="<?= base_url('/') ?>#footer">Suporte</a></li>
                <li><a href="<?= base_url('/') ?>#footer">Contatos</a></li>
                <li id="login"><a href="<?= base_url('login'); ?>">Entrar</a></li>
            </ul>
        </nav>

    </header>

    <main>

        <section class="cadusuario">

            <form action="<?= base_url('dadoscadastro'); ?>" method="post" class="form-cadusuario">

                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" required>

                <label class="mt-1 mb-1" for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" required>



                <label for="email">Endereço de e-mail:</label>
                <input type="email" id="email" name="email" required>

          

                <label for="telefone_contato">Número de telefone:</label>
                <input type="tel" id="telefone_contato" name="telefone_contato" required>
                    


                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>


                <label for="confirma_senha">Confirme a senha:</label>
                <input type="password" id="confirma_senha" name="confirma_senha" required>



                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento" required>



                <label for="genero">Gênero:</label>
                <select id="genero" name="genero">
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>



                <br>

                <input type="submit" value="Cadastrar">
            </form>
        </section>

        <?php

        if ($msgConfirmaCadastro != null) {
        ?>
            <div class="alert alert-success" role="alert">
                <?= $msgConfirmaCadastro ?>
            </div>
        <?php
        }
        ?>

        <?php

        if ($msgSenhaDiferente != null) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?= $msgSenhaDiferente ?>
            </div>
        <?php
        }
        ?>

        <?php

        if ($msgEmailjaCadastrado != null) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?= $msgEmailjaCadastrado ?>
            </div>
        <?php
        }
        ?>

        <?php

        if ($msgUsuariojaCadastrado != null) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?= $msgUsuariojaCadastrado ?>
            </div>
        <?php
        }
        ?>
    </main>

</body>

</html>

</body>

</html>