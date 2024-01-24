<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Web Mudança</title>
    <link rel="stylesheet" href="Css/meusimoveis.css">
    <style>
        body{background-image: url(img/preto-fosco.jpg); background-size: cover;
        background-position: center;}
    </style>
</head>
<body>

    <header>
        <nav id="nav">
            <a href="<?= base_url('/');?>"><img class="logo" src="img/logo.png" alt="WebMudança LOGO"></a>
            <ul>
                <li><a href="<?= base_url('/');?>">Home</a></li>
                <li><a href="">Suporte</a></li>
                <li><a href="<?= base_url('/'); ?>#pesq-sobre">Sobre</a></li>
                <li><a href="">Contatos</a></li>
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
            <h1>Meus Imóveis</h1>
            <br>
            <div class="imoveis-container">
                <?php foreach ($imoveis as $i) : ?>
                    <div class="imovel">
                        <div class="fotos">
                            <h2><?=$i['Tipo']. " - " . $i['Aluguel_Venda']?> </h2>
                            <img src="<?= "uploads/" . $i['Imagens'] ?>" alt="Fotos do imóvel">
                        </div>
                        
                        <div class="preco-botao">
                           
                            <div class="bnt bnt-ver">
                             <a href="<?= base_url('imovel/' . $i['ID_imovel'])?>">Ver Anuncio</a>
                           
                            </div>
                            <div class="bnt bnt-editar">
                            
                             <a href="">Editar</a>
                             
                            </div>
                            <div class="bnt bnt-Excluir">
                             
                             <a href="">Excluir</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
         
        </section>
    </main>

    <script src="js/blateralim.js"> </script>
</body>
</html>