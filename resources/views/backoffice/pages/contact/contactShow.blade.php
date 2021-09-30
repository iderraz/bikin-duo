@extends('backoffice.template.mainback')
@section('backpage')

<div class="container">

    <p>ID : {{ ($contact->id) }}</p>
    <p>titre : {{ ($contact->titre) }}</p>
    <p>contenu : {{ ($contact->contenu) }}</p>
    <p>icone : {{ ($contact->icone) }}</p>

</div>
    
@endsection