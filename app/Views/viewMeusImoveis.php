<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Web Mudança</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="Css/meusimoveis.css">

    <style>
        body{background-image: url(img/azul..jpg); background-size: cover;
        background-position: center; text-decoration: none; text-decoration: none !important;}

        
    </style>
</head>
<body>

    <header>
        <nav id="nav">
            <a href="<?= base_url('/');?>"><img class="logo" src="img/logo.png" alt="WebMudança LOGO"></a>
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
                <?php
                    $itensPorPagina = 3;
                    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
                    $imoveisChunks = array_chunk($imoveis, $itensPorPagina);

                    if (isset($imoveisChunks[$pagina - 1])) {
                        $chunk = $imoveisChunks[$pagina - 1];

                        foreach ($chunk as $i) {
                            ?>
                            <div class="imovel">
                                <div class="fotos">
                                    <h2><?= $i['Tipo'] . " - " . $i['Aluguel_Venda'] ?> </h2>
                                    <img src="<?= "uploads/" . $i['Imagens'] ?>" alt="Fotos do imóvel">
                                </div>

                                <div class="preco-botao">
                                    <div class="bnt bnt-ver">
                                        <a href="<?= base_url('imovel/' . $i['ID_imovel']) ?>">Ver Anuncio</a>
                                    </div>
                                    <div class="bnt bnt-editar">
                                    <a href="<?= base_url('editarimovel/' . $i['ID_imovel']) ?>">Editar</a>
                                     
                                    </div>
                                    <div class="bnt bnt-Excluir">
                                        <form method="post" action="<?= base_url('excluirimovel'); ?>" onsubmit="return confirm('Deseja excluir este imóvel?')">
                                            <input type="submit" value="Excluir">
                                            <input type="hidden" name="ID_imovel" value="<?= $i['ID_imovel'] ?>">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }

                
                    echo '<div class="pagination">';
                    echo '<nav aria-label="Navegação de página exemplo">';
                    echo '<ul class="pagination justify-content-end">';
                    
                    
                    
                    
                    
                    for ($i = 1; $i <= count($imoveisChunks); $i++) {
                        echo '<li class="page-item ' . ($pagina == $i ? 'active' : '') . '">';
                        echo '<a class="page-link" href="?pagina=' . $i . '">' . $i . '</a>';
                        echo '</li>';
                    }

                    
                    

                    echo '</ul>';
                    echo '</nav>';
                    echo '</div>';
                }
                ?>
            </div>
       
        </section>

    </main>

    <script src="js/blateralim.js"> </script>
</body>
</html>