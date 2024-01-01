<a href="{{ route('logout') }}"><button class="btn btn-danger logout-button">Sair</button></a>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ route('index') }}">TI PMP</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('index') }}">Criadas <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Em andamento</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('priority') }}">Prioridade</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('done') }}">Concluídas</a>
            </li>
        </ul>

    </div>
    <div class="p-2 ml-auto">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myInsert">Adicionar
            Tarefa</button>
    </div>
</nav>
