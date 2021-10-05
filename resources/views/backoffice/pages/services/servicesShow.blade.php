@extends('backoffice.template.mainback')
@section('backpage')


<h2 class="tracking-in-expand">Détail Service</h2>

<section class="container py-5">
        
    <div class="d-flex justify-content-center">
        <div class="tilt-in-fwd-tr">
            <div class="card my-5" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text"><i class="{{ $service->emoji }}"></i></p>
                    <h4 class="card-title">{{ $service->titre }} </h4>
                    <p class="card-text">{{ $service->description }}</p>
                    
                    <div class="d-flex justify-content-center mb-5">
                        <a class="btn btn-warning mx-2" href="{{ route('service.edit', $service->id) }}">Modifier</a>
                        <form action="{{ route('service.destroy', $service->id) }}" method="post">
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