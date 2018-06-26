@extends('layouts.layout')

@section('content')
	<table class="table table-striped">
		<thead>
			<tr>
				<th width="100">Assunto</th>
				<th width="120">Descrição</th>
				<th width="120">Usuário</th>
				<th width="120">Data</th>
				<th width="135" style="text-align:center;">Opção</th>
			</tr>
		</thead>
		<tbody>
			@foreach($seeks as $seek)
				<tr>
					<td>{{ $seek->topic }}</td>
					<td>{{ $seek->description }}</td>
					<td>{{ $seek->user_name }}</td>
					<td>{{ date("d-m-Y", strtotime($seek->created_at)) }}</td>
					<td width="135" class="buttons" align="center">
						<a href="{{ url('map/seek') }}/{{ $seek->id }}"><button type="button"><span class="icon-pencil"></span></button></a>
					</td>
				</tr>
			@endforeach			
		</tbody>
	</table>
	<div class="table-footer">
		
	</div>
@endsection
