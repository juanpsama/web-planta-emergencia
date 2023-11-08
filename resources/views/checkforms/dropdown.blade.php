<div class = 'text-center' style = 'margin-top: 10%'>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Lista de registros
  </button>
  <ul class="dropdown-menu">
    @foreach ( $forms as $form ) 
       <li><a class="dropdown-item" href="/forms/{{$form->id}}">{{substr($form->created_at,0,10)}}</a></li>
    @endforeach
  </ul>
</div>
</div>