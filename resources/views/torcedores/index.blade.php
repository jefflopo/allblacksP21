@extends('layouts.app')
@section('title', 'Torcedores Cadastrados')
@section('content')
<h1 class="text-center">Torcedores</h1>


<div class="row">
    <div class="col-md-12">
        <form method="POST" action='{{url('torcedores/busca')}}'>
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="busca" name="busca" placeholder="Pesquise por Nome, Documento ou E-mail" value="{{$buscar}}">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary">Buscar</button> 
                     
                </div>
            </div>
            @if(Auth::check())
            <div class="input-group mb-3">
                <a class="btn btn-primary" href="{{URL::to('torcedores')}}/create">Novo Cadastro</a>
            </div>
            @endif
        </form>
    </div>
</div>

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
                        @if(Auth::check())
                        <th>Ações</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                        @foreach ($torcedores as $torcedor)
                        <tr>
                                <td>{{$torcedor->id}}</td>
                                <td>{{$torcedor->nome}}</td>
                                <td>{{$torcedor->documento}}</td>
                                <td>{{$torcedor->endereco}}</td>
                                <td>{{$torcedor->cidade}}</td>
                                <td>{{$torcedor->uf}}</td>
                                <td>{{$torcedor->telefone}}</td>
                                <td>{{$torcedor->email}}</td>
                                <td>@if($torcedor->ativo == 1 ) SIM @else NÃO @endif</td>
                                @if(Auth::check())
                                <td>
                                    <form method="POST" action="{{action('TorcedoresController@destroy', $torcedor->id)}}">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <a class="btn btn-primary" href="{{URL::to('torcedores')}}/{{$torcedor->id}}">Visualizar</a>
                                        <a class="btn btn-secondary" href="{{URL::to('torcedores')}}/{{$torcedor->id}}/edit">Editar</a>
                                        <button class="btn btn-danger">Excluir</button>
                                    </form>
                                </td>
                                @endif
                        </tr>
                        @endforeach

                </tbody>
        </table>
{{$torcedores->links()}}
        
@endsection
