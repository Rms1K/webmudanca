<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Resultados da Pesquisa</title>
    
</head>

<body>

    <h1>Resultados da Pesquisa</h1>

    <?php
    // Recuperar os parâmetros da URL
    $aluguel_venda = $_GET['aluguel_venda'] ?? null;
    $tipoImovel = $_GET['tipoImovel'] ?? null;
    $enderecoImovel = $_GET['enderecoImovel'] ?? null;

    // Realizar a lógica de pesquisa com base nos parâmetros
    $enderecoModel = new \App\Models\imovelModel();
    $imovelPesquisa = $enderecoModel->getIdImovelBarraPesquisa($aluguel_venda, $tipoImovel, $enderecoImovel);

    // Exibir os resultados
    if ($imovelPesquisa) {
        foreach ($imovelPesquisa as $imovel) {
            echo '<div>';
            echo '<h2>' . ucfirst($imovel['Tipo']) . ' - ' . ucfirst($imovel['Aluguel_Venda']) . '</h2>';
            // Adicione aqui a exibição de outras informações do imóvel
            echo '</div>';
        }
    } else {
        echo '<p>Nenhum resultado encontrado.</p>';
    }
    ?>

</body>

</html>
