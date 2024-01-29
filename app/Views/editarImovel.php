<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Web Mudança</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="../Css/editarImovel.css">

    <style>
        body{background-image: url(../img/preto-fosco.jpg); background-size: cover;
        background-position: center; text-decoration: none; text-decoration: none !important;}

        
    </style>
</head>
<body>

    <header>
        <nav id="nav">
            <a href="<?= base_url('/');?>"><img class="logo" src="../img/logo.png" alt="WebMudança LOGO"></a>
            <ul>
                <li><a href="<?= base_url('/');?>">Home</a></li>
                <li><a href="">Suporte</a></li>
                <li><a href="<?= base_url('/') ?>#footer">Suporte</a></li>
                <li><a href="<?= base_url('/') ?>#footer">Contatos</a></li>
                <li id="logout"><a href="<?= base_url('logout')?>">Sair</a></li>
            </ul>
        </nav>
        
    </header>

    <main>          
        <section class="pagina-sistema">

            <div class="barraLateral">

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
        </section>
        

        <section id="conteudo">
          
        <div class="imoveis-container">

            <div id="modal">
  
                <form id="editarImovel" action="<?= base_url('dadoseditarimovel'); ?>" method="post" enctype="multipart/form-data" onsubmit="alert('Editado com sucesso!');">
                        <a id="btnFecharModal" href="<?= base_url('meusimoveis'); ?>"><input type="button" value="X"></a>
                        
                        <h2>Editar Imóvel</h2>
                        <div class="divForm-infosBasicas">
                            <!-- Informações Básicas  -->
                            

                            <div class="divForm-tipo aluguel_venda">
                            <select name="aluguel_venda" id="aluguel_venda">
                                <?php if ($Imovel[0]['Aluguel_Venda'] == 'venda'): ?>
                                    <option value="venda">Venda</option>
                                    <option value="aluguel">Aluguel</option>
                                <?php else: ?>
                                    <option value="aluguel">Aluguel</option>
                                    <option value="venda">Venda</option>
                                <?php endif; ?>
                            </select>

                            </div>

                           
                            
                            <div class="divForm-tipo tipoImovel">
                                <select name="tipo" value="<?= $Imovel[0]['Tipo']?>">
                                    <?php if ($Imovel[0]['Tipo'] == 'casa'): ?>
                                        <option  value="casa">Casa</option>
                                        <option  value="apartamento">Apartamento</option>
                                        <option  value="terreno">Terreno</option>
                                    <?php elseif($Imovel[0]['Tipo'] == 'apartamento'): ?>
                                        <option  value="apartamento">Apartamento</option>
                                        <option  value="casa">Casa</option>
                                        <option  value="terreno">Terreno</option>
                                    <?php elseif($Imovel[0]['Tipo'] == 'terreno'): ?>
                                        <option  value="terreno">Terreno</option>
                                        <option  value="apartamento">Apartamento</option>
                                        <option  value="casa">Casa</option>
                                        
                                    <?php endif; ?>
                                </select>
                            </div>

                            <div class="infosImovel">
                                <div>
                                    <label for="preco">Preço:</label>
                                    <input type="number" id="preco" name="preco" value="<?= $Imovel[0]['Preco']?>" >
                                </div>

                                <div>
                                    <label for="area_total">Área total (m²):</label>
                                    <input type="number" id="area_total" name="area_total" value="<?= $Imovel[0]['Area']?>" >
                                </div>

                                <div>
                                    <label for="num_quartos">Número de quartos:</label>
                                    <input type="number" id="num_quartos" name="num_quartos" value="<?= $Imovel[0]['NumeroQuartos']?>">
                                </div>

                                <div>
                                    <label for="num_banheiros">Número de banheiros:</label>
                                    <input type="number" id="num_banheiros" name="num_banheiros" value="<?= $Imovel[0]['NumeroBanheiros']?>">
                                </div>

                                <div>
                                    <label for="num_vagas_garagem">Número de vagas de garagem:</label>
                                    <input type="number" id="num_vagas_garagem" name="num_vagas_garagem" value="<?= $Imovel[0]['NumeroVagasGaragem']?>">
                                </div>
                            </div>
                        </div>

                        <div class="divForm-addImgs">

                            <img src=" <?= "../uploads/" . $Imovel[0]['Imagens']?>" alt=""><br>

                            <label for="imagens">Adicionar imagens:</label>
                            <input type="file" id="imagens" name="arquivo" multiple accept="image/*" >


                        </div>



                        <div class="divForm-Localizacao">

                            <label for="endereco">Rua:</label>
                            <input type="text" id="endereco" name="endereco" value="<?= $enderecoImovel[0]['Rua']?>">

                            <label for="numImovel">Numero:</label>
                            <input type="text" id="numImovel" name="numImovel" value="<?= $enderecoImovel[0]['numImovel']?>">

                            <label for="bairro">Bairro:</label>
                            <input type="text" id="bairro" name="bairro" value="<?= $enderecoImovel[0]['Bairro']?>">

                            <label for="cidade">Cidade:</label>
                            <input type="text" id="cidade" name="cidade" value="<?= $enderecoImovel[0]['Cidade']?>">

                            <label for="estado">Estado:</label>
                            <input type="text" id="estado" name="estado" value="<?= $enderecoImovel[0]['Estado']?>">

                            <label for="cep">CEP:</label>
                            <input type="text" id="cep" name="cep" value="<?= $enderecoImovel[0]['CEP']?>">
                        </div>


                        <div class="divForm-btnCadastrar">
                            <button name="submit">Salvar</button>
                            <a href="<?= base_url('meusimoveis'); ?>"><input type="button" value="Cancelar"></a>
                        </div>
                    
                        <input type="hidden" name="ID_imovel" value="<?= $Imovel[0]['ID_imovel']?>">
                        <input type="hidden" name="ID_Endereco" value="<?= $Imovel[0]['ID_Endereco']?>">
                    
                    </form>

        </div>
                
        </div>
       
        </section>

        
    </main>

    <script> </script>
</body>
</html>