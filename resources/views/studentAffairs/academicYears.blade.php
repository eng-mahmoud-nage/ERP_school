{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('year', 'Year:') !!}
			{!! Form::text('year') !!}
		</li>
		<li>
			{!! Form::label('active', 'Active:') !!}
			{!! Form::text('active') !!}
		</li>
		<li>
			{!! Form::label('order', 'Order:') !!}
			{!! Form::text('order') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}