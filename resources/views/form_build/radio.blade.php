@php
	$classdiv = $classdiv ?? 'col-md-4';
	$class1 = $class1 ?? 'flat-red';
	$class2 = $class2 ?? 'flat-red';
@endphp
<div class={{ $classdiv }}>
	<div class="form-group">
		{{ Form::label($nome, $label) }}<br>
		{{ Form::radio($nome, 'SIM', true, ['class'=>$class1]) }} Sim&nbsp;&nbsp;
		{{ Form::radio($nome, 'NÃO', true, ['class'=>$class2]) }} Não&nbsp;&nbsp;
	</div>
</div>