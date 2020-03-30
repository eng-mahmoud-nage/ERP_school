{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('type', 'Type:') !!}
			{!! Form::text('type') !!}
		</li>
		<li>
			{!! Form::label('discount', 'Discount:') !!}
			{!! Form::text('discount') !!}
		</li>
		<li>
			{!! Form::label('student_id', 'Student_id:') !!}
			{!! Form::text('student_id') !!}
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
			{!! Form::label('date', 'Date:') !!}
			{!! Form::text('date') !!}
		</li>
		<li>
			{!! Form::label('note_ar', 'Note_ar:') !!}
			{!! Form::textarea('note_ar') !!}
		</li>
		<li>
			{!! Form::label('discountable_id', 'Discountable_id:') !!}
			{!! Form::text('discountable_id') !!}
		</li>
		<li>
			{!! Form::label('discountable_type', 'Discountable_type:') !!}
			{!! Form::text('discountable_type') !!}
		</li>
		<li>
			{!! Form::label('note_en', 'Note_en:') !!}
			{!! Form::textarea('note_en') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}