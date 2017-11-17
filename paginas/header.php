<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<header class="instituto">
    <div class="container text-left">
        <img src="../assets/img/logo.png" id="logo">
    </div>
    <br/>
    <br/>
    <div class="bg-success">
        <div class="container">
            <nav class="navbar navbar-toggleable-md navbar-inverse">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Institucional</a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Pessoa
                            </a>
                            <div class="dropdown-menu bg-success" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item bg-success" style="color: white;"
                                   href="../paginas/cadastroPessoa.php">Cadastrar</a>
                                <a class="dropdown-item bg-success" style="color: white;"
                                   href="../paginas/listarPessoa.php">Listar</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Perfil
                            </a>
                            <div class="dropdown-menu bg-success" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item bg-success" style="color: white;"
                                   href="../paginas/cadastroPerfil.php">Cadastrar</a>
                                <a class="dropdown-item bg-success" style="color: white;"
                                   href="../paginas/listarPerfil.php">Listar</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Papel
                            </a>
                            <div class="dropdown-menu bg-success" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item bg-success" style="color: white;"
                                   href="../paginas/cadastroPapel.php">Cadastrar</a>
                                <a class="dropdown-item bg-success" style="color: white;" href="../paginas/listarPapel.php">Listar</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Portaria
                            </a>
                            <div class="dropdown-menu bg-success" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item bg-success" style="color: white;"
                                   href="../paginas/cadastroPortaria.php">Cadastrar</a>
                                <a class="dropdown-item bg-success" style="color: white;"
                                   href="../paginas/listarPortaria.php">Listar</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Associação
                            </a>
                            <div class="dropdown-menu bg-success" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item bg-success" style="color: white;"
                                   href="../paginas/cadastroAssociacao.php">Cadastrar</a>
                                <a class="dropdown-item bg-success" style="color: white;"
                                   href="../paginas/listarAssociacao.php">Listar</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

</header>
<div style="margin-top: 4%;"></div>
</html>