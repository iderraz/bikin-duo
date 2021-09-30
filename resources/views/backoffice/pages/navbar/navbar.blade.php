@extends('backoffice.template.mainback')
@section('backpage')

<div class="container d-flex justify-content-center">

    <h1>navbar</h1>
    <button class="m-2 rounded bg-primary">
        <a href="{{ route('navbar.create') }}"><p class="text-dark text-decoration-none">Ajouter</p></a>
    </button>

</div>

<div class="container">

    <table class="table">

        <thead >
            <tr>
                <th scope="col">#</th>
                <th scope="col">contenu</th>
            </tr>
        </thead>

        <tbody>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        @foreach($navbar as $item)

            <tr>
                <th scope="row">{{ ($item->id) }}</th>
                <td>{{ ($item->contenu) }}</td>
                <td>
                    <div class="d-flex">
                        <form action="{{ route('navbar.destroy', $item->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="rounded m-3 bg-danger" type="submit">Delete</button>
                        </form>

                        <button class="rounded m-3 bg-warning"><a class="text-decoration-none text-dark" href="{{ route('navbar.show', $item->id)}}">Show</a></button>

                        <button class="rounded m-3 bg-success"><a class="text-decoration-none text-dark" href="{{ route('navbar.edit', $item->id)}}">Update</a></button>
                    </div>
                </td>
            </tr>

        @endforeach

        </tbody>

    </table>

    </div>
    
@endsection