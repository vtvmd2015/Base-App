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
		<li><a href="{{ URL::to('employeetypes?return='.$return) }}">{{ $pageTitle }}</a></li>
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>  
	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox animated fadeInRight">
	<div class="sbox-title"> 
   		<a href="{{ URL::to('employeetypes?return='.$return) }}" class="tips btn btn-xs btn-default pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
		@if($access['is_add'] ==1)
   		<a href="{{ URL::to('employeetypes/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
		@endif 
	</div>
	<div class="sbox-content" style="background:#fff;"> 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>Emp Type</td>
						<td>{{ $row->emp_type }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Description</td>
						<td>{{ $row->description }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Esi Apply</td>
						<td>{{ $row->esi_apply }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Esi Percentage</td>
						<td>{{ $row->esi_percentage }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pf Apply</td>
						<td>{{ $row->pf_apply }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pf Percentage</td>
						<td>{{ $row->pf_percentage }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Ot Apply</td>
						<td>{{ $row->ot_apply }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tds Apply</td>
						<td>{{ $row->tds_apply }} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop