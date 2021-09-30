@extends('backoffice.template.mainback')
@section('backpage')
    
<div class="container">

    <p>ID : {{ ($footerBottom->id) }}</p>
    <p>titre : {{ ($footerBottom->titre) }}</p>
    <p>description_1 : {{ ($footerBottom->description_1) }}</p>

</div>

@endsection