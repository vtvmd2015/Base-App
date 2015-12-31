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
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>  
	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox animated fadeInRight">
	<div class="sbox-title"> 
   		<a href="{{ URL::to('salaryentry?return='.$return) }}" class="tips btn btn-xs btn-default pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
		@if($access['is_add'] ==1)
   		<a href="{{ URL::to('salaryentry/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
		@endif 
	</div>
	<div class="sbox-content" style="background:#fff;"> 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>Employee Name</td>
						<td>{{ $row->employee_id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Basic Salary</td>
						<td>{{ $row->basic }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Conveyence</td>
						<td>{{ $row->conveyence }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Other Allowence</td>
						<td>{{ $row->other_allowence }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Salary Entry Date</td>
						<td>{{ $row->salary_entry_date }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Amount</td>
						<td>{{ $row->amount }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Salary Month-Year</td>
						<td>{{ $row->salary_monthyear }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Days</td>
						<td>{{ $row->days }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Total Leave</td>
						<td>{{ $row->total_leave }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Salary</td>
						<td>{{ $row->salary }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Esi Basic</td>
						<td>{{ $row->esi_basic }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pf Basic</td>
						<td>{{ $row->pf_basic }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>OT Hrs</td>
						<td>{{ $row->ot_hrs }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>OT Amount</td>
						<td>{{ $row->ot_amount }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>ESI Percentage</td>
						<td>{{ $row->esi_percentage }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>PF Percentage</td>
						<td>{{ $row->pf_percentage }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Leave Amount</td>
						<td>{{ $row->leave_amount }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Advance</td>
						<td>{{ $row->advance }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Net Wages</td>
						<td>{{ $row->net_wages }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Payment Mode</td>
						<td>{{ $row->payment_mode }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Payment Reference</td>
						<td>{{ $row->payment_reference }} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop