{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('bus_id', 'Bus_id:') !!}
			{!! Form::text('bus_id') !!}
		</li>
		<li>
			{!! Form::label('region_id', 'Region_id:') !!}
			{!! Form::text('region_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}