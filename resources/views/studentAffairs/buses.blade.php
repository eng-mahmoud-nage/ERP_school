{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('driver_name_ar', 'Driver_name_ar:') !!}
			{!! Form::text('driver_name_ar') !!}
		</li>
		<li>
			{!! Form::label('driver_name_en', 'Driver_name_en:') !!}
			{!! Form::text('driver_name_en') !!}
		</li>
		<li>
			{!! Form::label('driver_phone', 'Driver_phone:') !!}
			{!! Form::text('driver_phone') !!}
		</li>
		<li>
			{!! Form::label('driver_national_id', 'Driver_national_id:') !!}
			{!! Form::text('driver_national_id') !!}
		</li>
		<li>
			{!! Form::label('bus_num', 'Bus_num:') !!}
			{!! Form::text('bus_num') !!}
		</li>
		<li>
			{!! Form::label('traffic_ar', 'Traffic_ar:') !!}
			{!! Form::text('traffic_ar') !!}
		</li>
		<li>
			{!! Form::label('traffic_en', 'Traffic_en:') !!}
			{!! Form::text('traffic_en') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}