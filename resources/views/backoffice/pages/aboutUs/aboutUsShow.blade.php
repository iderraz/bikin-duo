@extends('backoffice.template.mainback')
@section('backpage')

<h2 class="page-section-heading text-center text-uppercase py-5">About <i>{{$customer->name}} {{$customer->firstname}}</i></h2>

    <section class="container py-5">
        
        <div class="d-flex justify-content-center">
            <div class="card my-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $customer->name }} {{ $customer->firstname }}</h5>
                    <p class="card-text">{{ $about_emoji->emoji }}</p>
                    <h4 class="card-title">{{ $about_emoji->titre }} </h4>
                    <p class="card-text">{{ $about_emoji->description }}</p>
                    
                    <div class="d-flex justify-content-center mb-5">
                        <a class="btn btn-warning mx-2" href="{{ route('aboutUs.edit', $about_emoji->id) }}">Modifier</a>
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger text-black mx-2" type="submit">Supprimer</button>
                        </form>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
   
@endsection