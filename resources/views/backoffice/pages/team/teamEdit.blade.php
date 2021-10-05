@extends('backoffice.template.mainback')
@section('backpage')

<h2 class="tracking-in-expand page-section-heading text-center text-uppercase py-5">Modifier Team</h2>

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

        <form id="team" class="d-flex flex-column w-75" enctype="multipart/form-data" action="{{ route('team.update', $team->id) }}" method="post">
            @csrf
            @method('PUT')


    <div class="d-flex flex-column">
        <label class="text-dark" for="url">Url : </label>
        <input name="url" id="url" value="{{ $team->url }}">

        <br>

        <label class="text-dark" for="nom">Nom : </label>
        <input name="nom" id="nom" value="{{ $team->nom}}">

        <br>

        <label class="text-dark" for="fonction">Fonction : </label>
        <input name="fonction" id="fonction" value="{{ $team->fonction}}">

        <br>

        <label class="text-dark" for="icone">Icône : </label>
        <input name="icone" id="icone" value="{{ $team->icone}}">


    </div>
            <button class="btn btn-success w-25 mt-3 text-dark" type="submit">Modifier</button>
        </form>
    </section>

    
@endsection