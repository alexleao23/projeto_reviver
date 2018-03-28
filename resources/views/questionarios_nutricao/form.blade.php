{{-- Form de questionário de nutrição --}}
        {{-- Paciente --}}
        <div class="form-group has-feedback">
            {{ Form::label('paciente_id', 'Paciente') }}
            {{ Form::select('paciente_id', $paciente->pluck('nome', 'id'), $paciente->id, ['placeholder'=>'Paciente relacionado','class'=>'form-control', 'disabled']) }}
            {!! $errors->first('paciente_id', '<span class="help-block">:message</span>') !!}
        </div>
        {{-- Antecedentes Familiares --}}
        <div class="form-group has-feedback">
            {{ Form::label('antecedentes_familiares', 'Antecedentes Familiares') }}
            {{ Form::select('antecedentes_familiares', ['Diabetes'=>'Diabetes', 'Hipertensão'=>'Hipertensão', 'Câncer'=>'Câncer', 'Alzheimer'=>'Alzheimer'], null, ['data-placeholder'=>'Selecione', 'class'=>'form-control select2', 'multiple']) }}
            {!! $errors->first('antecedentes_familiares', '<span class="help-block">:message</span>') !!}
        </div>
        {{-- Antecedentes Clínicos --}}
        <div class="form-group has-feedback">
            {{ Form::label('antecedentes_clinicos', 'Antecedentes Clínicos') }}
            {{ Form::select('antecedentes_clinicos', ['Tabagista'=>'Tabagista', 'Alcoolista'=>'Alcoolista', 'Depressão'=>'Depressão', 'Doenças Cardiovasculares'=>'Doenças Cardiovasculares', 'Infarto'=>'Infarto', 'Traumatismo Craniano'=>'Traumatismo Craniano'], null, ['data-placeholder'=>'Selecione', 'class'=>'form-control select2', 'multiple']) }}              
            {!! $errors->first('antecedentes_clinicos', '<span class="help-block">:message</span>') !!}
        </div>
        {{-- Presença de Doenças --}}
        <div class="form-group has-feedback">
            {{ Form::label('presenca_doencas', 'Presença de Doenças') }}
            {{ Form::select('presenca_doencas', ['NÃO'=>'NÃO', 'SIM'=>'SIM'], null, ['class'=>'form-control']) }}
            {!! $errors->first('presenca_doencas', '<span class="help-block">:message</span>') !!}
        </div>
        {{-- Se SIM, quais doenças? --}}
        <div class="form-group has-feedback">
            {{ Form::label('quais_doencas', 'Se SIM, quais doenças?') }}
            {{ Form::select('quais_doencas', ['Diabetes'=>'Diabetes', 'Hipertensão'=>'Hipertensão', 'Câncer'=>'Câncer', 'Artrite Reumatóide'=>'Artrite Reumatóide', 'Inflamações'=>'Inflamações', 'Infecções'=>'Infecções', 'Febre'=>'Febre', 'Diarréia'=>'Diarréia', 'Outros'=>'Outros'], null, ['data-placeholder'=>'Selecione', 'class'=>'form-control select2', 'multiple']) }}
            {!! $errors->first('quais_doencas', '<span class="help-block">:message</span>') !!}
        </div>
        {{-- Se Outros, quais outros? --}}
        <div class="form-group has-feedback">
            {{ Form::label('outros_doencas', 'Se Outros, quais outros?') }}
            {{ Form::text('outros_doencas', null, ['placeholder'=>'Ex.: Sinusite, Renite','class'=>'form-control']) }}
            {!! $errors->first('outros_doencas', '<span class="help-block">:message</span>') !!}
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