@extends('backoffice.template.mainback')
@section('backpage')
    
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

    <form action="{{ route('user.update', $user->id)}}" method="post">
        @csrf
        @method("PUT")

        <div class="mb-3">
            <label class="form-label">name :</label>
            <input type="text" class="form-control" type="text" name="name" value="{{ $user->name }}">
        </div>
        <div class="mb-3">
            <label class="form-label">email :</label>
            <input type="text" class="form-control" type="text" name="email" value="{{ $user->email }}">
        </div>
        <div class="mb-3">
            <label class="form-label">password :</label>
            <input class="form-control" name="password" value="{{ $user->password }}">
        </div>
        
        <div class="mb-3">
            <label class="form-label">role</label>
            <input class="form-control" type="text" name="role" value="{{ $user->role->role }}">
        </div>

        <button class="btn btn-success w-25 mt-3 text-dark" type="submit">Modifier</button>
        
    </form>

</div>

@endsection