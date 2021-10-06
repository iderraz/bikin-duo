@extends('backoffice.template.mainback')
@section('backpage')

@can('editeur')

<h2 class="tracking-in-expand">User</h2>

<div class="container d-flex justify-content-center">

    

    <div class="container d-flex justify-content-center">
        <div class="slide-right">
            <a class=" trhover btn btn-success mt-3 mb-5 fs-4" href="{{ route('user.create') }}">Ajouter</a>
        </div>
    </div>

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
                <th></th>
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
                            <div class="slide-in-left">
                                <button class=" trhover btn btn-danger text-black" type="submit">Supprimer</button>
                            </div>
                            @endcan
                            
                        </form>
                        @can('webmaster')

                        <div class="slide-in-left"> <a class=" trhover btn btn-primary text-black"
                            href="{{ route('user.show', $item->id) }}">Détails</a>
                    </div>
                    <div class="slide-in-left"> <a class=" trhover btn btn-warning"
                        href="{{ route('user.edit', $item->id) }}">Modifier</a></div>
                            
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