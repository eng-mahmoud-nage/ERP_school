{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('stages_ar', 'Stages_ar:') !!}
			{!! Form::text('stages_ar') !!}
		</li>
		<li>
			{!! Form::label('stages_en', 'Stages_en:') !!}
			{!! Form::text('stages_en') !!}
		</li>
		<li>
			{!! Form::label('educ_admin_name_ar', 'Educ_admin_name_ar:') !!}
			{!! Form::text('educ_admin_name_ar') !!}
		</li>
		<li>
			{!! Form::label('educ_admin_name_en', 'Educ_admin_name_en:') !!}
			{!! Form::text('educ_admin_name_en') !!}
		</li>
		<li>
			{!! Form::label('school_name_ar', 'School_name_ar:') !!}
			{!! Form::text('school_name_ar') !!}
		</li>
		<li>
			{!! Form::label('school_name_en', 'School_name_en:') !!}
			{!! Form::text('school_name_en') !!}
		</li>
		<li>
			{!! Form::label('logo', 'Logo:') !!}
			{!! Form::text('logo') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}