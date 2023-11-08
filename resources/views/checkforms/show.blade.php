@extends('layouts.app')
@section('title', "trainers show")

@section('content')
<div class = 'container'>
    <div class = 'row'>
        <div class = 'col-sm'>
            <div class = 'text-start'>
                <h3>Formato de revision</h3>
                <h4>{{$form->created_at}}</h4>
                <p><strong>Encargado: </strong> {{$form->name}}</p>
                <p><strong>Horas: </strong> {{$form->horas}}</p>
                <p><strong>Nivel de combustible: </strong> {{$form->combustible}}%</p>
                <p><strong>Nivel de aceite: </strong> {{$form->aceite}}%</p>
                <p><strong>Nivel de refrigerante: </strong> {{$form->refrigerante}}%</p>
                <p><strong>Voltaje de la bateria: </strong>{{$form->bateria}}V</p>
                <p><strong>Arranque: </strong>{{$form->arranque}}</p>
                <p><strong>Encendido automatico: </strong>{{$form->encendido_auto}}</p>
            </div> 
            
            </div>    
        <div class = 'col-sm'>
            <img style = "height: 300px; width: 300px; background: #EFEFEF; margin: 20px " class = 'card-img-top mx-auto d-block' src='/images/{{$form->foto}}' alt="">
        </div>
    </div>
</div>

<form class ='form_group' action="/forms/{{$form->id}}" method="DELETE" >
    @method('PUT')
    <div class = 'text-center'>
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </div>
</form>
@endsection