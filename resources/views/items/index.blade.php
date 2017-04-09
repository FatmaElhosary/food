
@extends('layouts.app')

@section('content')  
<div class="container">
  <h2>Items</h2>
  <a href="{{  route('items.create') }}" class="btn btn-primary">ADD Items</a>
  <div class="row">
            <div class="col-lg-8">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>item</th>
        <th>smallprice</th>
        <th>mediumprice</th>
        <th>largeprice</th>
        <th>Add to order</th>
         
      </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
      <tr> 
        <td><article>
   <h2>{{$item->name}}</h2> <div class="body">{{$item->description}} </div>
</article></td>
        @foreach ($item->size as $size)
        <td> {{ $size->smallprice }}</td>
        <td>{{ $size->mediumprice }} </td>
        <td>{{ $size->largeprice }}</td>
          @endforeach
          <td>{!! Form::open() !!}
  {!!Form::label('size','Sizes:')!!}
  {!!Form::select('size', ['large' => 'Large', 'medium' => 'Medium','small' => 'Small'], 'small')!!}
  {!!Form::label('amount','Amount:')!!}
  {!!Form::number('amount', '0')!!}
  {!!Form::submit('Add',['class' =>'btn btn-primary '])!!}
  {!! Form::close() !!}</td>
          @endforeach
          
      </tr>
    </tbody>
  </table>
            </div>


           
  <div class="col-lg-4">

    <h1>latest order</h1>
</div>
  </div>
  </div>
@stop