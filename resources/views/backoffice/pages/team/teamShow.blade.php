@extends('backoffice.template.mainback')
@section('backpage')
    
<section class="container py-5">
        
    <div class="d-flex justify-content-center">
        <div class="card my-5" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title">{{ $team->nom }} </h4>
                <p class="card-text">{{ $team->fonction }}</p>
                <p class="card-text">{{ $team->icone }}</p>
                <p class="card-text">{{ $team->url }}</p>
                
                <div class="d-flex justify-content-center mb-5">
                    <a class="btn btn-warning mx-2" href="{{ route('team.edit', $team->id) }}">Modifier</a>
                    <form action="{{ route('team.destroy', $team->id) }}" method="post">
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