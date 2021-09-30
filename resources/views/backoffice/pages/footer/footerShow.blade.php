@extends('backoffice.template.mainback')
@section('backpage')

<div class="container">

    <p>ID : {{ ($feature->id) }}</p>
    <p>links : {{ ($feature->links) }}</p>
    <p>services : {{ ($feature->services) }}</p>

</div>
    
@endsection