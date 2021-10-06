@extends('backoffice.template.email')

@section('content')

    <p>{{ $contenuMail['name'] }}</p>
    <p>{{ $contenuMail['email'] }}</p>
    <p>{{ $contenuMail['subject'] }}</p>
    <p>{{ $contenuMail['message'] }}</p>

    <p>design Mathafacccccck</p>

@endsection
