@extends('backoffice.template.mainback')
@section('backpage')

<h2 class="tracking-in-expand page-section-heading text-center text-uppercase py-5">Modifier Contact</h2>


<div class="container">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contact.update', $contact->id)}}" method="post">
        @csrf
        @method("PUT")

        <div id="contactedit" class="d-flex flex-column">
            <div class="mb-3">
                <label class="form-label">titre :</label>
                <input type="text" class="form-control" type="text" name="titre" value="{{ $contact->titre }}">
            </div>
            <div class="mb-3">
                <label class="form-label">icone :</label>
                <input type="text" class="form-control" type="text" name="icone" value="{{ $contact->icone }}">
            </div>
            <div class="mb-3">
                <label class="form-label">contenu :</label>
                <input class="form-control" name="contenu" value="{{ $contact->contenu }}">
            </div>
    
            <button class="btn btn-success w-25 mt-3 text-dark" type="submit">Modifier</button>

        </div>



        
    </form>

</div>
    
@endsection