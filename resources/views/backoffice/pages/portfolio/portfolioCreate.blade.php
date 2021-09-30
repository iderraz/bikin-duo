@extends('backoffice.template.mainback')
@section('backpage')
    
<div class="container">

    <h1 class="text-center my-3">Créer portfolio</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('portfolio.store') }}" method="post" enctype="multipart/form-data">
    @csrf

        <div class="mb-3">
            <label class="form-label">description :</label>
            <input class="form-control" name="description" value="{{ old('description') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">URL</label>
            <input class="form-control" type="file" name="url">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>

</div>

@endsection