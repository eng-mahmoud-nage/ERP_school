{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name_ar', 'Name_ar:') !!}
			{!! Form::text('name_ar') !!}
		</li>
		<li>
			{!! Form::label('performance_grade', 'Performance_grade:') !!}
			{!! Form::text('performance_grade') !!}
		</li>
		<li>
			{!! Form::label('mid_term_grade', 'Mid_term_grade:') !!}
			{!! Form::text('mid_term_grade') !!}
		</li>
		<li>
			{!! Form::label('term_grade', 'Term_grade:') !!}
			{!! Form::text('term_grade') !!}
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
			{!! Form::label('control_authority', 'Control_authority:') !!}
			{!! Form::text('control_authority') !!}
		</li>
		<li>
			{!! Form::label('degree_factor', 'Degree_factor:') !!}
			{!! Form::text('degree_factor') !!}
		</li>
		<li>
			{!! Form::label('level_id', 'Level_id:') !!}
			{!! Form::text('level_id') !!}
		</li>
		<li>
			{!! Form::label('name_en', 'Name_en:') !!}
			{!! Form::text('name_en') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}