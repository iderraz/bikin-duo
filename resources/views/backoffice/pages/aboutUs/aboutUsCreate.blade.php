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
        <select class="selectpicker">
            <option data-content="<i class='bx bx-receipt' aria-hidden='true'</i>Option1"></option>
            <option data-content="<i class='bx bx-receipt' aria-hidden='true'</i>Option2"></option>
            <option data-content="<i class='bx bx-receipt' aria-hidden='true'</i>Option3"></option>
            <option data-content="<i class='bx bx-receipt' aria-hidden='true'</i>Option4"></option>
        </select>
        

        <label for="titre">Titre : </label>
        <input type="text" value="{{old('titre')}}" name="titre" id="titre">

        <label for="description">Description : </label>
        <input type="text" value="{{old('description')}}" name="description" id="description">

        <button class="btn btn-success mt-3 w-25" type="submit">Ajouter</button>
    </form>
</section>

@endsection