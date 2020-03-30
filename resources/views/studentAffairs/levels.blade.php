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
			{!! Form::label('cost', 'Cost:') !!}
			{!! Form::text('cost') !!}
		</li>
		<li>
			{!! Form::label('stage_id', 'Stage_id:') !!}
			{!! Form::text('stage_id') !!}
		</li>
		<li>
			{!! Form::label('st_instalment', 'St_instalment:') !!}
			{!! Form::text('st_instalment') !!}
		</li>
		<li>
			{!! Form::label('nd_instalment', 'Nd_instalment:') !!}
			{!! Form::text('nd_instalment') !!}
		</li>
		<li>
			{!! Form::label('rd_instalment', 'Rd_instalment:') !!}
			{!! Form::text('rd_instalment') !!}
		</li>
		<li>
			{!! Form::label('th_instalment', 'Th_instalment:') !!}
			{!! Form::text('th_instalment') !!}
		</li>
		<li>
			{!! Form::label('st_inst_date', 'St_inst_date:') !!}
			{!! Form::text('st_inst_date') !!}
		</li>
		<li>
			{!! Form::label('nd_inst_date', 'Nd_inst_date:') !!}
			{!! Form::text('nd_inst_date') !!}
		</li>
		<li>
			{!! Form::label('rd_inst_date', 'Rd_inst_date:') !!}
			{!! Form::text('rd_inst_date') !!}
		</li>
		<li>
			{!! Form::label('th_inst_date', 'Th_inst_date:') !!}
			{!! Form::text('th_inst_date') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}