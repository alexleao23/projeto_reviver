{{-- Form de questionário de nutrição --}}
{{--  IMC, PONTUAÇÃO-IMC e PONTUAÇÃO-TRIAGEM --}}
        <h3 style="margin-top: 1%">História Clínica</h3>  
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
        {{-- Uso de medicamentos ou suplemento vitamínico-mineral --}}
        <div class="form-group has-feedback">
            {{ Form::label('medicamento_suplemento', 'Uso de medicamentos ou suplemento vitamínico-mineral') }}
            {{ Form::select('medicamento_suplemento', ['NÃO'=>'NÃO', 'SIM'=>'SIM'], null, ['class'=>'form-control']) }}
            {!! $errors->first('medicamento_suplemento', '<span class="help-block">:message</span>') !!}
        </div>
        {{-- Se SIM, qual o nome do medicamento ou suplemento vitamínico-mineral? --}}
        <div class="form-group has-feedback">
            {{ Form::label('nome_medicamento', 'Se SIM, qual o nome do medicamento ou suplemento vitamínico-mineral?') }}
            {{ Form::text('nome_medicamento', null, ['placeholder'=>'Ex.:','class'=>'form-control']) }}
            {!! $errors->first('nome_medicamento', '<span class="help-block">:message</span>') !!}
        </div>
        {{-- Início do tratamento --}}
        <div class="form-group has-feedback">
            {{ Form::label('inicio_tratamento', 'Início do tratamento') }}
            {{ Form::text('inicio_tratamento', null, ['placeholder'=>'Ex.: 6 meses atrás','class'=>'form-control']) }}
            {!! $errors->first('inicio_tratamento', '<span class="help-block">:message</span>') !!}
        </div>
        {{-- Posologia --}}
        <div class="form-group has-feedback">
            {{ Form::label('posologia', 'Posologia') }}
            {{ Form::text('posologia', null, ['placeholder'=>'Ex.: Duas vezes ao dia','class'=>'form-control']) }}
            {!! $errors->first('posologia', '<span class="help-block">:message</span>') !!}
        </div>
        {{-- FF (não sei o que é) --}}
        <div class="form-group has-feedback">
            {{ Form::label('ff', 'FF') }}
            {{ Form::text('ff', null, ['placeholder'=>'Ex.:','class'=>'form-control']) }}
            {!! $errors->first('ff', '<span class="help-block">:message</span>') !!}
        </div>
        {{-- Toma em jejum? --}}
        <div class="form-group has-feedback">
            {{ Form::label('jejum', 'Toma em jejum?') }}
            {{ Form::select('jejum', ['NÃO'=>'NÃO', 'SIM'=>'SIM'], null, ['class'=>'form-control']) }}
            {!! $errors->first('jejum', '<span class="help-block">:message</span>') !!}
        </div>
        {{-- Toma próximo a algum alimento ou refeição? --}}
        <div class="form-group has-feedback">
            {{ Form::label('toma_prox_alimento', 'Toma próximo a algum alimento ou refeição?') }}
            {{ Form::select('toma_prox_alimento', ['NÃO'=>'NÃO', 'SIM'=>'SIM'], null, ['class'=>'form-control']) }}
            {!! $errors->first('toma_prox_alimento', '<span class="help-block">:message</span>') !!}
        </div>
        {{-- Se SIM, qual medicamento? --}}
        <div class="form-group has-feedback">
            {{ Form::label('qual_medicamento', 'Se SIM, qual medicamento?') }}
            {{ Form::text('qual_medicamento', null, ['placeholder'=>'Ex.:','class'=>'form-control']) }}
            {!! $errors->first('qual_medicamento', '<span class="help-block">:message</span>') !!}
        </div>
        {{-- Toma com algum líquido? --}}
        <div class="form-group has-feedback">
            {{ Form::label('toma_liquido', 'Toma com algum líquido?') }}
            {{ Form::select('toma_liquido', ['NÃO'=>'NÃO', 'SIM'=>'SIM'], null, ['class'=>'form-control']) }}
            {!! $errors->first('toma_liquido', '<span class="help-block">:message</span>') !!}
        </div>
        <h3>Triagem</h3>
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