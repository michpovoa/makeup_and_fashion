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
        <?php
            $sql = "SELECT id, imagem, titulo, descricao, data FROM look";
            $resultado = mysqli_query($conecta, $sql);

            if( mysqli_num_rows($resultado) > 0 ):
                
                while($dados = mysqli_fetch_array($resultado)):
        ?>

            <article>
                <h3 class="mb-3 pb-3 border-bottom">
                    <a href="post_look.php?id=<?= $dados['id']; ?>" class="text-dark">
                        <?= $dados['titulo']; ?>
                    </a>
                </h3>

                <div class="row">
                    <div class="col-md-12 col-lg-4 mb-1">
                        <a href="post_look.php?id=<?= $dados['id']; ?>">
                            <img src="assets/img/<?= $dados['imagem']; ?>" class="img-fluid rounded" alt="">
                        </a>
                    </div>

                    <div class="col-md-12 col-lg-8 mb-1">
                        <p><?= $dados['descricao']; ?></p>
                    </div>
                </div>

                <p class="text-muted">
                    Publicado em 
                    <span class="badge badge-danger">
                        <?= $dados['data']; ?>
                    </span>.
                </p>
            </artile>

        <?php
            endwhile;
            endif;
        ?>
    </div>
</section>

<?php
include_once 'includes/footer.php';
?>