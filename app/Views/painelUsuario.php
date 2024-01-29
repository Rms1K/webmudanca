<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Web Mudança</title>
  <link rel="stylesheet" href="Css/sistema.css">
  <style>
        body{background-image: url(img/azul..jpg); background-size: cover;
        background-position: center;}
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
          <a href="<?= base_url('meusimoveis'); ?>"><input type="button" value="Meus Imóveis"></a>
        </div>
        <div>
          <a href="<?= base_url('editarmeusdados'); ?>"><input type="button" value="Editar meus dados"></a>
        </div>
        <div>
      </div>

      
    </section>

    <main class="conteudo">
    
    </main>

</body>

</html>

