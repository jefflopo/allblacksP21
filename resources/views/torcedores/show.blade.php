@extends('layouts.app')
@section('title', 'Cadastro de {{$torcedor->nome}}')
@section('content')
	<h1>Dados do Torcedor - {{$torcedor->nome}}</h1>
        
        <table id="tableIndex" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Documento</th>
                    <th>Endereço</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Ativo?</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$torcedor->id}}</td>
                    <td>{{$torcedor->nome}}</td>
                    <td>{{$torcedor->documento}}</td>
                    <td>{{$torcedor->endereco}}</td>
                    <td>{{$torcedor->cidade}}</td>
                    <td>{{$torcedor->uf}}</td>
                    <td>{{$torcedor->telefone}}</td>
                    <td>{{$torcedor->email}}</td>
                    <td>{{$torcedor->ativo}}</td>
                </tr>

            </tbody>
        </table>
        
        <a class="btn btn-danger" href="javascript:history.go(-1)">Voltar</a>
@endsection