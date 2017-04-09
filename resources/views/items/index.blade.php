@extends('app')
@section('content')
<h1>Items</h1>
  <a href="{{  route('items.create') }}" class="btn btn-primary">ADD Items</a>
  
<div class="row">  
<div class="col-lg-4">  
@foreach ($items as $item)
<article>
   <h2>{{$item->name}}</h2> <div class="body">{{$item->description}} </div>
</article>
{!! Form::open() !!}
  {!! Form::hidden('user_id',Auth::user( )->id)!!}
  {!!Form::label('size','Sizes:')!!}
  {!!Form::select('size', ['large' => 'Large', 'medium' => 'Medium','small' => 'Small'], 'small')!!}
  {!!Form::label('amount','Amount:')!!}
  {!!Form::number('amount', '0')!!}
  {!!Form::submit('Add',['class' =>'btn btn-primary form-control'])!!}
  {!! Form::close() !!}
   </div>
    <div class="col-lg-4">  
  @foreach ($item->size as $size)
  <article>
    {{ $size->size }} {{ $size->price }}
    </article>
  @endforeach
@endforeach

</div>
    <div class="col-lg-4">
    <h1>latest order</h1>
</div>
 </div>
@stop