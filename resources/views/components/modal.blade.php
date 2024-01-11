<!-- Button to Open the Modal -->


<!-- The Modal -->
<div class="modal fade" id="myInsert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Adicionar Tarefa</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{ route('add') }}" method="post">
                    @csrf
                    <label for="nome" class="form-label">Titulo:</label>
                    <input type="text" class="form-control" name="name" required>

                    <label for="Prioridade" class="form-label">Prioridade?</label>
                    <div class="form-group border" style="padding: 10px;">

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radiocheck" id="sim" value="1">
                            <label class="form-check-label" for="sim"> Sim </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radiocheck" id="nao" value="0" checked>
                            <label class="form-check-label" for="nao"> Não </label>
                        </div>

                    </div>

                    <label for="descricao" class="form-label">Descrição:</label>
                    <textarea name="description" class="form-control" cols="30" rows="10" required></textarea>

                    <div class="p-2 row">
                        <div class="p-2 ml-auto">
                            <button class="btn btn-success">Adicionar</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">

            </div>

        </div>
    </div>
</div>

