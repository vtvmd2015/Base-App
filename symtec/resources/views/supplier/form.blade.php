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
		<li><a href="{{ URL::to('supplier?return='.$return) }}">{{ $pageTitle }}</a></li>
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

		 {!! Form::open(array('url'=>'supplier/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-4">
						<fieldset><legend> Supplier</legend>
									
								  <div class="form-group hidethis " style="display:none;">
									<label for="Supplier Id" class=" control-label col-md-4 text-left"> Supplier Id </label>
									<div class="col-md-6">
									  {!! Form::text('supplier_id', $row['supplier_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Supplier Number" class=" control-label col-md-4 text-left"> Supplier Number </label>
									<div class="col-md-6">
									  {!! Form::text('supplier_number', $row['supplier_number'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Supplier Name" class=" control-label col-md-4 text-left"> Supplier Name </label>
									<div class="col-md-6">
									  {!! Form::text('supplier_name', $row['supplier_name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Supplier Type" class=" control-label col-md-4 text-left"> Supplier Type </label>
									<div class="col-md-6">
									  <select name='supplier_type_id' rows='5' id='supplier_type_id' class='select2 '   ></select> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Address1" class=" control-label col-md-4 text-left"> Address1 </label>
									<div class="col-md-6">
									  {!! Form::text('address1', $row['address1'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Street" class=" control-label col-md-4 text-left"> Street </label>
									<div class="col-md-6">
									  {!! Form::text('street', $row['street'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Area" class=" control-label col-md-4 text-left"> Area </label>
									<div class="col-md-6">
									  {!! Form::text('area', $row['area'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="City" class=" control-label col-md-4 text-left"> City </label>
									<div class="col-md-6">
									  {!! Form::text('city', $row['city'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="State" class=" control-label col-md-4 text-left"> State </label>
									<div class="col-md-6">
									  {!! Form::text('state', $row['state'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Country" class=" control-label col-md-4 text-left"> Country </label>
									<div class="col-md-6">
									  {!! Form::text('country', $row['country'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> </fieldset>
			</div>
			
			<div class="col-md-4">
						<fieldset><legend> Additonal</legend>
									
								  <div class="form-group  " >
									<label for="Supplier Status" class=" control-label col-md-4 text-left"> Supplier Status </label>
									<div class="col-md-6">
									  
					<?php $supplier_status = explode(',',$row['supplier_status']);
					$supplier_status_opt = array( 'A' => 'Active' ,  'I' => 'Inactive' , ); ?>
					<select name='supplier_status' rows='5'   class='select2 '  > 
						<?php 
						foreach($supplier_status_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['supplier_status'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="TIN NO" class=" control-label col-md-4 text-left"> TIN NO </label>
									<div class="col-md-6">
									  {!! Form::text('TIN_NO', $row['TIN_NO'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="PAN NO" class=" control-label col-md-4 text-left"> PAN NO </label>
									<div class="col-md-6">
									  {!! Form::text('PAN_NO', $row['PAN_NO'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="SERVICE TAXREG NO" class=" control-label col-md-4 text-left"> SERVICE TAXREG NO </label>
									<div class="col-md-6">
									  {!! Form::text('SERVICE_TAXREG_NO', $row['SERVICE_TAXREG_NO'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="EXCISE DUTY NO" class=" control-label col-md-4 text-left"> EXCISE DUTY NO </label>
									<div class="col-md-6">
									  <textarea name='EXCISE_DUTY NO' rows='5' id='EXCISE_DUTY NO' class='form-control '  
				           >{{ $row['EXCISE_DUTY NO'] }}</textarea> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="CREDIT PERIOD" class=" control-label col-md-4 text-left"> CREDIT PERIOD </label>
									<div class="col-md-6">
									  {!! Form::text('CREDIT_PERIOD', $row['CREDIT_PERIOD'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Payment Method" class=" control-label col-md-4 text-left"> Payment Method </label>
									<div class="col-md-6">
									  {!! Form::text('payment_method', $row['payment_method'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Payment Terms" class=" control-label col-md-4 text-left"> Payment Terms </label>
									<div class="col-md-6">
									  {!! Form::text('payment_terms', $row['payment_terms'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> </fieldset>
			</div>
			
			<div class="col-md-4">
						<fieldset><legend> .</legend>
									
								  <div class="form-group  " >
									<label for="Default Pricelist Id" class=" control-label col-md-4 text-left"> Default Pricelist Id </label>
									<div class="col-md-6">
									  {!! Form::text('default_pricelist_id', $row['default_pricelist_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Validation Status" class=" control-label col-md-4 text-left"> Validation Status </label>
									<div class="col-md-6">
									  {!! Form::text('validation_status', $row['validation_status'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Contact Email" class=" control-label col-md-4 text-left"> Contact Email </label>
									<div class="col-md-6">
									  {!! Form::text('contact_email', $row['contact_email'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Contact Phone" class=" control-label col-md-4 text-left"> Contact Phone </label>
									<div class="col-md-6">
									  {!! Form::text('contact_phone', $row['contact_phone'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> </fieldset>
			</div>
			
			

		
			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('supplier?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#supplier_type_id").jCombo("{{ URL::to('supplier/comboselect?filter=supplier_type_t:supplier_type_id:supplier_type') }}",
		{  selected_value : '{{ $row["supplier_type_id"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop