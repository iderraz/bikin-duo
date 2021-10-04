@extends('backoffice.template.mainback')
@section('backpage')

@can('editeur')

<div class="container d-flex justify-content-center">

    <h1>section2</h1>
    <button class="m-2 rounded bg-primary">
        <a href="{{ route('section2.create') }}"><p class="text-dark text-decoration-none">Ajouter</p></a>
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

        @foreach($section2 as $item)

            <tr>
                <th scope="row">{{ ($item->id) }}</th>
                <td>{{ ($item->contenu) }}</td>
                <td>
                    <div class="d-flex">
                        <form action="{{ route('section2.destroy', $item->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="rounded m-3 bg-danger" type="submit">Delete</button>
                        </form>

                        <button class="rounded m-3 bg-warning"><a class="text-decoration-none text-dark" href="{{ route('section2.show', $item->id)}}">Show</a></button>

                        <button class="rounded m-3 bg-success"><a class="text-decoration-none text-dark" href="{{ route('section2.edit', $item->id)}}">Update</a></button>
                    </div>
                </td>
            </tr>

        @endforeach

        </tbody>

    </table>

    </div>

@endcan
    
@endsection