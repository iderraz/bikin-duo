@extends('backoffice.template.mainback')
@section('backpage')

<div class="container">

    <p>ID : {{ ($navbar->id) }}</p>
    <p>contenu : {{ ($navbar->contenu) }}</p>

</div>
    
@endsection