@extends('layouts.app')

@section('content')
    

        <div class="container mt-5" >
            <div class="row justify-content-center">
                <div class="col-md-5" style="margin-top: 25%">
                    <div class="card">
                        <div class="card-header text-center"><h2> TIPMP Login </h2></div>
        
                        <div class="card-body">
                            <form method="post" action="{{ route('auth') }}">
                                @csrf
        
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                </div>
        
                                <div class="form-group">
                                    <label for="password">Senha</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
        
                                
        
                                <button type="submit" class="btn btn-primary">Entrar</button>
        
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection
