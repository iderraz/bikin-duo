@extends('backoffice.template.mainback')
@section('backpage')

@can('editeur')

<div class="container d-flex justify-content-center">

    <h1>user</h1>
    <button class="m-2 rounded bg-primary">
        <a href="{{ route('user.create') }}"><p class="text-dark text-decoration-none">Ajouter</p></a>
    </button>

</div>

<div class="container">

    <table class="table">

        <thead >
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th scope="col">role</th>
            </tr>
        </thead>

        <tbody>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        @foreach($user as $item)

            <tr>
                <th scope="row">{{ ($item->id) }}</th>
                <td>{{ ($item->name) }}</td>
                <td>{{ ($item->email) }}</td>
                <td>{{ ($item->password) }}</td>
                <td>{{ ($item->role->id) }}</td>
                <td>
                    <div class="d-flex">
                        <form action="{{ route('user.destroy', $item->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            @can('webmaster')
                                <button class="rounded m-3 bg-danger" type="submit">Delete</button>
                            @endcan
                            
                        </form>
                        @can('webmaster')

                            <button class="rounded m-3 bg-warning"><a class="text-decoration-none text-dark" href="{{ route('user.show', $item->id)}}">Show</a></button>

                            <button class="rounded m-3 bg-success"><a class="text-decoration-none text-dark" href="{{ route('user.edit', $item->id)}}">Update</a></button>
                            
                        @endcan

                    </div>
                </td>
            </tr>

        @endforeach

        </tbody>

    </table>

    </div>

@endcan
    
@endsection