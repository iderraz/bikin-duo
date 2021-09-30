@extends('backoffice.template.mainback')
@section('backpage')

<div class="container">

    <p>ID : {{ ($feature->id) }}</p>
    <p>titre : {{ ($feature->titre) }}</p>
    <p>description_1 : {{ ($feature->description_1) }}</p>
    <p>description_2 : {{ ($feature->description_2) }}</p>
    <p>url : {{ ($feature->url) }}</p>


</div>
    
@endsection