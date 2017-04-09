@extends('app')
@section('content')
<h1>Add new Items</h1>
<hr/>
{!! Form::open(['url' => 'items']) !!}
{!! Form::hidden('user_id',Auth::user( )->id)!!}
<div class="form-group">
    {!!Form::label('name','Name: ')!!}
    {!!Form::text('name',null,['class'=> 'form-control'])!!}
    </div>
<div class="form-group">
    {!!Form::label('description','Description:')!!}
    {!!Form::textarea('description',null,['class'=> 'form-control'])!!}
     </div>
<div class="form-group">

{!!Form::label('smallprice','Price small:')!!}
{!!Form::number('smallprice', '0')!!}
{!!Form::label('mediumprice','Price medium:')!!}
{!!Form::number('mediumprice', '0')!!}
{!!Form::label('largeprice','Price large:')!!}
{!!Form::number('largeprice', '0')!!}

</div>
<div class="form-group">
    {!!Form::submit('Add Item',['class' =>'btn btn-primary form-control'])!!}
</div>
{!! Form::close() !!}
@stop