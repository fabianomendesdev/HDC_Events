@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<h1>Tela de produtos</h1>

    @if ($busca != '')
    <p>O usuário está buscando por: {{ $busca }} e o nome: {{ $nome }}</p>
    @endif
    
@endsection