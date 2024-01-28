<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Sobre</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous" href="Css/viewSobre.css">>
    <style>
          body {
            background-image: url(img/preto-fosco.jpg);
            background-size: cover;
            background-position: center;
        }   

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>

</head>

<body>

    <header>
        <nav id="nav">
            <a href="<?= base_url('/'); ?>"><img class="logo" src="img/logo.png" alt="WebMudança LOGO"></a>
            <ul>
                <li><a href="<?= base_url('/'); ?>">Home</a></li>
                <li><a href="">Suporte</a></li>
                <li><a href="<?= base_url('/') ?>#footer">Suporte</a></li>
                <li><a href="<?= base_url('/') ?>#footer">Contatos</a></li>
                <li id="login"><a href="<?= base_url('login'); ?>">Entrar</a></li>
            </ul>
        </nav>

    </header>

    <main>

    <div class="sobre" id="pesq-sobre">
        <div class="container">
            <div class="half left">
                <a href="<?= base_url('/'); ?>"><img src="img/logo-origin.jpg"></a>
            </div>
            <div class="half right">
                <h2> SOBRE </h2>
                <br>
                <p style="text-align: justify;">A WebMudança é uma empresa voltada para o setor
                    imobiliário da região do vale do Jequitinhonha, que tem como foco inicial a cidade de Araçuaí.
                    A empresa nasceu com a missão de solucionar o problema que novos residentes da região
                    tinham ao procurar imóveis tanto para alugar quanto comprar. Tendo em vista que a maioria
                    das pessoas que têm a necessidade e/ou interesse de realizar mudança para cidade não
                    conhecem a cidade o suficiente para realizar uma mudança conhecendo o mercado
                    imobiliário da cidade. Dessa forma, criamos uma plataforma que possibilita que os
                    interessados conheçam o mercado e tomem decisões levando em consideração todo o custo
                    benefício.</p>
            </div>
        </div>
    </div>

       

    </main>

</body>

</html>

</body>

</html>