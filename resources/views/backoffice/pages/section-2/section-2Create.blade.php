@extends('backoffice.template.mainback')
@section('backpage')

<div class="container">

    <h1 class="text-center my-3">Créer section2</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('section2.store') }}" method="post">
    @csrf
    
        <div class="mb-3">
            <label class="form-label">contenu :</label>
            <input type="text" class="form-control" type="text" name="contenu" value="{{ old('contenu') }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>

</div>
    
@endsection