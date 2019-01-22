<html lang="pt-br">
    <?php
        include_once "include/head.php";
    ?>
<body>
<header class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="col-md-10">
                <img id="logo" src="imagens_site/logo.png">
            </div>
        </div>
        <div id="barra" class="col-md-4">
            <form action="">
                <input id="barraPesquisa" class="form-control" type="text" placeholder="Pesquisar no Site">
            </form>
        </div>
    </div>
</header>
<nav class="container-fluid navbar navbar-expand-lg navbar-light navhome">
    <a class="navbar-brand inicio" href="#">Início</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Lançamentos<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Destaques</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Consoles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Mais Vendidos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contato</a>
            </li>
        </ul>
    </div>
</nav>
<?php
    include_once "include/script.php";
?>
</body>
</html>
