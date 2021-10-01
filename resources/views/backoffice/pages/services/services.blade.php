@extends('backoffice.template.mainback')
@section('backpage')
    



<section class="container">


    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

    <h2 class="centertitle">Modification Service</h2>

    <div class="container d-flex justify-content-center">
        <a class="btn btn-success mt-3 mb-5 fs-4" href="{{route('service.create')}}">Créer</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Emoji</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            @foreach($service as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->emoji}}</td>
                <td>{{$data->titre}}</td>
                <td>{{$data->description}}</td>
                <td>
                <div class="d-flex justify-content-around my-3">
                                <a class="btn btn-primary text-black" href="{{route('service.show', $data->id)}}">Détails</a>
                                <a class="btn btn-warning" href="{{route('service.edit', $data->id)}}">Modifier</a>
                                <form action="{{route('service.destroy', $data->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger text-black" type="submit">Supprimer</button>
                                </form>
                            </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection