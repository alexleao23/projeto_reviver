{{-- Form de questionário de nutrição --}}
        {{-- Paciente --}}
        <div class="form-group has-feedback">
            {{ Form::label('paciente_id', 'Paciente') }}
            {{ Form::select('paciente_id', $paciente->pluck('nome', 'id'), $paciente->id, ['placeholder'=>'Paciente relacionado','class'=>'select2 form-control', 'disabled']) }}
            {!! $errors->first('paciente_id', '<span class="help-block">:message</span>') !!}
        </div>
        
        {{-- Botões abaixo dos campos --}}
        <div class="row">
          <div class="col-xs-6">
            <a href="{{ URL::previous() }}" class="pull-right btn btn-default btn-block btn-flat">Voltar</a>
          </div> 
          <div class="col-xs-6">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Cadastrar</button>
          </div>
          <!-- /.col -->
        </div>