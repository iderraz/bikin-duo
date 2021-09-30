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

    </form>

</div>
    
@endsection