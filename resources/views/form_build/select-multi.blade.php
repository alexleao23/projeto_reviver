<div class="form-group has-feedback {{ $classdiv }}">
  {{ Form::label($nome, $label) }}
  {{ Form::select($nome, $opcoes, $dado, ['data-placeholder'=>$dataplaceholder, 'class'=>$class, 'style'=>'width: 100%', $required, $multiple]) }}
  {!! $errors->first($nome, '<span class="help-block">:message</span>') !!}
</div>