<div class="dropdown">
    <button class=" btn btn-light dropdown-toggle logout-button" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" ><i class="bi bi-person-circle"></i></button>

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><h5 class="dropdown-item" >Ola, {{Auth::user()->name}}</h5></li>
        <li><a class="dropdown-item" href="{{ route('logout') }}"><button class="btn btn-danger"> sair </button></a></li>
      </ul>
</div>

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
