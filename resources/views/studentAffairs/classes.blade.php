{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name_ar', 'Name_ar:') !!}
			{!! Form::text('name_ar') !!}
		</li>
		<li>
			{!! Form::label('name_en', 'Name_en:') !!}
			{!! Form::text('name_en') !!}
		</li>
		<li>
			{!! Form::label('level_id', 'Level_id:') !!}
			{!! Form::text('level_id') !!}
		</li>
		<li>
			{!! Form::label('active', 'Active:') !!}
			{!! Form::text('active') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}