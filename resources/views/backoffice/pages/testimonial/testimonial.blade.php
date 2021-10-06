x²@extends('backoffice.template.mainback')
@section('backpage')


    <section class="container">


        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <h2 class="tracking-in-expand">Testimonial</h2>


        <div class="container d-flex justify-content-center">
            <div class="slide-right">
                <a class=" trhover btn btn-success mt-3 mb-5 fs-4" href="{{ route('testimonial.create') }}">Ajouter</a>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Url</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Fonction</th>
                    <th scope="col">description</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($testimonial as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->url }}</td>
                        <td>{{ $data->nom }}</td>
                        <td>{{ $data->fonction }}</td>
                        <td>{{ $data->description }}</td>
                        <td>
                            <div class="d-flex justify-content-around my-3">
                                @can('editeur')
                                    <div class="slide-in-left">
                                        <a class=" trhover btn btn-primary text-black"
                                            href="{{ route('testimonial.show', $data->id) }}">Détails</a>
                                    </div>
                                @endcan
                                <div class="slide-in-left"> <a class=" trhover btn btn-warning"
                                    href="{{ route('testimonial.edit', $data->id) }}">Modifier</a></div>
                                <form action="{{ route('testimonial.destroy', $data->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    @can('editeur')
                                    <div class="slide-in-left">
                                        <button class=" trhover btn btn-danger text-black" type="submit">Supprimer</button>
                                    </div>
                                    @endcan
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

@endsection
