@extends('backoffice.template.mainback')
@section('backpage')
    
<div class="container d-flex justify-content-center">

    <h1>footerBottom</h1>
    <button class="m-2 rounded bg-primary">
        <a href="{{ route('footerBottom.create') }}"><p class="text-dark text-decoration-none">Ajouter</p></a>
    </button>

</div>

<div class="container">

    <table class="table">

        <thead >
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Icone</th>
            </tr>
        </thead>

        <tbody>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        @foreach($footerBottom as $item)

            <tr>
                <th scope="row">{{ ($item->id) }}</th>
                <td>{{ ($item->titre) }}</td>
                <td>{{ ($item->icone) }}</td>
                <td>
                    <div class="d-flex">
                        <form action="{{ route('footerBottom.destroy', $item->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="rounded m-3 bg-danger" type="submit">Delete</button>
                        </form>

                        <button class="rounded m-3 bg-warning"><a class="text-decoration-none text-dark" href="{{ route('footerBottom.show', $item->id)}}">Show</a></button>

                        <button class="rounded m-3 bg-success"><a class="text-decoration-none text-dark" href="{{ route('footerBottom.edit', $item->id)}}">Update</a></button>
                    </div>
                </td>
            </tr>

        @endforeach

        </tbody>

    </table>

    </div>

@endsection