@extends('backoffice.template.mainback')
@section('backpage')



<section class="container">

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

        <label for="icone">Icône : </label>
        <input type="text" value="{{old('icone')}}" name="icone" id="icone">

        <button class="btn btn-success mt-3 w-25" type="submit">Ajouter</button>
    </form>
</section>
    
@endsection