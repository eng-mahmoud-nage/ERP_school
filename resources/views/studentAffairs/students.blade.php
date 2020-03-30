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
			{!! Form::label('user_name', 'User_name:') !!}
			{!! Form::text('user_name') !!}
		</li>
		<li>
			{!! Form::label('password', 'Password:') !!}
			{!! Form::text('password') !!}
		</li>
		<li>
			{!! Form::label('student_code', 'Student_code:') !!}
			{!! Form::text('student_code') !!}
		</li>
		<li>
			{!! Form::label('dob', 'Dob:') !!}
			{!! Form::text('dob') !!}
		</li>
		<li>
			{!! Form::label('tel', 'Tel:') !!}
			{!! Form::text('tel') !!}
		</li>
		<li>
			{!! Form::label('phone', 'Phone:') !!}
			{!! Form::text('phone') !!}
		</li>
		<li>
			{!! Form::label('image', 'Image:') !!}
			{!! Form::text('image') !!}
		</li>
		<li>
			{!! Form::label('image_type', 'Image_type:') !!}
			{!! Form::text('image_type') !!}
		</li>
		<li>
			{!! Form::label('national_id', 'National_id:') !!}
			{!! Form::text('national_id') !!}
		</li>
		<li>
			{!! Form::label('religion', 'Religion:') !!}
			{!! Form::text('religion') !!}
		</li>
		<li>
			{!! Form::label('gender', 'Gender:') !!}
			{!! Form::text('gender') !!}
		</li>
		<li>
			{!! Form::label('address_ar', 'Address_ar:') !!}
			{!! Form::text('address_ar') !!}
		</li>
		<li>
			{!! Form::label('address_en', 'Address_en:') !!}
			{!! Form::text('address_en') !!}
		</li>
		<li>
			{!! Form::label('parent_status', 'Parent_status:') !!}
			{!! Form::text('parent_status') !!}
		</li>
		<li>
			{!! Form::label('second_lang', 'Second_lang:') !!}
			{!! Form::text('second_lang') !!}
		</li>
		<li>
			{!! Form::label('class_major', 'Class_major:') !!}
			{!! Form::text('class_major') !!}
		</li>
		<li>
			{!! Form::label('parent_name_ar', 'Parent_name_ar:') !!}
			{!! Form::text('parent_name_ar') !!}
		</li>
		<li>
			{!! Form::label('parent_name_en', 'Parent_name_en:') !!}
			{!! Form::text('parent_name_en') !!}
		</li>
		<li>
			{!! Form::label('parent_job', 'Parent_job:') !!}
			{!! Form::text('parent_job') !!}
		</li>
		<li>
			{!! Form::label('parent_email', 'Parent_email:') !!}
			{!! Form::text('parent_email') !!}
		</li>
		<li>
			{!! Form::label('nationality_id', 'Nationality_id:') !!}
			{!! Form::text('nationality_id') !!}
		</li>
		<li>
			{!! Form::label('place_id', 'Place_id:') !!}
			{!! Form::text('place_id') !!}
		</li>
		<li>
			{!! Form::label('region_id', 'Region_id:') !!}
			{!! Form::text('region_id') !!}
		</li>
		<li>
			{!! Form::label('check_out', 'Check_out:') !!}
			{!! Form::text('check_out') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}