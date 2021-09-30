@extends('backoffice.template.mainback')
@section('backpage')

<div class="container">

    <p>ID : {{ ($portfolio->id) }}</p>
    <p>description : {{ ($portfolio->description) }}</p>
    <p>url : {{ ($portfolio->url) }}</p>

</div>
    
@endsection