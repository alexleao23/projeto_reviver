@php
	$dado = $dado ?? null;
	$classdiv = $classdiv ?? 'col-md-12';
	$required = $required ?? '';
@endphp
<div class="{{ $classdiv }}">
	<div class="form-group has-feedback">
	  {{ Form::label($nome, $label) }}
	  {{ Form::select($nome, $opcoes, $dado, ['placeholder'=>$placeholder, 'style'=>'width: 100%', 'class'=>$class, $required]) }}
	  {!! $errors->first($nome, '<span class="help-block">:message</span>') !!}
	</div>
</div>