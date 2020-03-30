{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('amount_paid', 'Amount_paid:') !!}
			{!! Form::text('amount_paid') !!}
		</li>
		<li>
			{!! Form::label('paymrnt_method', 'Paymrnt_method:') !!}
			{!! Form::text('paymrnt_method') !!}
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
			{!! Form::label('cheque_num', 'Cheque_num:') !!}
			{!! Form::text('cheque_num') !!}
		</li>
		<li>
			{!! Form::label('cheque_confirmed', 'Cheque_confirmed:') !!}
			{!! Form::text('cheque_confirmed') !!}
		</li>
		<li>
			{!! Form::label('cheque_bank_name', 'Cheque_bank_name:') !!}
			{!! Form::text('cheque_bank_name') !!}
		</li>
		<li>
			{!! Form::label('cheque_owner_name', 'Cheque_owner_name:') !!}
			{!! Form::text('cheque_owner_name') !!}
		</li>
		<li>
			{!! Form::label('cheque_exchange_date', 'Cheque_exchange_date:') !!}
			{!! Form::text('cheque_exchange_date') !!}
		</li>
		<li>
			{!! Form::label('payment_image', 'Payment_image:') !!}
			{!! Form::text('payment_image') !!}
		</li>
		<li>
			{!! Form::label('is_Deposit', 'Is_Deposit:') !!}
			{!! Form::text('is_Deposit') !!}
		</li>
		<li>
			{!! Form::label('is_recovery', 'Is_recovery:') !!}
			{!! Form::text('is_recovery') !!}
		</li>
		<li>
			{!! Form::label('type', 'Type:') !!}
			{!! Form::text('type') !!}
		</li>
		<li>
			{!! Form::label('financialable_id', 'Financialable_id:') !!}
			{!! Form::text('financialable_id') !!}
		</li>
		<li>
			{!! Form::label('financialable_type', 'Financialable_type:') !!}
			{!! Form::text('financialable_type') !!}
		</li>
		<li>
			{!! Form::label('bank_id', 'Bank_id:') !!}
			{!! Form::text('bank_id') !!}
		</li>
		<li>
			{!! Form::label('bank_Deposit_number', 'Bank_Deposit_number:') !!}
			{!! Form::text('bank_Deposit_number') !!}
		</li>
		<li>
			{!! Form::label('note_ar', 'Note_ar:') !!}
			{!! Form::textarea('note_ar') !!}
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