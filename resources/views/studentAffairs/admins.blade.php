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
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('password', 'Password:') !!}
			{!! Form::text('password') !!}
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