@extends('layout')

@section('content')
<?php
//The foreach displays item (title & img) if the type is subcat_id = cat_id
?>
    @foreach($items as $item)
        @if($item->type=='subcat')
            <a href="{{ $item->id }}"><h2>{{ $item->title }}</h2></a>
            <a href="{{ $item->id }}"><img src="/img/{{ $item->img }}"></a>
        @else()
            <img src="/img/{{ $item->img }}">
            <h2>{{ $item->title }}</h2>
        @endif

    @endforeach


@endsection