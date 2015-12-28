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
		<li><a href="{{ URL::to('employee?return='.$return) }}">{{ $pageTitle }}</a></li>
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>  
	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox animated fadeInRight">
	<div class="sbox-title"> 
   		<a href="{{ URL::to('employee?return='.$return) }}" class="tips btn btn-xs btn-default pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
		@if($access['is_add'] ==1)
   		<a href="{{ URL::to('employee/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
		@endif 
	</div>
	<div class="sbox-content" style="background:#fff;"> 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>First Name</td>
						<td>{{ $row->first_name }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Last Name</td>
						<td>{{ $row->last_name }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Title</td>
						<td>{{ $row->Title }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Gender</td>
						<td>{{ $row->gender }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Employee Type</td>
						<td>{!! SiteHelpers::gridDisplayView($row->employee_type,'employee_type','1:employee_types_t:emp_type_id:emp_type') !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Birth Date</td>
						<td>{{ $row->birth_date }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Age</td>
						<td>{{ $row->age }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Marital Status</td>
						<td>{{ $row->marital_status }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Country</td>
						<td>{{ $row->country }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Nationality</td>
						<td>{{ $row->nationality }} </td>
						
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
						<td width='30%' class='label-view text-right'>Building Detail</td>
						<td>{{ $row->building_detail }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>State</td>
						<td>{{ $row->state }} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 	<hr />
	
	<h5> Employee Assignments </h5>
	
	<div class="table-responsive">
    <table class="table table-striped ">
        <thead>
			<tr>
				<th class="number"> No </th>
					@foreach ($subgrid['tableGrid'] as $t)
					@if($t['view'] =='1')
						<th>{{ $t['label'] }}</th>
					@endif
				@endforeach
				
			  </tr>
        </thead>

        <tbody>
            @foreach ($subgrid['rowData'] as $row)
            <tr>
				<td width="30">  </td>		
			 @foreach ($subgrid['tableGrid'] as $field)
				 @if($field['view'] =='1' )
				 <td>					 
				 	@if($field['attribute']['image']['active'] =='1')
						{!! SiteHelpers::showUploadedFile($row->$field['field'],$field['attribute']['image']['path']) !!}
					@else	
						{{--*/ $conn = (isset($field['conn']) ? $field['conn'] : array() ) /*--}}
						{!! SiteHelpers::gridDisplay($row->$field['field'],$field['field'],$conn) !!}	
					@endif						 
				 </td>
				 @endif					 
			 
			 @endforeach
			@endforeach
			</tr> 


        </tbody>	

     </table>   
     </div>
	
	</div>
</div>	

	</div>
</div>
	  
@stop