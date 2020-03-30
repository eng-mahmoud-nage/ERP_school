{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('image', 'Image:') !!}
			{!! Form::text('image') !!}
		</li>
		<li>
			{!! Form::label('type', 'Type:') !!}
			{!! Form::text('type') !!}
		</li>
		<li>
			{!! Form::label('student_id', 'Student_id:') !!}
			{!! Form::text('student_id') !!}
		</li>
		<li>
			{!! Form::label('student_code', 'Student_code:') !!}
			{!! Form::text('student_code') !!}
		</li>
		<li>
			{!! Form::label('academic_year_id', 'Academic_year_id:') !!}
			{!! Form::text('academic_year_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}