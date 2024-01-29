<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>WebMudança</title>
    <link rel="stylesheet" href="Css/styleIndex.css">
    <style>
        body {
            background-image: url(img/azul..jpg);
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<script>
    window.onload = function () {
        var sessaoExistente = <?= json_encode($usuario) ?>;
        function verificarSessao() {
            if (sessaoExistente) {
                document.getElementById("login").innerHTML = ' <li ><a href="<?= base_url('painelusuario');?>" style=" border: none; padding: 0; background-color: black; border-radius: 0px;"><img src="icons/minhaconta.png" alt="Img minha conta" style="width: 40px; height:35px; margin-left: 2px; " > <p style="width: 118px; margin-bottom: 24px; margin-top: -12px; margin-left: -35px;"> Minha Conta</p></a></li>  ';
            }
        }

        verificarSessao();
    }
</script>

<body>

    <header>
        <nav id="nav">
            <a href="<?= base_url('/'); ?>"><img class="logo" src="img/logo.png" alt="WebMudança LOGO"></a>
            <ul>
                <li><a href="#carousel">Imoveis</a></li>
                <li><a href="<?= base_url('sobre'); ?>">Sobre</a></li>
                <li><a href="<?= base_url('/') ?>#footer">Suporte</a></li>
                <li><a href="<?= base_url('/') ?>#footer">Contatos</a></li>
                <li id="login"><a href="<?= base_url('login'); ?>">Entrar</a></li>
            </ul>
        </nav>

    </header>

    <main>
        <section class="banner">
            <img src="img/img1.png" alt="">
        </section>

        <div class="txt-home texto-superior-esquerdo">
            <h2>Seu imóvel agora mais rápido</h2>
            <br>
            <p> Comprar, alugar ou vender com + agilidade + praticidade + segurança.</p>
        </div>

        <div class="form-pesquisa">
            <form method="POST" action="<?= base_url('dadospesquisa'); ?>">
                <select name="aluguel_venda" id="aluguel_venda">
                    <option value="aluguel">Aluguel</option>
                    <option value="venda">Venda</option>
                </select>
                <select name="tipoImovel" id="tipoImovel">
                    <option value="">Tipo de imóvel</option>
                    <option name="tipo" value="casa">Casa</option>
                    <option name="tipo" value="apartamento">Apartamento</option>
                    <option name="tipo" value="terreno">Terreno</option>
                </select>
                <input class="input-pesquisa"  type="text" name="enderecoImovel" placeholder="Digite um bairro, rua ou cidade">
                <input class="btn-pesquisar" type="submit" value="Encontrar Imóvel">
            </form>
        </div>

        <a class="link-anuncie" href="<?= base_url('login'); ?>">Anuncie seu imóvel grátis</a>

      
        
        

        <div id="carousel">
            <div class="carousel-inner">
                <?php
                $imoveisChunks = array_chunk($imoveis, 3);
                foreach ($imoveisChunks as $chunk) {
                    echo '<div class="carousel-item">';
                    echo '<div class="slide-container">';
                    foreach ($chunk as $i) {
                        echo '<div class="slide">';
                        echo '<h2>' . ucfirst($i['Tipo']) . ' - ' . ucfirst($i['Aluguel_Venda']) . '</h2>';
                        echo '<img src="uploads/' . $i['Imagens'] . '" alt="Fotos do imóvel">';
                        echo '<div class="informacoes">';
                        echo '<ul>';
                        echo '<li>Área<hr><p>' . $i['Area'] . '</p></li>';
                        echo '<li>Quartos<hr><p>' . $i['NumeroQuartos'] . '</p></li>';
                        echo '<li>Banheiros<hr><p>' . $i['NumeroBanheiros'] . '</p></li>';
                        echo '<li>Vagas Garagem<hr><p>' . $i['NumeroVagasGaragem'] . '</p></li>';
                        echo '</ul>';
                        echo '<div class="preço">';
                        $aluguelMes = strtolower($i['Aluguel_Venda']) == 'aluguel' ? ' /Mês' : '';
                        echo '<p>Valor: ' . "R$ " .number_format($i['Preco'], 2, ',', '.') .  $aluguelMes .'</p>';
                        echo '</div>';
                        echo '<div class="vermais">';
                        echo '<a href="' . base_url('imovel/' . $i['ID_imovel']) . '">Ver Mais</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>

            <div class="btnscarousel">
                <button id="prevBtn">Anterior</button>
                <button id="nextBtn">Próximo</button>
            </div>
        </div>
    </main>


<footer id="footer">

    <div class="iconesFooter">
        <a href=""><img src="icons/instagram.png" alt=""></a>
        <a href=""><img src="icons/facebook.png" alt=""></a>
        <a href=""><img src="icons/Twitter.png" alt=""></a>
    </div>

                
</footer>

</body>

<script>
    const carousel = document.querySelector('#carousel .carousel-inner');
    const slides = document.querySelectorAll('.slide');
    const slideCount = slides.length;
    const slideWidth = slides[0].clientWidth * 3;
    const clonedSlides = carousel.innerHTML; 
    let currentIndex = 0;

    carousel.innerHTML += clonedSlides;

    function slide(direction) {
        if (direction === 'next') {
            currentIndex = (currentIndex + 1) % (slideCount / 3);
        } else {
            currentIndex = (currentIndex - 1 + slideCount / 3) % (slideCount / 3);
        }
        carousel.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }

    document.getElementById('prevBtn').addEventListener('click', () => {
        slide('prev');
    });

    document.getElementById('nextBtn').addEventListener('click', () => {
        slide('next');
    });

    
</script>

<script>
    document.getElementById('formPesquisa').addEventListener('submit', function (event) {
        event.preventDefault(); // Impede o envio padrão do formulário
        buscarImoveis();
    });

    function buscarImoveis() {
        // Obter os valores do formulário
        var aluguelVenda = document.getElementById('aluguel_venda').value;
        var tipoImovel = document.getElementById('tipoImovel').value;
        var enderecoImovel = document.getElementById('enderecoImovel').value;

        // Redirecionar para a página de pesquisa com os parâmetros
        window.location.href = "<?= base_url('dadospesquisa'); ?>" + "?aluguel_venda=" + aluguelVenda + "&tipoImovel=" + tipoImovel + "&enderecoImovel=" + enderecoImovel;
    }
</script>


</html>