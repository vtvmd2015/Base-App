@extends('layouts.app')

@section('content')

  <div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>
      </div>
      <ul class="breadcrumb">
        <li><a href="{{ URL::to('dashboard') }}">{{ Lang::get('core.home') }}</a></li>
		<li><a href="{{ URL::to('salaryentry?return='.$return) }}">{{ $pageTitle }}</a></li>
        <li class="active">{{ Lang::get('core.addedit') }} </li>
      </ul>
	  	  
    </div>
 
 	<div class="page-content-wrapper">

		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i> </h4></div>
	<div class="sbox-content"> 	

		 {!! Form::open(array('url'=>'salaryentry/save?return='.$return, 'class'=>'form-vertical','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-3">
						<fieldset><legend> Salary Entry</legend>
									
								  <div class="form-group hidethis " style="display:none;">
									<label for="ipt" class=" control-label "> Salary Id    </label>									
									  {!! Form::text('salary_id', $row['salary_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Salary Monthyear  <span class="asterix"> * </span>  </label>									
									  {!! Form::text('salary_monthyear', $row['salary_monthyear'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Employee Name  <span class="asterix"> * </span>  </label>									
									  <select name='employee_id' rows='5' id='employee_id' class='select2 ' required  ></select> 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Basic    </label>									
									  {!! Form::text('basic', $row['basic'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Conveyence    </label>									
									  {!! Form::text('conveyence', $row['conveyence'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Other Allowence    </label>									
									  {!! Form::text('other_allowence', $row['other_allowence'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Amount    </label>									
									  {!! Form::text('amount', $row['amount'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> </fieldset>
			</div>
			
			<div class="col-md-3">
						<fieldset><legend> Additional</legend>
									
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Days    </label>									
									  {!! Form::text('days', $row['days'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Total Leave    </label>									
									  {!! Form::text('total_leave', $row['total_leave'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Salary    </label>									
									  {!! Form::text('salary', $row['salary'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> ESI  Basic    </label>									
									  {!! Form::text('esi_basic', $row['esi_basic'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> PF  Basic    </label>									
									  {!! Form::text('pf_basic', $row['pf_basic'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> OT Hrs    </label>									
									  {!! Form::text('ot_hrs', $row['ot_hrs'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> OT Amount    </label>									
									  {!! Form::text('ot_amount', $row['ot_amount'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> </fieldset>
			</div>
			
			<div class="col-md-3">
						<fieldset><legend> Deduction</legend>
									
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> ESI Percentage    </label>									
									  {!! Form::text('esi_percentage', $row['esi_percentage'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> PF Percentage    </label>									
									  {!! Form::text('pf_percentage', $row['pf_percentage'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Leave Amount    </label>									
									  {!! Form::text('leave_amount', $row['leave_amount'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Advance    </label>									
									  {!! Form::text('advance', $row['advance'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> </fieldset>
			</div>
			
			<div class="col-md-3">
						<fieldset><legend> Payment</legend>
									
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Net Wages    </label>									
									  {!! Form::text('net_wages', $row['net_wages'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Payment Mode  <span class="asterix"> * </span>  </label>									
									  
					<?php $payment_mode = explode(',',$row['payment_mode']);
					$payment_mode_opt = array( 'CASH' => 'CASH' ,  'ONLINE' => 'ONLINE' , ); ?>
					<select name='payment_mode' rows='5' required  class='select2 '  > 
						<?php 
						foreach($payment_mode_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['payment_mode'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Payment Reference    </label>									
									  {!! Form::text('payment_reference', $row['payment_reference'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
								  </div> 					
								  <div class="form-group  " >
									<label for="ipt" class=" control-label "> Salary Entry Date  <span class="asterix"> * </span>  </label>									
									  <textarea name='salary_entry_date' rows='5' id='salary_entry_date' class='form-control '  
				         required  >{{ $row['salary_entry_date'] }}</textarea> 						
								  </div> </fieldset>
			</div>
			
			

		
			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('salaryentry?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#employee_id").jCombo("{{ URL::to('salaryentry/comboselect?filter=employee_t:employee_id:first_name|last_name') }}",
		{  selected_value : '{{ $row["employee_id"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop