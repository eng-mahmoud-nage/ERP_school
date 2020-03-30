{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('student_id', 'Student_id:') !!}
			{!! Form::text('student_id') !!}
		</li>
		<li>
			{!! Form::label('course_id', 'Course_id:') !!}
			{!! Form::text('course_id') !!}
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
			{!! Form::label('st_mid_term', 'St_mid_term:') !!}
			{!! Form::text('st_mid_term') !!}
		</li>
		<li>
			{!! Form::label('nd_mid_term', 'Nd_mid_term:') !!}
			{!! Form::text('nd_mid_term') !!}
		</li>
		<li>
			{!! Form::label('st_term_grade', 'St_term_grade:') !!}
			{!! Form::text('st_term_grade') !!}
		</li>
		<li>
			{!! Form::label('nd_term_grade', 'Nd_term_grade:') !!}
			{!! Form::text('nd_term_grade') !!}
		</li>
		<li>
			{!! Form::label('st_performance_grade', 'St_performance_grade:') !!}
			{!! Form::text('st_performance_grade') !!}
		</li>
		<li>
			{!! Form::label('nd_performance_grade', 'Nd_performance_grade:') !!}
			{!! Form::text('nd_performance_grade') !!}
		</li>
		<li>
			{!! Form::label('st_total_grade', 'St_total_grade:') !!}
			{!! Form::text('st_total_grade') !!}
		</li>
		<li>
			{!! Form::label('nd_total_grade', 'Nd_total_grade:') !!}
			{!! Form::text('nd_total_grade') !!}
		</li>
		<li>
			{!! Form::label('total_course_grade', 'Total_course_grade:') !!}
			{!! Form::text('total_course_grade') !!}
		</li>
		<li>
			{!! Form::label('low_course_grade', 'Low_course_grade:') !!}
			{!! Form::text('low_course_grade') !!}
		</li>
		<li>
			{!! Form::label('std_status', 'Std_status:') !!}
			{!! Form::text('std_status') !!}
		</li>
		<li>
			{!! Form::label('course_status', 'Course_status:') !!}
			{!! Form::text('course_status') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}