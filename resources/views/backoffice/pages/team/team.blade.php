@extends('backoffice.template.mainback')
@section('backpage')
    
@can('editeur')



<section class="container">


    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

    <h2 class="tracking-in-expand">Team</h2>

    <div class="container d-flex justify-content-center">
        <div class="slide-right">
            <a class="btn btn-success mt-3 mb-5 fs-4" href="{{ route('team.create') }}">Ajouter</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Url</th>
                <th scope="col">Nom</th>
                <th scope="col">Fonction</th>
                <th scope="col">Icone</th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            @foreach($team as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->url}}</td>
                <td>{{$data->nom}}</td>
                <td>{{$data->fonction}}</td>
                <td>{{$data->icone}}</td>
                <td>
                    <div class="d-flex justify-content-around my-3">
                        <div class="slide-in-left"> <a class="btn btn-primary text-black"
                                href="{{ route('team.show', $data->id) }}">Détails</a>
                        </div>

                        <div class="slide-in-left"> <a class="btn btn-warning"
                                href="{{ route('team.edit', $data->id) }}">Modifier</a></div>

                        <form action="{{ route('team.destroy', $data->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="slide-in-left">
                                <button class="btn btn-danger text-black" type="submit">Supprimer</button>
                            </div>

                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endcan

@endsection