<div class="row">
	<div class="col-md-8">
		{{ Form::label('title')}}
		{{ Form::text('title', old('title'),['class'=>'form-control', 'placeholder' =>'post title'])}}
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-4">
		{{ Form::label('active')}}
		{{ Form::select('active', ['1'=>'Active','0'=>'Inactive'],null,['class'=>'form-control','placeholder'=>'choose status'])}}
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-8">
		{{ Form::label('body')}}
		{{ Form::textarea('body', old('body'),['class'=>'form-control', 'placeholder' =>'post body'])}}
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-8">
		{{ Form::submit('Submit',['class'=>'btn btn-primary'])}}
		{{ Form::reset('Reset',['class'=>'btn btn-danger'])}}
	</div>
</div>