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
			{!! Form::label('locatiom', 'Locatiom:') !!}
			{!! Form::text('locatiom') !!}
		</li>
		<li>
			{!! Form::label('control_id', 'Control_id:') !!}
			{!! Form::text('control_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}