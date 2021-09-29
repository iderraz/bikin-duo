@extends('backoffice.template.mainback')
@section('backpage')
    
<h2 class="page-section-heading text-center text-uppercase py-5">Modifier About</h2>

    <section class="container rounded text-white py-5 ">

        @if ($errors->any())
        <div class="container alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form id="chefo" class="d-flex flex-column w-75" enctype="multipart/form-data" action="{{ route('aboutUs.update', $about_emoji->id) }}" method="post">
            @csrf
            @method('PUT')


    <div>
    <h3 class="text-dark">Changement</h3>
        <label class="text-dark" for="emoji">Emoji : </label>
        <input name="emoji" id="emoji" value="{{ $about_emoji->emoji }}">

        <br>

        <label class="text-dark" for="titre">Titre : </label>
        <input name="titre" id="titre" value="{{ $about_emoji->titre}}">

        <br>

        <label class="text-dark" for="description">Description : </label>
        <input name="description" id="description" value="{{ $about_emoji->description}}">

    </div>
            <button class="btn btn-success w-25 mt-3 text-dark" type="submit">Modifier</button>
        </form>
    </section>



@endsection