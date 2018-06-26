@extends('layouts.layout')

@section('content')
	<table class="table table-striped">
		<thead>
			<tr>
				<th width="100">Nome</th>
				<th width="120">Usuário</th>
				<th width="120">Sexo</th>
				<th width="120">Solicitações</th>
				<th width="120">Início</th>
				<th width="135" style="text-align:center;">Opção</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->name }}</td>
					<td>{{ $user->user }}</td>
					<td>{{ $user->gender }}</td>
					<td>{{ $user->seeks }}</td>
					<td>{{ $user->deficiency }}</td>
					<td width="135" class="buttons" align="center">
						<a href="{{ url('seeks') }}/{{ $user->id }}"><button type="button"><span class="icon-location"></span></button></a>
					</td>
				</tr>
			@endforeach			
		</tbody>
	</table>
	<div class="table-footer">
		
	</div>
@endsection
