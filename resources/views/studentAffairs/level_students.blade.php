{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
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
			{!! Form::label('level_id', 'Level_id:') !!}
			{!! Form::text('level_id') !!}
		</li>
		<li>
			{!! Form::label('class_id', 'Class_id:') !!}
			{!! Form::text('class_id') !!}
		</li>
		<li>
			{!! Form::label('bus_subscription', 'Bus_subscription:') !!}
			{!! Form::text('bus_subscription') !!}
		</li>
		<li>
			{!! Form::label('std_status', 'Std_status:') !!}
			{!! Form::text('std_status') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}