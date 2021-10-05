@extends('backoffice.template.mainback')
@section('backpage')

    @can('editeur')

        <section class="container">


            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            <h2 class="tracking-in-expand">About</h2>

            <div class="container d-flex justify-content-center">
                <div class="slide-right">
                    <a class=" trhover btn btn-success mt-3 mb-5 fs-4" href="{{ route('about.create') }}">Ajouter</a>
                </div>
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
                    @foreach ($about as $data)
                        <tr>
                            <th scope="row">{{ $data->id }}</th>
                            <td><i class="{{ $data->emoji }}"></i></td>
                            <td>{{ $data->titre }}</td>
                            <td>{{ $data->description }}</td>
                            <td>
                                <div class="d-flex justify-content-around my-3">
                                    <div class="slide-in-left"> <a class=" trhover btn btn-primary text-black"
                                            href="{{ route('about.show', $data->id) }}">Détails</a>
                                    </div>

                                    <div class="slide-in-left"> <a class=" trhover btn btn-warning"
                                            href="{{ route('about.edit', $data->id) }}">Modifier</a></div>

                                    <form action="{{ route('about.destroy', $data->id) }}" method="post">
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
        </section>
    @endcan


@endsection
