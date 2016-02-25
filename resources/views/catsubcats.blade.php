
@extends('layout')


@section('content')

<!--    Displays the img & h2 for $cats, as $cats is defined in DatabaseController-->

    @foreach($catsubcats as $catsubcat)


       <a href="{{ url('/', $catsubcat->id) }}"><img src="/img/{{ $catsubcat->img }}"></a>
        <a href="{{ url('/', $catsubcat->id) }}"><h2>{{ $catsubcat->title }}</h2></a>
        <a href="{{ url('delete', $catsubcats->id)}}"><span>Delete</span></a>
@endforeach
  
    

@stop
