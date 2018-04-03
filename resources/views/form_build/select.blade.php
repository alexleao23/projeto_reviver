<div class="form-group has-feedback {{ $classdiv }}">
  {{ Form::label($nome, $label) }}
  {{ Form::select($nome, $opcoes, $dado, ['placeholder'=>$placeholder, 'class'=>$class, 'style'=>'width: 100%', $required]) }}
</div>