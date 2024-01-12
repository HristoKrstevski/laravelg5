@extends('layouts.app')
@section('content')
    <div class="row">
        <p>{{$product->name}}</p>
        <p>{{$product->email}}</p>
    </div>

    <div class="row">
        <form action="{{route('users.destroy',$product->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete Product</button>

        </form>
    </div>
@endsection
