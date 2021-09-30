@extends('backoffice.template.mainback')
@section('backpage')

<div class="container">

    <p>ID : {{ ($section2->id) }}</p>
    <p>contenu : {{ ($section2->contenu) }}</p>

</div>
    
@endsection