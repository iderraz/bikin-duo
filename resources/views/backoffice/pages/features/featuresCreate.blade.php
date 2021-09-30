@extends('backoffice.template.mainback')
@section('backpage')
    
<div class="container">

    <h1 class="text-center my-3">Créer feature</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('feature.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    
        <div class="mb-3">
            <label class="form-label">titre :</label>
            <input type="text" class="form-control" type="text" name="titre" value="{{ old('titre') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">description_1 :</label>
            <input type="text" class="form-control" type="text" name="description_1" value="{{ old('description_1') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">description_2 :</label>
            <input class="form-control" name="description_2" value="{{ old('description_2') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">URL</label>
            <input class="form-control" type="file" name="url">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>

</div>

@endsection