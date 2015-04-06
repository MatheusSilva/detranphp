@extends('layouts.master')

@section('content')
	<div class="list generic">
		<header>
			{{ link_to('multa/create', 'Novo', array('class' => 'btn btn_new')) }}
			<h4>Multas</h4>
		</header>
		{{ Form::open(array('url' => 'multa', 'method' => 'get')) }}
			{{ Form::text('infracao', $infracao, array('placeholder' => 'Infração')) }}
			{{ Form::button('Pesquisar', array('type' => 'submit', 'class' => 'btn btn_search')) }}
		{{ Form::close() }}
		@if($multas->getItems())
			<table>
				<thead>
					<tr>
						<th><a href="{{ URL::to('multa?sort=infracao' . $str) }}">Infração</a></th>
                                                <th><a href="{{ URL::to('multa?sort=ponto' . $str) }}">Pontos</a></th>
                                                <th><a href="{{ URL::to('multa?sort=infracao' . $str) }}">Penalidade</a></th>
                                                <th><a href="{{ URL::to('multa?sort=ponto' . $str) }}">Valor</a></th>
						<th colspan="2"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($multas as $multa)
						<tr>
							<td>{{ e($multa->infracao) }}</td>
                                                        <td>{{ e($multa->ponto) }}</td>
                                                        <td>{{ e($multa->penalidade) }}</td>
                                                        <td>{{ e($multa->valor) }}</td>
							<td class="action">{{ link_to('multa/' . $multa->id . '/edit', '', array('class' => 'ico ico_edit', 'title' => 'Editar')) }}</td>
							<td class="action">
								{{ Form::open(array('url' => 'multa/' . $multa->id, 'method' => 'delete', 'data-confirm' => 'Deseja realmente excluir o registro selecionado?')) }}
									{{ Form::button('', array('type' => 'submit', 'class' => 'ico ico_delete', 'title' => 'Apagar')) }}
								{{ Form::close() }}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div id="data_paginate">
				{{ $pagination }}
				<p>Exibindo de {{ $multas->getFrom() }} até {{ $multas->getTo() }} de {{ $multas->getTotal() }} registros.</p>
			</div>
		@else
			<p class="no_information">{{ require_once '/var/www/aplicacao/app/library/util.php'; Util::message('MSG008') }}</p>
		@endif
	</div>
@stop