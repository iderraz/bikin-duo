@extends('backoffice.template.mainback')
@section('backpage')
    

<h2 class="tracking-in-expand page-section-heading text-center text-uppercase py-5">Modifier Service</h2>

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

        <form id="chefo" class="d-flex flex-column w-75" enctype="multipart/form-data" action="{{ route('service.update', $service->id) }}" method="post">
            @csrf
            @method('PUT')


    <div  class="d-flex flex-column ">

        <label class="text-dark" for="emoji">Emoji : </label>
        <input name="emoji" id="emoji" value="{{ $service->emoji }}">

        <br>

        <label class="text-dark" for="titre">Titre : </label>
        <input name="titre" id="titre" value="{{ $service->titre}}">

        <br>

        <label class="text-dark" for="description">Description : </label>
        <input name="description" id="description" value="{{ $service->description}}">

    </div>
            <button class="btn btn-success w-25 mt-3 text-dark" type="submit">Modifier</button>
        </form>
    </section>



@endsection