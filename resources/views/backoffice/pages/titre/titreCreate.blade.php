@extends('backoffice.template.mainback')
@section('backpage')

<h2 class="tracking-in-expand">Espace Création </h2>


<div class="container mt-5">



    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('titre.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    
        <div class="mb-3">
            <label class="form-label">titre :</label>
            <input type="text" class="form-control" type="text" name="titre" value="{{ old('titre') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">description :</label>
            <input type="text" class="form-control" type="text" name="description" value="{{ old('description') }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>

</div>
    
@endsection