<div class = 'container'>
<div class = 'row' >
    @foreach ( $forms as $form )  
        <div class = 'col-sm'>
            <div class="card text-center" style="width: 18rem; margin-top: 50px;">
                <div class="card-body">
                    <h5 class="card-text">{{substr($form->created_at,0,10)}}</h5>
                    <p class="card-text">No. Horas: {{$form->horas}}</p>
                    <p class = 'card-text'>Nivel de combustible: {{$form->combustible}}%</p>
                    <p class = 'card-text'>Nivel de aceite: {{$form->aceite}}%</p>
                    <p class = 'card-text'>Nivel de refrigerante: {{$form->refrigerante}}%</p>
                    <a href="/forms/{{$form->id}}" class="btn btn-primary">Ver mas....</a>
                </div>
            </div>  
        </div>
    @endforeach
</div>
</div>