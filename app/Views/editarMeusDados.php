<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Meus dados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/editarDados.css">

    <style>
        #alert {
            width: 300px;
            position: absolute;
            top: 500px;
            left: 55px;
        }

        body {
            background-image: url(img/azul..jpg);
            background-size: cover;
            background-position: center;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var form = document.getElementById("formulario-excluirConta");

            form.addEventListener("submit", function(event) {
                var confirmacao = confirm("Todos os seus imóveis cadastrados serão apagados. Tem certeza que deseja excluir sua conta? ");
                
                if (!confirmacao) {
                    event.preventDefault(); 
                }else{
                    alert("Conta excluída com sucesso!")
                }

               
            });
        });
    </script>
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
                <li id="logout"><a href="<?= base_url('logout') ?>">Sair</a></li>
            </ul>
        </nav>
    </header>
    <section class="pagina-sistema">

        <div class="barraLateral">
            <div>
                <a href="<?= base_url('painelusuario'); ?>"><input type="button" value="Dashboard"></a>
            </div>
            <div>
                <a href="<?= base_url('cadastraImoveis'); ?>"><input type="button" value="Cadastrar Imovel"></a>
            </div>
            <div>
                <div>
                    <a href="<?= base_url('meusimoveis'); ?>"><input type="button" value="Meus Imóveis"></a>
                </div>
                <div>
                    <a href="<?= base_url('editarmeusdados'); ?>"><input type="button" value="Editar meus dados"></a>
                </div>
                <div>

                </div>
            </div>
    </section>

    <div class="conteudo">
        <fieldset>
            <legend> Meus Dados </legend>
            <form method="post" action="<?= base_url('dadosparaeditar'); ?>">


                <div class="inputBox">
                    <label class="labelInput" for="nomecompleto">Nome Completo:</label>
                    <input class="inputUser" type="text" id="nome" name="nomecompleto" value="<?= $usuario[0]['NomeCompleto'] ?>">
                </div>

                <div class="inputBox">
                    <label class="labelInput" for="usuario">Usuario</label>
                    <input class="inputUser" type="text" id="usuario" name="usuario" value="<?= $usuario[0]['Usuario'] ?>">
                </div>

                <div class="inputBox">
                    <label class="labelInput" for="email">Endereço de e-mail:</label>
                    <input class="inputUser" type="email" id="email" name="email" value="<?= $usuario[0]['Email'] ?>">
                </div>


                <div class="inputBox">
                    <label class="labelInput" for="senha">Telefone:</label>
                    <input class="inputUser" type="text" id="telefone" name="telefone" value="<?= $usuario[0]['telefone'] ?>">
                </div>


                <div class="inputBox">
                    <label class_useslass="labelInput" for="data_nascimento">Data de Nascimento:</label>
                    <input class="inputUser" type="date" id="data_nascimento" name="data_nascimento" value="<?= $usuario[0]['DataNascimento'] ?>">
                </div>

                <div class="inputBox">
                    <label class_useslass="labelInput" for="genero">Gênero:</label>
                    <select class="inputUser" id="genero" name="genero">
                        <option style="background-color: rgb(51,51,51);" value="masculino"></option>
                        <option style="background-color: rgb(51,51,51);" value="masculino">Masculino</option>
                        <option style="background-color: rgb(51,51,51);" value="feminino">Feminino</option>
                        <option style="background-color: rgb(51,51,51);" value="outro">Outro</option>
                    </select>
                </div>

                <input type="hidden" id="ID_Usuario" name="ID_Usuario" value="<?= $usuario[0]['ID_Usuario'] ?>">
                <br>
                <div class="inputBox">
                    <button type="submit">Salvar</button>
                    <a href="<?= base_url('painelusuario') ?>"><button type="button">Cancelar</button></a>

                </div>

            </form>

            <form id="formulario-excluirConta" action="<?= base_url('excluirconta') ?>" method="post">
                <input id="bnt-ExcluirConta" type="submit" value="Excluir Conta">
                <input type="hidden" id="Usuario" name="Usuario" value="<?= $usuario[0]['Usuario'] ?>">
                <input type="hidden" id="ID_Endereco" name="ID_Endereco" <?php if(isset($u['ID_Endereco'])) { echo 'value="' . $imovel[0]['ID_Endereco'] . '"'; } ?>>
                
                <input type="hidden" id="ID_Proprietario" name="ID_Proprietario" <?php if(isset($u['ID_Proprietario'])) { echo 'value="' . $imovel[0]['ID_Proprietario'] . '"'; } ?>>
                <input type="hidden" id="ID_imovel" name="ID_imovel" <?php if(isset($u['ID_imovel'])) { echo 'value="' . $imovel[0]['ID_imovel'] . '"'; } ?>>
            </form>
        </fieldset>

        <?php

        if ($msgEditardados != null) {
        ?>
            <div id="alert" class="alert alert-success" role="alert">
                <?= $msgEditardados ?>
            </div>
        <?php
        }
        ?>
    </div>

</body>

</html>