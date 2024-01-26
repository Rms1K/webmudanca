<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Sobre</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

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

        body {
            position: relative;
        }

        .alert {
            width: 430px;
            position: absolute;
            top: 470px;
            left: 500px;
        }

        #nav ul {
            list-style: none;
            display: flex;
            margin-bottom: 0px;
            margin-right: 20px;
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

        #login a{
            border: 2px solid rgb(255, 140, 0);
            border-radius: 8px;
            background-color: rgb(255, 140, 0);
            padding:9px ;
            
        }

        #login a:hover{
            background-color: black;
            color: rgb(255, 140, 0); 
            cursor: pointer;
        }

        /* Fim Nav Bar */

        .container{
            margin-top: 40px;
        }


        .txt-home {
            color: white;
            position: relative;
            padding: 15px;
            border-radius: 15px;
            width: 40%;
        }

        .texto-superior-esquerdo {
            position: absolute;
            top: 11%;
            left: 9.5%;
        }

        .sobre {
            color: white;
            background-color: rgba(26, 26, 26, 0.897);
            margin-inline: 2%;
        }

        .sobre img{
            width: 600px;
            height: 300px;
            margin-top: 10%;
        }

        .container {
            display: flex;
            justify-content: center;
        }

        .half {
            width: 50%;
            padding: 20px;
            box-sizing: border-box;
        }
        .right{  
            margin-top: 100px;
            margin-bottom: 150px;
        }

        .half-txt{
            margin-inline: 50px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .informações{
            color: white;
            text-align: center;
        }

        .final{
            color: white;
            height: 200px;
        }

        .container2 {
            display: flex;
            justify-content: center;
        }

        .half2 {
            background-color: rgba(26, 26, 26, 0.897);
            margin-inline: 150px;
            margin-bottom: 0px;
            width: 50%;
            padding: 40px;
            margin-top: 50px;
            margin-bottom: 5%;
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