@extends('layout')


@section('content')

<!--    //Displays the img & h2 for $cats, as $cats is defined in DatabaseController-->

    @foreach($cats as $cat)


        <a href="{{ url('/', $cat->id) }}"><img src="/img/{{ $cat->img }}"></a>
        <a href="{{ url('/', $cat->id) }}"><h2>{{ $cat->title }}</h2></a>
        <button type="button" class="btn btn-warning-outline">Delete</button>


    @endforeach

@stop