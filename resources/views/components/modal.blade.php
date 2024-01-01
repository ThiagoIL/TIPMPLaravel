<!-- Button to Open the Modal -->


<!-- The Modal -->
<div class="modal fade" id="myInsert">
    <div class="modal-dialog">
        <div class="modal-content">


            <!-- Modal Header -->

            <div class="modal-header">
                <h4 class="modal-title ">Adicionar Tarefa</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('add') }}" method="post">
                    @csrf
                    <label for="nome">Titulo:</label>
                    <input type="text" class="form-control" name="name" required>

                    <label for="Prioridade">Prioridade?</label>
                    <div class=" form-group border" style="padding: 10px; ">

                        <div>
                            <input type="radio" name="radiocheck" id="sim" value="1">
                            <label for="sim"> Sim </label>
                        </div>
                        <div>
                            <input type="radio" name="radiocheck" id="nao" value="0" checked>
                            <label for="nao"> Não </label>
                        </div>

                    </div>


                    <label for="descricao">Descrição:</label>
                    <textarea name="description" class="form-control" cols="30" rows="10" required></textarea>

                    <div class="p-2 row ">
                        <div class="p-2 ml-auto">
                            <button class="btn btn-success">Adicionar</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

            </div>

        </div>
    </div>
</div>
