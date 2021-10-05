@extends('backoffice.template.mainback')
@section('backpage')

{{-- <div class="container">

    <p>ID : {{ ($contact->id) }}</p>
    <p>titre : {{ ($contact->titre) }}</p>
    <p>contenu : {{ ($contact->contenu) }}</p>
    <p>icone : {{ ($contact->icone) }}</p>

</div> --}}

<h2 class="tracking-in-expand">Détail Contact</h2>

<section class="container py-5">
        
    <div class="d-flex justify-content-center">
        <div class="tilt-in-fwd-tr">
            <div class="card my-5" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">{{ ($contact->id) }}</p>
                    <p class="card-text">{{ ($contact->titre) }}</p>
                    <h4 class="card-title">{{ ($contact->contenu) }} </h4>
                    <p class="card-text"><i class="{{ ($contact->icone) }}"></i></p>
                    
                    <div class="d-flex justify-content-center mb-5">
                        <a class="btn btn-warning mx-2" href="{{ route('contact.edit', $contact->id) }}">Modifier</a>
                        <form action="{{ route('contact.destroy', $contact->id) }}" method="post">
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