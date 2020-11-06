<?php
// conexão Banco de Dados
include_once 'php_action/conecta_bd.php';

// Chamando cabeçalho
include_once 'includes/header.php';
// Chamando menu
include_once 'includes/menu.php';
?>

<section>
    <div class="container">
        <h3 class="text-center text-dark mb-4">Categorias:</h3>

        <article>
            <h3 class="mb-3 pb-3 border-bottom">
                <a href="look.php" class="text-dark">
                    Look
                </a>
            </h3>

            <div class="row">
                <div class="col-md-12 col-lg-4 mb-1">
                        <a href="look.php">
                            <img src="assets/img/m1" class="img-fluid rounded" alt="">
                        </a>
                </div>

                <div class="col-md-12 col-lg-8 mb-1">
                    <p>Aqui você irá encontrar posts relacionados aos looks usados pela Michelle Póvoa.</p>
                </div>
            </div>
        </artile>

        <article>
            <h3 class="mt-3 mb-3 pb-3 border-bottom">
                <a href="maquiagem.php" class="text-dark">
                    Maquiagem
                </a>
            </h3>

            <div class="row">
                <div class="col-md-12 col-lg-4 mb-1">
                        <a href="maquiagem.php">
                            <img src="assets/img/b1" class="img-fluid rounded" alt="">
                        </a>
                </div>

                <div class="col-md-12 col-lg-8 mb-1">
                    <p>Aqui você irá encontrar posts relacionados sobre as maquiagens feitas e usadas pela Bianca Martins.</p>
                </div>
            </div>
        </artile>

    </div>
</section>

<?php
include_once 'includes/footer.php';
?>