<link href="{{ asset('Style/login.css') }}" rel="stylesheet">

@extends('estrutura.layout')
@section('title', 'Cultmais | Login')

@section('conteudo')
        
    <div class="d-flex justify-content-center align-items-center" style='height: 100vh; color:aliceblue'>

        @if($mensagem = Session::get('erro'))
        {{$mensagem}}
        @endif
        
        @if($errors->any())
            @foreach($errors->all() as $error)
            {{ $error }} <br>
            @endforeach
        @endif
  
        <form style='width: 80vh; padding: 120px; border-radius:3%; color:aliceblue' action="{{ route('login.auth') }}" method="POST">

            @csrf

            <a href="{{ route('home') }}">
                <img src="{{ asset('Img/logo_atualizada.png') }}" alt="Cultmais" class="img-fluid" style="width: 46%;"> <br> <br> <br> <br>
            </a>

            <h1 style='color:rgb(216, 215, 214); font-size: 27px;'>Login de Empresa</h1> <br>

            <div class="form-group">

                <label for="exampleInputEmail1">Endereço de email</label>
                <input type="email" class="form-control bg-light border-dark" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                
            </div>

            <div class="form-group">

                <label for="exampleInputPassword1">Senha</label>
                <input type="password" name="password" class="form-control bg-light border-dark" id="exampleInputPassword1" placeholder="Senha">
            
            </div>

            <p>Ainda não é cadastrado? <a class="link-opacity-100" href="{{ route('user.create') }}">Cadastre-se aqui</a></p>

            <button type="submit" class="btn btn-outline-dark">Entrar</button>

        </form>

    </div>

@endsection