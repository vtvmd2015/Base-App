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
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>  
	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox animated fadeInRight">
	<div class="sbox-title"> 
   		<a href="{{ URL::to('supplier?return='.$return) }}" class="tips btn btn-xs btn-default pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
		@if($access['is_add'] ==1)
   		<a href="{{ URL::to('supplier/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
		@endif 
	</div>
	<div class="sbox-content" style="background:#fff;"> 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>Supplier Name</td>
						<td>{{ $row->supplier_name }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Supplier Number</td>
						<td>{{ $row->supplier_number }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Supplier Type</td>
						<td>{!! SiteHelpers::gridDisplayView($row->supplier_type_id,'supplier_type_id','1:supplier_type_t:supplier_type_id:supplier_type') !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Address1</td>
						<td>{{ $row->address1 }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Street</td>
						<td>{{ $row->street }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Area</td>
						<td>{{ $row->area }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>City</td>
						<td>{{ $row->city }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>State</td>
						<td>{{ $row->state }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Country</td>
						<td>{{ $row->country }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Contact Email</td>
						<td>{{ $row->contact_email }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Contact Phone</td>
						<td>{{ $row->contact_phone }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Payment Method</td>
						<td>{{ $row->payment_method }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Supplier Status</td>
						<td>{{ $row->supplier_status }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Payment Terms</td>
						<td>{{ $row->payment_terms }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>TIN NO</td>
						<td>{{ $row->TIN_NO }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>PAN NO</td>
						<td>{{ $row->PAN_NO }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>SERVICE TAXREG NO</td>
						<td>{{ $row->SERVICE_TAXREG_NO }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>EXCISE DUTY NO</td>
						<td>{{ $row->EXCISE_DUTY NO }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>CREDIT PERIOD</td>
						<td>{{ $row->CREDIT_PERIOD }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Default Pricelist Id</td>
						<td>{{ $row->default_pricelist_id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Validation Status</td>
						<td>{{ $row->validation_status }} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop