@extends('layouts/welcome')


@section('main')
    <div>
        @foreach ($trains as $train)
            <li class="col-2">
                <a class="card p-2">
                    <h6>Price {{$train -> price}}</h6>
                </a>
            </li>
            @endforeach
            
    </div>
@endsection