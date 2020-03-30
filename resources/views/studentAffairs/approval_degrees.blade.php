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
			{!! Form::label('total_year_degree', 'Total_year_degree:') !!}
			{!! Form::text('total_year_degree') !!}
		</li>
		<li>
			{!! Form::label('student_total_degree', 'Student_total_degree:') !!}
			{!! Form::text('student_total_degree') !!}
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