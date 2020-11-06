<!-- Modal -->
<div class="modal fade" id="edit_post_look" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 style="color: #000;" class="modal-title" id="exampleModalLongTitle">EDITE AS INFORMAÇÕES DESEJADAS:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="color: #000;">
                <form action="php_action/update.php" method="POST">

                    <!-- Com o type="hidden" o input fica invisível -->
                    <input type="hidden" name="id" value="<?= $dados['id']; ?>">

                    Título:<br>
                    <input type="text" name="titulo" value="<?= $dados['titulo']; ?>"><br><br>

                    Descrição:<br>
                    <input type="text" name="descricao" value="<?= $dados['descricao']; ?>"><br><br>

                    Localização:<br>
                    <input type="text" name="localizacao" value="<?= $dados['localizacao']; ?>"><br><br>


                    <button type="submit" name="btn-edit-makeup" class="btn btn-success">Atualizar</button>

                    <button class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>

                </form>
            </div>
            
        </div>
    </div>
</div>