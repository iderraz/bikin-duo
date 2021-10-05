@extends('backoffice.template.mainback')
@section('backpage')


<h2 class="tracking-in-expand">Détail About</h2>
    <section class="container py-5">
        
        <div class="d-flex justify-content-center">
            <div class="tilt-in-fwd-tr">
                <div class="card my-5" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text"><i class="{{ $about->emoji }}"></i></p>
                        <h4 class="card-title">{{ $about->titre }} </h4>
                        <p class="card-text">{{ $about->description }}</p>
                        
                        <div class="d-flex justify-content-center mb-5">
                            <a class="btn btn-warning mx-2" href="{{ route('about.edit', $about->id) }}">Modifier</a>
                            <form action="{{ route('about.destroy', $about->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger text-black mx-2" type="submit">Supprimer</button>
                            </form>      
                               
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>
 
@endsection