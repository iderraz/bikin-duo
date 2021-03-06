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

    <form action="{{ route('footer.update', $footer->id)}}" method="post">
        @csrf
        @method("PUT")

        <div class="mb-3">
            <label class="form-label">services :</label>
            <input type="text" class="form-control" type="text" name="services" value="{{ $footer->services }}">
        </div>
        <div class="mb-3">
            <label class="form-label">links :</label>
            <input type="text" class="form-control" type="text" name="links" value="{{ $footer->links }}">
        </div>

        <button class="btn btn-success w-25 mt-3 text-dark" type="submit">Modifier</button>

    </form>

</div>
    
@endsection