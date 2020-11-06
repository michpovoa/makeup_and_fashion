<?php
// conexão Banco de Dados
include_once 'php_action/conecta_bd.php';

// Chamando cabeçalho
include_once 'includes/header.php';

// Chamando menu
include_once 'includes/menu.php';

// Verificando se existe o ID na url
if( isset( $_GET['id'] ) ) {
    $id = mysqli_escape_string($conecta, $_GET['id']);

    $sql = "SELECT * FROM look WHERE id = '$id'";
    $resultado = mysqli_query($conecta, $sql);
    $dados = mysqli_fetch_array($resultado);
}
?>

<section>
    <div class="container">

        <h2 class="mb-3 mt-3 text-dark">
            <?= $dados['titulo']; ?>
        </h2>

        <div class="row">
            <p class="text-muted">
                <strong>Publicado em</strong>
                <span class="badge badge-danger">
                    <?= $dados['data']; ?>
                </span>
            </p>

            <p class="text-muted">&nbsp; |&nbsp;&nbsp;</p>

            <p class="text-muted">
                <span class="badge badge-danger">Onde encontrar:</span>
                <?= $dados['localizacao']; ?>
            </p>
        </div>

        <div class="img-post mb-3">
            <img src="assets/img/<?= $dados['imagem']; ?>" class="img-fluid rounded" alt="">
        </div>

        <div class="mb-3">
            <?= $dados['descricao']; ?>
            <br><br>
            <button class="btn btn-danger" data-toggle="modal" data-target="#edit_post_look">Editar Post</button>
        </div>

        <?php include_once 'includes/modal/look.php'; ?>

    </div>
</section>

<?php
include_once 'includes/footer.php';
?>