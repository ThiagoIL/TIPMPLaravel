<div class="container">

    <!-- Button to Open the Modal -->


    <!-- The Modal -->
    <div class="modal fade" id="myModal{{ $demand->id }}">
        <div class="modal-dialog">
            <div class="modal-content d-flex">

                <!-- Modal Header -->
                <div class="modal-header">
                    <div class="text-wrap modal-flex form-outline mb-4">
                        <div class="">
                            <h2 class="modal-title ">{{ $demand->name }}</h2>
                        </div>
                        <div>
                            @if (!$demand->done)
                                <p class="form-label text-left">Criado em:
                                    {{ $demand->created_at->formatLocalized('%d/%m/%Y às %H:%M:%S') }}</p>
                            @else
                                <p class="form-label text-left">Finalizado em:
                                    {{ $demand->updated_at->formatLocalized('%d/%m/%Y às %H:%M:%S') }}</p>
                            @endif
                        </div>
                    </div>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="text-wrap modal-flex form-outline mb-4">
                        <label class="form-label" for="textAreaExample6">Descrição</label>

                        <div class="col border ">
                            <p class="elastic" id="note{{ $demand->id }}"> {{ $demand->description }} </p>
                        </div>
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>

            </div>
        </div>
    </div>

</div>
