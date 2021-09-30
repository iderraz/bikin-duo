@extends('backoffice.template.mainback')
@section('backpage')

<div class="container">

    <h1 class="text-center my-3">Créer contact</h1>

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
            <label class="form-label">description :</label>
            <input class="form-control" name="description" value="{{ old('description') }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>

</div>
    
@endsection