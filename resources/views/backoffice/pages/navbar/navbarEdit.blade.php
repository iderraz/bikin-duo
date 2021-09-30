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

    <form action="{{ route('navbar.update', $navbar->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")

        <div class="mb-3">
            <label class="form-label">contenu :</label>
            <input type="text" class="form-control" type="text" name="contenu" value="{{ $navbar->contenu }}">
        </div>

        <button class="btn btn-success w-25 mt-3 text-dark" type="submit">Modifier</button>

    </form>

</div>
    
@endsection