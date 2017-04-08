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
{!!Form::label('size','Sizes:')!!}
 {!!Form::select('size', ['large' => 'Large', 'medium' => 'Medium','small' => 'Small'], 'small')!!}

{!!Form::label('price','Price:')!!}
{!!Form::number('price', '0')!!}

</div>
<div class="form-group">
    {!!Form::submit('Add Item',['class' =>'btn btn-primary form-control'])!!}
</div>
{!! Form::close() !!}
@stop