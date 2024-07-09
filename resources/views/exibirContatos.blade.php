@extends('layout')
@section('content')
<div class="card bolder">
    @if(session()->get('danger'))
        <div class="alert alert-danger">
            {{session()->get('danger')}}
        </div><br />
    @elseif(session()->get('sucess'))
        <div class="alert alert-sucess">
            {{session()->get('sucess')}}
        </div><br />
    @endif
    <div class="card-body">
        <h5 class="card-tittle" stye="text-align:center">Cadastro de Contatos</h5>
            <table class="table table-ordened table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nome</th>
                        <th>telefone</th>
                        <th>e-mail</th>
                        <th style="text-align: center" colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dados as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{ $item->nomeContato }}</td>
                        <td>{{ $item->telContato }}</td>
                        <td>{{ $item->emailContato }}</td>
                        <td style="text-align:center">
                            <a href="/contatos/editar/{{$item->id}}" class="btn btn-outline-primary">Editar</a>
                        </td>
                        <td style="text-align:center">
                            <a href="/contatos/apagar/{{$item->id}}" class="btn btn-outline-danger" 
                               onclick="return confirm('Tem certeza de que deseja remover?');">Deletar</a>
                        </td>
                    </tr>  
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
@endsection