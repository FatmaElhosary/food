
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Items</h2>
            @if(Auth::user()->role=='admin')

    <a href="{{  route('items.create') }}" class="btn btn-primary">ADD Items</a>
    @endif
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
                   <td>{{ $size->price }} </td>

                    @endforeach
                    <td>
                        {!! Form::open() !!}
                        {!!Form::label('size','Sizes:')!!}
                        {!! Form::select('size', array('L' => 'Large', 'S' => 'Small','M'=>'Medium'))!!}
                        {!!Form::label('amount','Amount:')!!}
                        {!!Form::number('amount', '1')!!}
                        <a href=/addProduct/{{$item->id}}/>Add To cart </a>
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


