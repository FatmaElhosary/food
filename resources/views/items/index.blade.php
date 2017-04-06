@extends('app')
@section('content')
<h1>Items</h1>
@foreach($items as $item)
<article>
    <h2>{{$item->name}}</h2>
    <div class="body">{{$item->description}}</div>
</article>
@endforeach
@stop