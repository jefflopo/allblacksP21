@extends('layouts.app')
@section('title', 'Edição de Dados do Torcedor - ' . $torcedor->nome)
@section('content')
	<h1>Editar Dados do Torcedor - {{$torcedor->nome}}</h1>
	<h2 class="mb-3">Atualização de Dados</h2>
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
	<form method="POST" action="{{action('TorcedoresController@update', $id)}}">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
        <div class="form-row">
            <div class="col">
                <label for="nome">NOME</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{$torcedor->nome}}" placeholder="Digite o Nome do Torcedor" required>
            </div>
            <div class="col">
                <label for="documento">DOCUMENTO</label>
              <input type="text" class="form-control" id="documento" name="documento" value="{{$torcedor->documento}}" placeholder="Digite o Número do Documento..." required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
              <label for="cep">CEP</label>
              <input type="text" class="form-control" id="cep" name="cep" value="{{$torcedor->cep}}" placeholder="Digite o CEP...">
            </div>
            <div class="form-group col-md-6">
              <label for="endereco">ENDEREÇO</label>
              <input type="text" class="form-control" id="endereco" name="endereco" value="{{$torcedor->endereco}}" placeholder="Digite o Endereço...">
            </div>
            
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
              <label for="bairro">BAIRRO</label>
              <input type="text" class="form-control" id="bairro" name="bairro" value="{{$torcedor->bairro}}" placeholder="Digite o Bairro...">
            </div>
            <div class="form-group col-md-6">
              <label for="cidade">CIDADE</label>
              <input type="text" class="form-control" id="cidade" name="cidade" value="{{$torcedor->cidade}}" placeholder="Digite a Cidade...">
            </div>
            <div class="form-group col-md-4">
              <label for="uf">UF</label>
              <input type="text" class="form-control" id="uf" name="uf" value="{{$torcedor->uf}}" placeholder="Digite a UF...">
            </div>
            
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
              <label for="telefone">TELEFONE</label>
              <input type="text" class="form-control" id="telefone" name="telefone" value="{{$torcedor->telefone}}" placeholder="Digite o Telefone...">
            </div>
            <div class="form-group col-md-6">
              <label for="email">E-MAIL</label>
              <input type="text" class="form-control" id="email" name="email" value="{{$torcedor->email}}" placeholder="Digite o E-mail...">
            </div>
            
        </div>
        
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="ativoCheck" value="1" id="ativoCheck">
          <label class="form-check-label" for="ativoCheck">
            Ativo
          </label>
        </div>
	 	
	 	<button type="submit" class="btn btn-primary">Atualizar Dados do Torcedor</button>
                <a class="btn btn-danger" href="javascript:history.go(-1)">Cancelar</a>
	</form>
@endsection
