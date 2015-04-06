@extends('layouts.master')

@section('content')
	<div class="form generic">
		<header>
			{{ link_to('multa', 'Voltar', array('class' => 'btn btn_back')) }}
			<h4>Adicionar Multa</h4>
		</header>
		{{ Form::open(array('url' => 'multa')) }}

			{{ Form::label('infracao', '*Infração') }}
			{{ Form::text('infracao', Input::old('infracao')) }}
			{{ $errors->first('infracao', '<span class="error">:message</span>') }}
                        
                        {{ Form::label('ponto', '*Ponto') }}
			{{ Form::text('ponto', Input::old('ponto')) }}
			{{ $errors->first('ponto', '<span class="error">:message</span>') }}
                        
                        {{ Form::label('penalidade', '*Penalidade') }}
			{{ Form::text('penalidade', Input::old('penalidade')) }}
			{{ $errors->first('penalidade', '<span class="error">:message</span>') }}
                        
                        {{ Form::label('valor', '*Valor') }}
			{{ Form::text('valor', Input::old('valor')) }}
			{{ $errors->first('valor', '<span class="error">:message</span>') }}

			{{ Form::submit('Salvar') }}
		{{ Form::close() }}
	</div>
@stop