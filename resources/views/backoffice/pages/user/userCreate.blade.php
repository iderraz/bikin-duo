@extends('backoffice.template.mainback')
@section('backpage')

<h2 class="tracking-in-expand">Espace Création </h2>

<div class="container mt-5">



    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('user.store') }}" method="post">
    @csrf
    
        <div class="mb-3">
            <label class="form-label">name :</label>
            <input type="text" class="form-control" type="text" name="name" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">email :</label>
            <input type="text" class="form-control" type="text" name="email" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">password :</label>
            <input class="form-control" name="password" value="{{ old('password') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">role :</label>
            <select name="role_id" class="form-control">
                
                @foreach ($user as $item)
                    <option value="{{ $item->role->id }}">{{ $item->role->role }}</option>
                @endforeach
                
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>

</div>

@endsection