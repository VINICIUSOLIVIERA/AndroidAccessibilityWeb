@extends('layouts.layout')
@section('content')
	<style type="text/css">
		
		.border-dashed{
			width: 100%;
			border-bottom: dashed 1px #ebebeb; 
			margin-bottom: 20px;
		}

	</style>
	<form action="{{url()->current()}}" method="POST" name="seek-edit">
		<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
		<input type="hidden" name="seek_id" value="{{ $seek->id }}"/>
		<input type="hidden" name="id" value="{{ isset($response) ? $response->id : '' }}"/>
		<div class="row box">
			<div class="col-md-12 box">
				<label for="seek_topic">
					<span>Assunto</span>
					<input type="text" class="form-input" disabled name="seek_topic" value="{{ $seek->topic }}"/>
				</label>
			</div>
		</div>
		<div class="row box">
			<div class="col-md-12 box">
				<label for="seek_description">
					<span>Descrição</span>
					<textarea class="form-input" disabled name="seek_description">{{ $seek->description }}</textarea>
				</label>
			</div>
		</div>
		<div class="border-dashed"></div>
		<div class="row box">
			<div class="col-md-4 box">
				<label for="status">
					<span>Status*</span>
					<select name="status" class="form-input">
						<option value="0" {{ isset($response) && $response->status == null ? "selected" : ""}}>Selecione</option>
						<option value="1" {{ isset($response) && $response->status == 1 ? "selected" : ""}}>Análise</option>
						<option value="2" {{ isset($response) && $response->status == 2 ? "selected" : ""}}>Desenvolvimento</option>
						<option value="3" {{ isset($response) && $response->status == 3 ? "selected" : ""}}>Recusado</option>
						<option value="4" {{ isset($response) && $response->status == 4 ? "selected" : ""}}>Realizado</option>
					</select>
				</label>
			</div>
			<div class="col-md-4 box-double">
				<label for="prevision">
					<span>Data de Início</span>
					<input type="date" name="prevision" class="form-input" value="{{ isset($response
					) ? $response->prevision : ''}}" />
				</label>
			</div>
			<div class="col-md-4 box-double">
				<label for="conclusion">
					<span>Data de Conclusão</span>
					<input type="date" name="conclusion" class="form-input" value="{{ isset($response
					) ? $response->conclusion :'' }}" />
				</label>
			</div>
		</div>
		<div class="row box">
			<div class="col-md-12 box">
				<label for="description">
					<span>Descrição</span>
					<textarea name="description" class="form-input">{{ isset($response
					) ? $response->description : '' }}</textarea>
				</label>
			</div>
		</div>
		<div class="row box">
			<div class="pull-left">
				<button type="reset" class="form-button bg-danger">Limpar formulário</button>
			</div>
			<div class="pull-right">
				<button type="submit" class="form-button bg-success btn-margin-left">Responder</button>
			</div>
		</div>
	</form>
@endsection

@push('script-add')
	
@endpush