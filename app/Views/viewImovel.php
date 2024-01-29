<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>WebMudança</title>
    <link rel="stylesheet" href="../Css/viewimovel.css">
</head>
<script>
    window.onload = function () {
        var sessaoExistente = <?= json_encode($usuario) ?>;
        function verificarSessao() {
            if (sessaoExistente) {
                document.getElementById("login").innerHTML = ' <li ><a href="<?= base_url('painelusuario');?>" style=" border: none; padding: 0; background-color: black; border-radius: 0px;"><img src="../icons/minhaconta.png" alt="Img minha conta" style="width: 40px; height:35px; margin-left: 2px; " > <p style="width: 118px; margin-bottom: 24px; margin-top: -12px; margin-left: -35px;"> Minha Conta</p></a></li>  ';
            }
        }

        verificarSessao();
    }
</script>
<body>

    <header>
        <nav id="nav">
            <a href="<?= base_url('/') ?>"><img class="logo" src="../img/logo.png" alt="WebMudança LOGO"></a>
            <ul>
                <li><a href="<?= base_url('/'); ?>">Home</a></li>
                <li><a href="<?= base_url('/') . "#carousel"; ?>">Imoveis</a></li>
                <li><a href="<?= base_url('sobre'); ?>">Sobre</a></li>
                <li><a href="<?= base_url('/') ?>#footer">Suporte</a></li>
                <li><a href="<?= base_url('/') ?>#footer">Contatos</a></li>
                <li id="login"><a href="<?= base_url('login'); ?>">Entrar</a></li>
            </ul>
        </nav>

    </header>

    <main>

       
            <div class="fotos">
            <img src=" <?= "../uploads/" . $imovel[0]['Imagens']?>" alt="">
            </div>
            
            <div class="valor">
          
            <img src="../icons/money (1).png"  alt=""> <p><p><?= "R$ " . number_format($imovel[0]['Preco'], 2, ',', '.') .   $aluguelMes = strtolower($imovel[0]['Aluguel_Venda']) == 'aluguel' ? ' /Mês' : '';?></p></p>
            </div>

            <div class="maisInformacoes">
               
                <p> Rua: <?=$enderecoImovel[0]['Rua']?> </br></br>
                    Numero: <?=$enderecoImovel[0]['numImovel']?></br></br>
                    Bairro: <?=$enderecoImovel[0]['Bairro']?> </br></br>
                    Cidade: <?=$enderecoImovel[0]['Cidade']?></br></br>
                    Estado: <?=$enderecoImovel[0]['Estado']?></br></br>
                    Cep: <?=$enderecoImovel[0]['CEP']?></br>
                </p>
            </div>

            <div class="contatoProorietario">
                
                <ul>
                <h3>Entre em contato com o proprietário: </h3>
                    <li>
                        <a href=""><img src="../icons/whatsapp.png" alt="WhatsApp"></a>
                            
                    </li>
                    <li>
                        <a href=""><img src="../icons/gmail.png" alt="Gmail"></a>
                    </li>           
                </ul>
                                            
                
            </div>
            <div class="informacoes">
                                        <ul>
                                            <li><img src="../icons/area (1).png" alt="Area">Área
                                                <hr>
                                                <p><?=$imovel[0]['Area']?></p>
                                            </li>
                                            <li><img src="../icons/double-bed.png" alt="Quantidade Quartos">Quartos
                                                <hr>
                                                <p><?=$imovel[0]['NumeroQuartos']?></p>
                                            </li>
                                            <li><img src="../icons/bathroom.png" alt="Quantidade Banheiros">Banheiros
                                                <hr>
                                                <p><?=$imovel[0]['NumeroBanheiros']?></p>
                                            </li>
                                            <li><img src="../icons/garage.png" alt="Vagas Garagem">Vagas Garagem
                                                <hr>
                                                <p><?=$imovel[0]['NumeroVagasGaragem']?></p>
                                            </li>
                                        </ul>
        </div>
   

        

     
       
      

    </main>

</body>

</html>