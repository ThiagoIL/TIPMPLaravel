<div class="flex-column">
    <div class="p-2 row border ">

        <div class="p-2 ">

            @if ($demand->done)
                <s>{{ $demand->name }}</s>
            @else
                <p>{{ $demand->name }}</p>
            @endif
        </div>
        <div class="p-2 ml-auto ">
            <button type="button" class="btn btn btn-warning" data-toggle="modal"
                data-target="#myModal{{ $demand->id }}">Ver</button>

            @if ($demand->done)
            @else
                <a href="{{ route('make_done', [$demand->id]) }}"><button class="btn btn-primary">Feito</button></a>

                <a href="{{ route('edit', [$demand->id]) }}"><button class="btn btn-success">Editar</button></a>
            @endif
            <a href="{{ route('delete', [$demand->id]) }}"><button class="btn btn-danger">Apagar</button>
            </a>
        </div>
    </div>
</div>
