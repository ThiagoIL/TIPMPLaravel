<div class="d-flex">
    <div class="p-2 row border w-100">
        <div class="d-flex flex-column flex-md-row w-100">
            <div class="p-2 div-title " >

                @if ($demand->done)
                    <s >{{ $demand->name }}</s>
                @else
                    <p >{{ $demand->name }}</p>
                @endif
            </div>
            <div class="p-2 ms-auto mt-0 mt-2">
                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                    data-bs-target="#myInsert{{ $demand->id }}">
                    Ver
                </button>

                @if (!$demand->done)
                    <a href="{{ route('make_done', [$demand->id]) }}" class="btn btn-primary">Feito</a>
                    <a href="{{ route('edit', [$demand->id]) }}" class="btn btn-success">Editar</a>
                @endif
                <a href="{{ route('delete', [$demand->id]) }}" class="btn btn-danger">Apagar</a>
            </div>
        </div>
    </div>
</div>
