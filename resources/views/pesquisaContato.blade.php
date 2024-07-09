@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <form action="{{route('procurarContato')}}" method="GET">
            @csrf
            <div class="form-group">
                <label for="nomeContato">Nome do Contato</label>
                <input type="text" class="form-control" name="nomeContato" 
                    placeholder="Informe o nome do contato para pesquisar">
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Pesquisar</button>
            <button onclick="window.location.href='{{route('indexContatos')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
@endsection