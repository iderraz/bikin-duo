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

    <form action="{{ route('feature.update', $feature->id)}}" method="post">
        @csrf
        @method("PUT")

        <div class="mb-3">
            <label class="form-label">services :</label>
            <input type="text" class="form-control" type="text" name="services" value="{{ $feature->services }}">
        </div>
        <div class="mb-3">
            <label class="form-label">links :</label>
            <input type="text" class="form-control" type="text" name="links" value="{{ $feature->links }}">
        </div>
    </form>

</div>
    
@endsection