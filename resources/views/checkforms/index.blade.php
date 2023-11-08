@extends('layouts.app')
@section('title', 'show records')

@section('content')


<div class="position-relative" style = 'margin-top: 30px;'>
    <div class="position-absolute top-0 start-50 translate-middle-x">
        <a href="/forms/create" class="btn btn-primary">Insertar nuevo registro</a>
        
    </div>
</div>
@include('checkforms.cards')

@endsection