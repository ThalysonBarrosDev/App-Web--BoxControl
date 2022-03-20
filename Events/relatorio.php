<?php 

    require ('../App/Service/recebFunctions.php');
    require ('../App/Service/errorEncode.php');
    require ('../Views/verifica.php');

    if (isset($_SESSION['idUserSession']) && !empty($_SESSION['idUserSession'])):

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/img/fluxo-de-caixa.png" type="image/x-icon">
    <title>BoxControl - Relatórios</title>
</head>
<body class="bg-dark">
    
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom bg-dark">
            <a href="home.php" class="d-flex align-items-center text-light text-decoration-none">
                <span class="fs-4">BoxControl</span>
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-light text-decoration-none" href="home.php">Home</a>
                <a class="me-3 py-2 text-light text-decoration-none" href="recebimentos.php">Recebimentos</a>
                <a class="me-3 py-2 text-light text-decoration-none" href="pagamentos.php">Pagamentos</a>
                <a class="me-3 py-2 text-light text-decoration-none" href="relatorio.php">Relatórios</a>
                <label class="mr-3 text-light" style="margin-top: 8px; margin-left: 5px;"><?php echo '|&nbsp;&nbsp; Olá, '. $nameLogged ?></label>
                <a class="btn btn-outline-primary my-2 my-sm-0" style="margin-left: 15px;" href="../views/logout.php">Sair</a>
            </nav>
        </div>
    </header>

    <main>
        <h4 style="color: white; text-align: center;">Extração de Relatórios</h4><br>
        <h6 style="color: white; text-align: center;">Informe o periodo do relatório. Exemplo: 01/01/1900 à 31/01/1900 </h6><br><br>

        <form class="form-inline" method="POST" action="#">
            <div class="form-group mb-2">
                <select class="form-control" id="exampleFormControlSelect1" style="text-align: center;" required>
                    <option>Tipo de Titulo</option>
                    <option value="P">Titulos de Pagamento</option>
                    <option value="R">Titulos de Recebimento</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <input type="date" class="form-control" name="data_inicial" value="<?php echo date("Y-m-01") ?>" required>
            </div>
            <div class="form-group mb-2">
                <input type="date" class="form-control" name="data_final" value="<?php echo date("Y-m-t") ?>" required>
            </div>
            <br><button type="submit" class="btn btn-primary mb-2 text-center" style="display: block; margin: 0 auto;">Extrair Relatório</button>
        </form><br><br><br><br>
    </main>

    <footer>
        <div class="text-center p-3 text-light"><a href="https://www.althdevelopment.com" target="_blank">AlthDevelopment</a> © <?php echo date('Y'); ?></div>
    </footer>

    <script src="../assets/js/main.js"></script>

</body>
</html>

<?php else: header("Location: ../index.php"); endif; ?>