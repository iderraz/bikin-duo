@extends('backoffice.template.mainback')
@section('backpage')

@can('editeur')
<h2 class="tracking-in-expand">Titre</h2>

<div class="container d-flex justify-content-center">


    <div class="container d-flex justify-content-center">
        <div class="slide-right">
            <a class=" trhover btn btn-success mt-3 mb-5 fs-4" href="{{ route('titre.create') }}">Ajouter</a>
        </div>
    </div>

</div>

<div class="container">

    <table class="table">

        <thead >
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Description </th>
                <th></th>
            </tr>
        </thead>

        <tbody>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        @foreach($titre as $item)

            <tr>
                <th scope="row">{{ ($item->id) }}</th>
                <td>{{ ($item->titre) }}</td>
                <td>{{ ($item->description) }}</td>
                <td>
                    <div class="d-flex justify-content-around my-3">
                        <div class="slide-in-left"> <a class=" trhover btn btn-primary text-black"
                                href="{{ route('titre.show', $item->id) }}">Détails</a>
                        </div>

                        <div class="slide-in-left"> <a class=" trhover btn btn-warning"
                                href="{{ route('titre.edit', $item->id) }}">Modifier</a></div>

                        <form action="{{ route('titre.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="slide-in-left">
                                <button class=" trhover btn btn-danger text-black" type="submit">Supprimer</button>
                            </div>

                        </form>
                    </div>
                </td>
            </tr>

        @endforeach

        </tbody>

    </table>

    </div>

@endcan
    
@endsection