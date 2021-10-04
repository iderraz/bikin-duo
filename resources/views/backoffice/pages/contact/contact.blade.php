@extends('backoffice.template.mainback')
@section('backpage')

@can('editeur')
    

<div class="container d-flex justify-content-center">

    <h1>contact</h1>
    <button class="m-2 rounded bg-primary">
        <a href="{{ route('contact.create') }}"><p class="text-dark text-decoration-none">Ajouter</p></a>
    </button>

</div>

<div class="container">

    <table class="table">

        <thead >
            <tr>
                <th scope="col">#</th>
                <th scope="col">icone</th>
                <th scope="col">titre</th>
                <th scope="col">contenu</th>
            </tr>
        </thead>

        <tbody>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        @foreach($contact_emoji as $item)

            <tr>
                <th scope="row">{{ ($item->id) }}</th>
                <td>{{ ($item->icone) }}</td>
                <td>{{ ($item->titre) }}</td>
                <td>{{ ($item->contenu) }}</td>
                <td>
                    <div class="d-flex">
                        <form action="{{ route('contact.destroy', $item->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="rounded m-3 bg-danger" type="submit">Delete</button>
                        </form>

                        <button class="rounded m-3 bg-warning"><a class="text-decoration-none text-dark" href="{{ route('contact.show', $item->id)}}">Show</a></button>

                        <button class="rounded m-3 bg-success"><a class="text-decoration-none text-dark" href="{{ route('contact.edit', $item->id)}}">Update</a></button>
                    </div>
                </td>
            </tr>

        @endforeach

        </tbody>

    </table>

    </div>

@endcan

@endsection