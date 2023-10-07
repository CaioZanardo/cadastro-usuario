@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Usuário</h2>
    <form method="post" action="{{ route('usuarios.update', $usuario->id) }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ $usuario->nome }}" required>
    </div>
    
    <div class="form-group">
        <label for="cpf">CPF:</label>
        <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $usuario->cpf }}" required>
    </div>

    <div class="form-group">
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="{{ $usuario->data_nascimento }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection