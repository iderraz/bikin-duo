@extends('backoffice.template.mainback')
@section('backpage')

{{-- <div class="container">

    <p>ID : {{ ($user->id) }}</p>
    <p>name : {{ ($user->name) }}</p>
    <p>email : {{ ($user->email) }}</p>
    <p>password : {{ ($user->password) }}</p>
    <p>role : {{ ($user->role->role) }}</p>


</div> --}}
<h2 class="tracking-in-expand">Détail User</h2>

<section class="container py-5">

<div class="d-flex justify-content-center">
    <div class="tilt-in-fwd-tr">
        <div class="card my-5" style="width: 18rem;">
            <div class="card-body">

                <p>ID : {{ ($user->id) }}</p>
                <p>name : {{ ($user->name) }}</p>
                <p>email : {{ ($user->email) }}</p>
                <p>password : {{ ($user->password) }}</p>
                <p>role : {{ ($user->role->role) }}</p>

                <div class="d-flex justify-content-center mb-5">
                    <a class="btn btn-warning mx-2" href="{{ route('user.edit', $user->id) }}">Modifier</a>
                    <form action="{{ route('user.destroy', $user->id) }}" method="post">
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