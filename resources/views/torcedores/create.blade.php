@extends('layouts.app')
@section('title', 'Inserir Torcedor')
@section('content')
	<h1>Inserção de Dados do Torcedor</h1>
	<h2 class="mb-3">Cadastrar Novo Torcedor</h2>
        
	<form method="POST" action="{{url('torcedores')}}">
            @csrf
        <div class="form-row">
            <div class="col">
                <label for="nome">NOME</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o Nome do Torcedor" required>
            </div>
            <div class="col">
                <label for="documento">DOCUMENTO</label>
              <input type="text" class="form-control" id="documento" name="documento" placeholder="Digite o Número do Documento..." required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
              <label for="cep">CEP</label>
              <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o CEP...">
            </div>
            <div class="form-group col-md-6">
              <label for="endereco">ENDEREÇO</label>
              <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o Endereço...">
            </div>
            
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
              <label for="bairro">BAIRRO</label>
              <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o Bairro...">
            </div>
            <div class="form-group col-md-6">
              <label for="cidade">CIDADE</label>
              <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a Cidade...">
            </div>
            <div class="form-group col-md-4">
              <label for="uf">UF</label>
              <input type="text" class="form-control" id="uf" name="uf" placeholder="Digite a UF...">
            </div>
            
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
              <label for="telefone">TELEFONE</label>
              <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o Telefone...">
            </div>
            <div class="form-group col-md-6">
              <label for="email">E-MAIL</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Digite o E-mail...">
            </div>
            
        </div>
        
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="ativoCheck" value="1" id="ativoCheck">
          <label class="form-check-label" for="ativoCheck">
            Ativo
          </label>
        </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Cadastrar Torcedor</button>
                <a class="btn btn-danger" href="{{URL::to('torcedores')}}">Cancelar</a>
            </div>
            
	</form>
        
@endsection
