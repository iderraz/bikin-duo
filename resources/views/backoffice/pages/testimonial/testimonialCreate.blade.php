@extends('backoffice.template.mainback')
@section('backpage')

<h2 class="tracking-in-expand">Espace Création </h2>

<section class="container mt-5">

    @if ($errors->any())
        <div class="container alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="container d-flex flex-column w-75" action="{{route('testimonial.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <label for="nom">Nom : </label>
        <input type="text" value="{{old('nom')}}" name="nom" id="nom">

        <label for="url">Url</label>
        <input type="file" name="url" id="url" value="{{old('url')}}">

        <label for="fonction">Fonction: </label>
        <input type="text" value="{{old('fonction')}}" name="fonction" id="fonction">

        <label for="description">description : </label>
        <input type="text" value="{{old('description')}}" name="description" id="description">

        <button class="btn btn-success mt-3 w-25" type="submit">Ajouter</button>
    </form>
</section>
    
@endsection