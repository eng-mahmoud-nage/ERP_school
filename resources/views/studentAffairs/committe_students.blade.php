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
			{!! Form::label('committe_id', 'Committe_id:') !!}
			{!! Form::text('committe_id') !!}
		</li>
		<li>
			{!! Form::label('religion', 'Religion:') !!}
			{!! Form::text('religion') !!}
		</li>
		<li>
			{!! Form::label('setting_num', 'Setting_num:') !!}
			{!! Form::text('setting_num') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}