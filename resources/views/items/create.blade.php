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
{!!Form::label('price','Small Price  :')!!}
{!!Form::number('price1', '0')!!}
{!!Form::label('price','Medium Price :')!!}
{!!Form::number('price2', '0')!!}
{!!Form::label('price','Large Price :')!!}
{!!Form::number('price3', '0')!!}

</div>
<div class="form-group">
    {!!Form::submit('Add',['class' =>'btn btn-primary form-control'])!!}
</div>
{!! Form::close() !!}
@if ($errors->any())
<ul class="alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
@stop