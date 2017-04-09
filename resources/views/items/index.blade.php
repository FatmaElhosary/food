
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
        <th></th>
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
          <td> <img src=" https://goo.gl/F015iq" width="60px" height="60px"/> </td>
          
        <td><article>
   <h2>{{$item->name}}</h2> <div class="body">{{$item->description}} </div>
</article></td>

        @foreach ($item->size as $size)
        <td> {{ $size->smallprice }}</td>
        <td>{{ $size->mediumprice }} </td>
        <td>{{ $size->largeprice }}</td>
          @endforeach
<td>{!! Form::open(['url' => 'items/AddToCart']) !!}
  {!! Form::hidden('user_id',Auth::user( )->id)!!}
  {!! Form::hidden('item_id',$item->name)!!}
  {!!Form::label('size','Sizes:')!!}
  {!!Form::select('size', ['large' => 'Large', 'medium' => 'Medium','small' => 'Small'], 'small')!!}
  {!!Form::label('amount','quantity:')!!}
  {!!Form::number('amount', '1')!!}
  {!!Form::submit('Add',['class' =>'btn btn-primary '])!!}
  {!! Form::close() !!}</td>
          @endforeach

          
      </tr>
    </tbody>
  </table>
            </div>

      <h3>Order Details</h3>      
<div class="table-responsive"> 
  <table class="table table-bordered" >
       <tr>
        <th width="30%">Item Name</th>
        <th>Item Size</th>
        <th>Quantity</th>
        <th>price</th>
        <th>Total</th>
        <th>Action</th>
      </tr>
   
    <tbody>
      <tr> 
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
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