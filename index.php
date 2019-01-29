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
        <div id="carousel-games" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagens_site/gta.jpg" class="d-block w-100" alt="GTA">
                </div>
                <div class="carousel-item">
                    <img src="imagens_site/skyrim.jpg" class="d-block w-100" alt="Skyrim">
                </div>
                <div class="carousel-item">
                    <img src="imagens_site/spiderman.jpg" class="d-block w-100" alt="Miranha">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-games" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-games" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <section id="lancamentos" class="section_lancamentos col-md-12">
            <div class="div_lancamentos container">
                <div class="div_title_section col-md-12">
                    <h2 class="h2_title_section">Lançamentos</h2>
                    <div class="row">
                        <div class="item col-md-3">
                            <img class="foto col-md-12" src="imagens_site/lancamentos/1.png">
                            <img class="descricao col-md-12" src="imagens_site/lancamentos/1-1.png">
                        </div>

                        <div class="item col-md-3">
                            <img class="foto col-md-12" src="imagens_site/lancamentos/2.jpg">
                            <img class="descricao col-md-12" src="imagens_site/lancamentos/2-2.png">
                        </div>

                        <div class="item col-md-3">
                            <img class="foto col-md-12" src="imagens_site/lancamentos/3.jpg">
                            <img class="descricao col-md-12" src="imagens_site/lancamentos/3-1.png">
                        </div>

                        <div class="item col-md-3">
                            <img class="foto col-md-12" src="imagens_site/lancamentos/4.jpg">
                            <img class="descricao col-md-12" src="imagens_site/lancamentos/4-1.png">
                        </div>

                        <div class="item col-md-3">
                            <img class="foto col-md-12" src="imagens_site/lancamentos/5.jpg">
                            <img class="descricao col-md-12" src="imagens_site/lancamentos/5-1.png">
                        </div>

                        <div class="item col-md-3">
                            <img class="foto col-md-12" src="imagens_site/lancamentos/6.jpg">
                            <img class="descricao col-md-12" src="imagens_site/lancamentos/6-1.png">
                        </div>

                        <div class="item col-md-3">
                            <img class="foto col-md-12" src="imagens_site/lancamentos/7.jpg">
                            <img class="descricao col-md-12" src="imagens_site/lancamentos/7-1.png">
                        </div>

                        <div class="item col-md-3">
                            <img class="foto col-md-12" src="imagens_site/lancamentos/8.jpg">
                            <img class="descricao col-md-12" src="imagens_site/lancamentos/8-1.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section_destaques" col-md-12">
            <div class="div_destaques container">
                <div class="div_title_section col-md-12">
                    <h2 class="h2_title_section">Destaque</h2>
                </div>
            </div>
        <?php
            include_once "include/script.php";
        ?>
    </body>
</html>

