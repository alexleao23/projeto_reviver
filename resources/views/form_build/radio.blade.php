@php
	$classdiv = $classdiv ?? 'col-md-4';
	$class = $class ?? 'flat-red';
	$id = $id ?? '';
@endphp
<div class="{{ $classdiv }}">
	<div class="form-group">
		{{ Form::label($nome, $label) }}<br>
		{{ Form::radio($nome, 'SIM', false, ['class'=>$class]) }} Sim&nbsp;&nbsp;
		{{ Form::radio($nome, 'NÃO', true, ['class'=>$class, 'id'=>$id]) }} Não&nbsp;&nbsp;
	</div>
</div>