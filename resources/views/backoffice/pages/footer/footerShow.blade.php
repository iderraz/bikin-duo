@extends('backoffice.template.mainback')
@section('backpage')

<div class="container">

    <p>ID : {{ ($footer->id) }}</p>
    <p>links : {{ ($footer->links) }}</p>
    <p>services : {{ ($footer->services) }}</p>

</div>
    
@endsection