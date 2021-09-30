@extends('backoffice.template.mainback')
@section('backpage')
    
<div class="container">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('footerBottom.update', $footerBottom->id)}}" method="post">
        @csrf
        @method("PUT")

        <div class="mb-3">
            <label class="form-label">titre :</label>
            <input type="text" class="form-control" type="text" name="titre" value="{{ $footerBottom->titre }}">
        </div>
        <div class="mb-3">
            <label class="form-label">icone :</label>
            <input type="text" class="form-control" type="text" name="icone" value="{{ $footerBottom->icone }}">
        </div>

@endsection