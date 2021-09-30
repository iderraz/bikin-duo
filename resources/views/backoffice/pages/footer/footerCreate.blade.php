@extends('backoffice.template.mainback')
@section('backpage')

<div class="container">

    <h1 class="text-center my-3">Créer footer</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('footer.store') }}" method="post">
    @csrf
    
        <div class="mb-3">
            <label class="form-label">services :</label>
            <input type="text" class="form-control" type="text" name="services" value="{{ old('services') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">links :</label>
            <input type="text" class="form-control" type="text" name="links" value="{{ old('links') }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>

</div>
    
@endsection