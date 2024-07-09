@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">ATUALIZE OS DADOS DO SEU CONTATO</h1>
            </div>
        </div>
        <form action="/contatos/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeContato">Nome:</label>
                <input type="text" class="form-control" name="nomeContato" 
                       value="{{$dados->nomeContato}}">
            </div>
            <div class="form-group">
                <label for="nomeContato">Telefone:</label>
                <input type="text" class="form-control" name="telContato" maxlength="11" onkeyup="formatarTelefone(this)"
                       value="{{$dados->telContato}}">
            </div>
            <div class="form-group">
                <label for="nomeContato">E-mail:</label>
                <input type="email" class="form-control" name="emailContato" 
                       value="{{$dados->emailContato}}">
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('indexContatos')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
@endsection
@section('javascript')
<script type="text/javascript">

    function formatarTelefone(input) {
        
        var telefone = input.value.replace(/\D/g, '');
    
        /
        telefone = telefone.replace(/(\d{2})(\d{5})(\d{4})/, '($1)$2-$3');
    
        
        input.value = telefone;
    }
</script> 
@endsection