@extends('layouts.app')

@section('content')
    <div class="tasks-container">
        <h1>
            <center>ATUALIZAR TAREFA</center>
        </h1>
        <form action="{{ route('update') }}" method="post">
            @csrf
            <div class="container">

                <div class="form-group p-2">
                    <div class="row">
                        <input type="hidden" name="id" value="{{ $demands->id }}">
                        <label for="nome" class="form-label"><b>Título</b></label>
                        <input type="text" class="form-control" name="name" value="{{ $demands->name }}">
                    </div>
                </div>

                <div class="form-group p-2">
                    <div class="row">
                        <label for="Prioridade"><b>Prioridade?</b></label>
                    </div>


                    @if ($demands->priority)
                        <div class="col">
                            <div class="row">
                                <div class="form-group">
                                    <input type="radio" name="radiocheck" id="sim" value="1" checked>
                                    <label for="sim"> Sim </label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <input type="radio" name="radiocheck" id="nao" value="0">
                                    <label for="nao"> Não </label>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col">
                            <div class="row">
                                <div class="form-group">
                                    <input type="radio" name="radiocheck" id="sim" value="1">
                                    <label for="sim"> Sim </label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <input type="radio" name="radiocheck" id="nao" value="0" checked>
                                    <label for="nao"> Não </label>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>

                <div class="form-group p-2">
                    <div class="row">
                        <label for="descricao"><b>Descrição:</b></label>
                        <textarea name="description" id="descricao" cols="30" rows="10" class="form-control">{{ $demands->description }}</textarea>
                    </div>
                </div>

                <div class="p-2 row ">
                    <div class="p-2 ml-auto">
                        <a href="/"><button class="btn btn-danger">Cancelar</button></a>
                        <button class="btn btn-success">Atualizar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
