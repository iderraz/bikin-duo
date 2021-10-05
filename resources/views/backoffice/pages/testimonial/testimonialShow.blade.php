@extends('backoffice.template.mainback')
@section('backpage')

<section class="container">

    <div class="card" style="width: 18rem;">
        <img src="{{asset('img/'.$testimonial->url)}}" class="card-img-top" alt="...">
        <div class="card-body">
        <h4 class="card-title">{{$testimonial->nom}}</h4>
        <h5 class="card-title">{{$testimonial->fonction}}</h5>
        <h5 class="card-title">{{$testimonial->description}}</h5>
        <h5 class="card-title">{{$testimonial->url}}</h5>
          <div class="d-flex justify-content-center mb-5">
            <a class="btn btn-warning mx-2" href="{{route('testimonial.edit', $testimonial->id)}}">Modifier</a>
            <form action="{{route('testimonial.destroy', $testimonial->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger text-black mx-2" type="submit">Supprimer</button>
            </form>
        </div>
        </div>
    </div>

</section>
    
@endsection