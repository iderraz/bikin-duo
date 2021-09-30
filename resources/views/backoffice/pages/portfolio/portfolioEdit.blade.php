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

    <form action="{{ route('portfolio.update', $portfolio->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")

        <div class="mb-3">
            <label class="form-label">description_2 :</label>
            <input class="form-control" name="description" value="{{ $portfolio->description }}">
        </div>
        
        <div class="mb-3">
            <label class="form-label">URL</label>
            <input class="form-control" type="file" name="url">
        </div>

        <button class="btn btn-success w-25 mt-3 text-dark" type="submit">Modifier</button>
        
    </form>

</div>
    
@endsection