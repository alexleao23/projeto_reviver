@php
	$classdiv = $classdiv ?? 'col-md-4';
	$class = $class ?? 'flat-red';
@endphp
<div class={{ $classdiv }}>
	<div class="form-group">
		{{ Form::label($nome, $label) }}<br>
		@for ($i = 0; $i < count($opcoes); $i++)
			{{ Form::checkbox($nome, $opcoes[$i], false,['class'=>$class]) }} {{ $opcoes[$i] }}&nbsp;&nbsp;
		@endfor
	</div>
</div>