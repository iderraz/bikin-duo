@extends('backoffice.template.mainback')
@section('backpage')

<div class="container">

    <p>ID : {{ ($titre->id) }}</p>
    <p>titre : {{ ($titre->titre) }}</p>
    <p>description_1 : {{ ($titre->description) }}</p>


</div>
    
@endsection