@extends('backoffice.template.mainback')
@section('backpage')
    
<div class="container">

    <p>ID : {{ ($footerBottom->id) }}</p>
    <p>titre : {{ ($footerBottom->titre) }}</p>
    <p>emoji : {{ ($footerBottom->icone) }}</p>

</div>

@endsection