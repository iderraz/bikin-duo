@extends('backoffice.template.mainback')
@section('backpage')

<h2 class="tracking-in-expand">Espace Création </h2>
<div id="contactcreate" class="container">


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contact.store') }}" method="post">
    @csrf
    
        <div class="mb-3">
            <label class="form-label">titre :</label>
            <input type="text" class="form-control" type="text" name="titre" value="{{ old('titre') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">icone :</label>
            <input type="text" class="form-control" type="text" name="icone" value="{{ old('icone') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">contenu :</label>
            <input class="form-control" name="contenu" value="{{ old('contenu') }}">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>

      </form>

</div>
    
@endsection