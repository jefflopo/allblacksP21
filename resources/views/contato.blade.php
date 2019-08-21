@extends('layouts.app')
@section('title', 'Contato com All Blacks')
@section('content')
	<h1>Entrar em Contato com a All Blacks</h1>
	<h2 class="mb-3">Entre em contato agora mesmo</h2>
        
        @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
        @endif
        @if(count($errors) > 0)
        <div class="alert alert-danger"
             <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
	<form method="POST" action="{{url('contato/enviar')}}">
            @csrf
            <div class="form-group mb-3">
                <div class="col">
                    <label for="nome">NOME</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu Nome" required>
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="col">
                    <label for="email">E-MAIL</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite o E-mail" required>
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="col">
                    <label for="assunto">ASSUNTO</label>
                    <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Digite o Assunto" required>
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="col">
                    <label for="mensagem">MENSAGEM</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Digite a Mensagem a ser enviada!" required></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
            <a class="btn btn-danger" href="{{URL::to('torcedores')}}">Cancelar</a>
            
	</form>
        
@endsection
