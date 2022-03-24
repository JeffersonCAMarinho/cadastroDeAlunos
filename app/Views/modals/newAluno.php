<!-- Modal Dados Simulção -->
<div class="modal fade" id="newAluno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="body_status_modal">
        
        <form method="POST" action="<?=base_url('aluno/saveAluno')?>" enctype="multipart/form-data" id="newAluno">
          <input type="file" name="my_image" class="form-control">
          <div class="form-group">
            <label for="nome">Nome</label>
            <input class="form-control" name="nome" id="nome" required="" rows="2"></input>
            <label for="endereco">Endereco</label>
            <input class="form-control" name="endereco" id="endereco" required="" rows="3"></input>
          </div>
          
              
            <div class="modal-footer col-md-12">
              <button type="submit" id="" class="btn btn-primary">Salvar</button>
            </div>
          </form>
          <div class="form-row">
            <div class="form-group col-9"></div>
          </div>
          
        </div>
        <div class="modal-footer col-md-12">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  
  </script>