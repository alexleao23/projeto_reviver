<div class="form-group has-feedback {{ $classdiv }}">
  {{ Form::label($nome, $label) }}
  {{ Form::text($nome, $dado , ['class'=>$class, $errors->has($nome) ? ' is-invalid' : '', 'placeholder'=>$placeholder]) }}
  <span class="form-control-feedback {{ $classicon }}"></span>
  @if ($errors->has($nome))
      <span class="invalid-feedback">
          <strong>{{ $errors->first($nome) }}</strong>
      </span>
  @endif
</div>