@extends('layouts.app')
@section('title', 'create checkforms')

@section('content')
    <div class = 'text-center'>
        <h2>Planta de emergencia</h2>
        <h3>formato de revision</h3>
    </div>

    @if ($errors->any())
    <div class = 'alert alert-danger'>
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach        
        </ul>
    </div>
    @endif

    <form class ='form_group' action="/forms" method="POST" enctype = 'multipart/form-data'>
    
        @csrf
        <div class = 'container'>       
        <div class = "form-group">
            <label for="">Nombre de encargado</label>
            <input type="text" name = "name"  class = "form-control">
        </div>
        <div class = "form-group">
            <label for="">Numero de horas</label>
            <input type="number" name = "hours"  class = "form-control">
        </div>
        <div class = "form-group">
            <label for="">Carga de bateria</label>
            <input type="number" step ='any' name = "bateria"  class = "form-control">
        </div>
        <div>
            <label>
                <input type="checkbox" name = 'arranque'>
                Prueba de arranque
            </label>
        </div>
        <div>
            <label>
                <input type="checkbox" name = 'automatico'>
                Prueba de encendido automatico
            </label>
        </div>

        <div>
            <label for="">Nivel de combustible</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="combustible" id="inlineRadio1" value="100">
            <label class="form-check-label" for="inlineCheckbox1">100%</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="combustible" id="inlineRadio2" value="75">
            <label class="form-check-label" for="inlineCheckbox2">75%</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="combustible" id="inlineRadio3" value="50">
            <label class="form-check-label" for="inlineCheckbox2">50%</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="combustible" id="inlineRadio3" value="25">
            <label class="form-check-label" for="inlineCheckbox2">25%</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="combustible" id="inlineRadio3" value="0">
            <label class="form-check-label" for="inlineCheckbox2">0%</label>
        </div>
        
        
        <div>
            <label for="">Nivel de refrigerante</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="refrigerante" id="inlineRadio1" value="100">
            <label class="form-check-label" for="inlineCheckbox1">100%</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="refrigerante" id="inlineRadio2" value="75">
            <label class="form-check-label" for="inlineCheckbox2">75%</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="refrigerante" id="inlineRadio3" value="50">
            <label class="form-check-label" for="inlineCheckbox2">50%</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="refrigerante" id="inlineRadio3" value="25">
            <label class="form-check-label" for="inlineCheckbox2">25%</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="refrigerante" id="inlineRadio3" value="0">
            <label class="form-check-label" for="inlineCheckbox2">0%</label>
        </div>
    
        <div>
            <label for="">Nivel de aceite</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aceite" id="aceite_1" value="100">
            <label class="form-check-label" for="inlineCheckbox1">100%</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aceite" id="aceite" value="75">
            <label class="form-check-label" for="inlineCheckbox2">75%</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aceite" id="aceite" value="50">
            <label class="form-check-label" for="inlineCheckbox2">50%</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aceite" id="aceite" value="25">
            <label class="form-check-label" for="inlineCheckbox2">25%</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aceite" id="aceite" value="0">
            <label class="form-check-label" for="inlineCheckbox2">0%</label>
        </div>

        <div class = "form-group">
            <label for="">Foto</label>
            <input type="file" name = "status" >
        </div>

        <div>
        <button type="submit" class="btn btn-primary" style = 'margin-top: 10px'>Submit</button>
        </div>

        </div>
    </form>
@endsection