@extends('backoffice.template.mainback')
@section('backpage')


<h2 class="tracking-in-expand page-section-heading text-center text-uppercase py-5">Modifier Testimonial</h2>

    <section class="container rounded text-white py-5 w-75 d-flex justify-content-center">

        @if ($errors->any())
        <div class="container alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form id="chefo" class="d-flex flex-column w-75" enctype="multipart/form-data" action="{{ route('testimonial.update', $testimonial->id) }}" method="post">
            @csrf
            @method('PUT')


    <div class="d-flex flex-column bd-highlight mb-3">

        @can('editeur')
        
        <label class="text-dark" for="nom">Nom  : </label>
        <input name="nom" id="nom" value="{{ $testimonial->nom }}">

        <label class="text-dark" for="url">Url: </label>
        <input class="text-dark" type="file" value="{{$testimonial->url}}" name="url" id="url">

        <label class="text-dark" for="fonction">Fonction  : </label>
        <input name="fonction" id="fonction" value="{{ $testimonial->fonction }}">

        @endcan

        <label class="text-dark" for="description">description  : </label>
        <input name="description" id="description" value="{{ $testimonial->description }}">

    </div>
            <button class="btn btn-success w-25 mt-3 text-dark" type="submit">Modifier</button>
        </form>
    </section>

    
@endsection