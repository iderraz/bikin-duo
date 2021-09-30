@extends('backoffice.template.mainback')
@section('backpage')

<div class="container">

    <p>ID : {{ ($contact_emoji->id) }}</p>
    <p>titre : {{ ($contact_emoji->titre) }}</p>
    <p>description_1 : {{ ($contact_emoji->description) }}</p>
    <p>description_2 : {{ ($contact_emoji->icone) }}</p>

</div>
    
@endsection