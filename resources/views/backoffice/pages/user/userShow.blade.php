@extends('backoffice.template.mainback')
@section('backpage')

<div class="container">

    <p>ID : {{ ($user->id) }}</p>
    <p>name : {{ ($user->name) }}</p>
    <p>email : {{ ($user->email) }}</p>
    <p>password : {{ ($user->password) }}</p>
    <p>role : {{ ($user->role->role) }}</p>


</div>
    
@endsection