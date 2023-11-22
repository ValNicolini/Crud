<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="?page=novo">Novo Usuário</a>
                    <a class="nav-link" href="?page=listar">Listar Usuários</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                require_once 'conexao.php';
                switch (@$_REQUEST['page']) {
                    case 'novo':
                        require_once 'novo_usuario.php';
                        break;
                    case 'listar':
                        require_once 'listar_usuarios.php';
                        break;
                        case 'salvar':
                            require_once 'salvar_usuario.php';
                            break;
                            case 'editar':
                                require_once 'editar.php';
                                break;
                    default:
                        echo "<h2>Bem Vindos!</h2>";
                }
                ?>
            </div>

        </div>

    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>