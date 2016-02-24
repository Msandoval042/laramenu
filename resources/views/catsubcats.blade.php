@extends('layout')


@section('content')

<!--    Displays the img & h2 for $cats, as $cats is defined in DatabaseController-->

    @foreach($catsubcats as $catsubcat)


       <a href="{{ url('/', $catsubcat->id) }}"><img src="/img/{{ $catsubcat->img }}"></a>
        <a href="{{ url('/', $catsubcat->id) }}"><h2>{{ $catsubcat->title }}</h2></a>
@endforeach
    @if ($items->id == 1 or $items->id == 3 or $items->id == 6)
   <h4><a href="/catsubcats/{{ $cat->id }}">{{ $cat->title }}</a></h4>
@else
   <h4><a href="/items/{{ $cat->id }}">{{ $cat->title }}</a></h4>
@endif
    

@stop