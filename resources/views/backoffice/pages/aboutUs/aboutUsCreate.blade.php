@extends('backoffice.template.mainback')
@section('backpage')


<h2 class="tracking-in-expand">Espace Création </h2>

<section id="aboutcreate" class="container">

    @if ($errors->any())
        <div class="container alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="container d-flex flex-column w-75" action="{{route('about.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <label for="emoji">Emoji : </label>
        <input type="text" value="{{old('emoji')}}" name="emoji" id="emoji">

        <label for="titre">Titre : </label>
        <input type="text" value="{{old('titre')}}" name="titre" id="titre">

        <label for="description">Description : </label>
        <input type="text" value="{{old('description')}}" name="description" id="description">

        <button class="btn btn-success mt-3 w-25" type="submit">Ajouter</button>
    </form>
</section>

@endsection