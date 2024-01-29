<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Web Mudança - Cadastro de Imóvel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="Css/cadImoveis.css">
    <style>
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
            <a href="<?= base_url('/'); ?>"><img class="logo align-baseline" src="img/logo.png" alt="WebMudança LOGO"></a>
            <ul>
                <li><a href="<?= base_url('/'); ?>">Home</a></li>
                <li><a href="<?= base_url('sobre'); ?>">Sobre</a></li>
                <li><a href="<?= base_url('/') ?>#footer">Suporte</a></li>
                <li><a href="<?= base_url('/') ?>#footer">Contatos</a></li>
                <li id="logout"><a href="<?= base_url('logout') ?>">Sair</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <section class="pagina-sistema">

            <div class="barraLateral">
                <div>
                    <a href="<?= base_url('painelusuario'); ?>"><input type="button" value="Dashboard"></a>
                </div>
                <div>
                    <a href="<?= base_url('cadastraImoveis'); ?>"><input type="button" value="Cadastrar Imovel"></a>
                </div>
                <div>
                    <a href="<?= base_url('meusimoveis'); ?>"><input type="button" value="Meus Imóveis"></a>
                </div>
                <div>
                    <a href="<?= base_url('editarmeusdados'); ?>"><input type="button" value="Editar meus dados"></a>
                </div>
            </div>


            <div id="conteudo">

                <form class="formulario-cadastro" action="<?= base_url('dadosimoveis'); ?>" method="post" enctype="multipart/form-data">
                    <h2>Cadastrar Imóvel</h2>
                    <div class="divForm-infosBasicas">
                        <!-- Informações Básicas  -->
                        <input type="hidden" id="usuario" name="usuario" value="<?= $usuario ?>">

                        <div class="divForm-tipo aluguel_venda">
                            <select name="aluguel_venda" id="aluguel_venda">
                                <option value="aluguel">Aluguel</option>
                                <option value="venda">Venda</option>
                            </select>
                        </div>

                        <div class="divForm-tipo tipoImovel">
                            <select name="tipo">
                                <option  value="casa">Casa</option>
                                <option  value="apartamento">Apartamento</option>
                                <option  value="terreno">Terreno</option>
                            </select>
                        </div>

                        <div class="infosImovel">
                            <div>
                                <label for="preco">Preço:</label>
                                <input type="number" id="preco" name="preco" required>
                            </div>

                            <div>
                                <label for="area_total">Área total (m²):</label>
                                <input type="number" id="area_total" name="area_total" required>
                            </div>

                            <div>
                                <label for="num_quartos">Número de quartos:</label>
                                <input type="number" id="num_quartos" name="num_quartos" required>
                            </div>

                            <div>
                                <label for="num_banheiros">Número de banheiros:</label>
                                <input type="number" id="num_banheiros" name="num_banheiros" required>
                            </div>

                            <div>
                                <label for="num_vagas_garagem">Número de vagas de garagem:</label>
                                <input type="number" id="num_vagas_garagem" name="num_vagas_garagem" required>
                            </div>
                        </div>
                    </div>

                    <div class="divForm-addImgs">

                        <label for="imagens">Adicionar imagens:</label>
                        <input type="file" id="imagens" name="arquivo" multiple accept="image/*" required>


                    </div>



                    <div class="divForm-Localizacao">

                        <label for="endereco">Rua:</label>
                        <input type="text" id="endereco" name="endereco" required>

                        <label for="numImovel">Numero:</label>
                        <input type="text" id="numImovel" name="numImovel" required>

                        <label for="bairro">Bairro:</label>
                        <input type="text" id="bairro" name="bairro" required>

                        <label for="cidade">Cidade:</label>
                        <input type="text" id="cidade" name="cidade" required>

                        <label for="estado">Estado:</label>
                        <input type="text" id="estado" name="estado" required>

                        <label for="cep">CEP:</label>
                        <input type="text" id="cep" name="cep" required>
                    </div>


                    <div class="divForm-termo">
                        <label for="termos_condicoes">Aceitar termos e condições:</label>
                        <input type="checkbox" id="termos_condicoes" name="termos_condicoes" required>
                    </div>

                    <div class="divForm-btnCadastrar">
                        <button name="submit">Cadastrar Imóvel</button>

                    </div>
                </form>
            </div>



            <?php

            if ($msgConfirmaCadastro != null) {
            ?>
                <div class="alert alert-success" role="alert">
                    <?= $msgConfirmaCadastro ?>
                </div>
            <?php
            }
            ?>


        </section>
    </main>

    <script src="Js/script.js"></script>
</body>

</html>