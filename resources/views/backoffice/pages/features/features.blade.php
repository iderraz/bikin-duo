@extends('backoffice.template.mainback')
@section('backpage')

@can('editeur')

<div class="container d-flex justify-content-center">

    <h1>feature</h1>
    <button class="m-2 rounded bg-primary">
        <a href="{{ route('feature.create') }}"><p class="text-dark text-decoration-none">Ajouter</p></a>
    </button>

</div>

<div class="container">

    <table class="table">

        <thead >
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Description 1</th>
                <th scope="col">Description 2</th>
                <th scope="col">URL</th>
            </tr>
        </thead>

        <tbody>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        @foreach($feature as $item)

            <tr>
                <th scope="row">{{ ($item->id) }}</th>
                <td>{{ ($item->titre) }}</td>
                <td>{{ ($item->description_1) }}</td>
                <td>{{ ($item->description_2) }}</td>
                <td>{{ ($item->url) }}</td>
                <td>
                    <div class="d-flex">
                        <form action="{{ route('feature.destroy', $item->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="rounded m-3 bg-danger" type="submit">Delete</button>
                        </form>

                        <button class="rounded m-3 bg-warning"><a class="text-decoration-none text-dark" href="{{ route('feature.show', $item->id)}}">Show</a></button>

                        <button class="rounded m-3 bg-success"><a class="text-decoration-none text-dark" href="{{ route('feature.edit', $item->id)}}">Update</a></button>
                    </div>
                </td>
            </tr>

        @endforeach

        </tbody>

    </table>

    </div>

@endcan
    
@endsection