@extends('layouts.app')

@section('content')

<h1>Car rental form</h1>
	{!! Form::open(['url' => 'contact/submit']) !!}
	    <div class="form-group">
	    	{{ Form::label('name', 'Name')}}
	    	{{ Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Please, Enter what kind of car you want to rent'])}}
	    </div>
	    <div class="form-group">
	    	{{Form::label('email', 'E-Mail Address')}}
	    	{{Form::text('email', '',['class'=>'form-control','placeholder'=>'Enter e-mail address'])}}
	    </div>
	    <div class="form-group">
	    	{{Form::label('message', 'Message')}}
	    	{{Form::textarea('message', '', ['class'=>'form-control', 'placeholder'=>'Enter all the details about your appointment( When, where, how,'])}}
	    </div>
	    <div>
	    	{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
	    </div>
	{!! Form::close() !!}
@endsection
