{{-- Form de questionário de nutrição --}}
{{ csrf_field() }}
        {{-- Campo de paciente --}}
        <div class="form-group has-feedback">
          {{ Form::select('paciente_id', $pacientes->pluck('nome', 'id'), null, ['placeholder'=>'Paciente relacionado','class'=>'select2 form-control']) }}
          {!! $errors->first('paciente_id', '<span class="help-block">:message</span>') !!}
        </div>
        {{-- Campo de hora de atendimento --}}
        <div class="form-group has-feedback">
          {{ Form::text('horario_atend', 'SUS', ['class'=>'form-control time', 'placeholder' => 'Hora de atendimento']) }}
          {!! $errors->first('horario_atend', '<span class="help-block">:message</span>') !!}
        </div>
        {{-- Dia do atendimento --}}
        <div class="form-group has-feedback">
        {{-- {{ Form::label('dia_atend', 'Dia de atendimento') }} --}}
        {{ Form::text('dia_atend', null, ['class'=>'form-control date','placeholder' => 'Dia de atendimento']) }}
        </div>
        {{-- Campo de CFSPR?? --}}
        <div class="form-group has-feedback">
        {{-- {{ Form::label('cfspr', 'CFSPR') }} --}}
        {{ Form::text('cfspr', null, ['class'=>'form-control', 'placeholder' => 'CFSPR']) }}
        </div>
        {{-- Campo de diagnostico_paciente? --}}
        <div class="form-group has-feedback">
        {{-- {{ Form::label('diagnostico_paciente', 'Diagnóstico do paciente') }} --}}
        {{ Form::text('diagnostico_paciente', null, ['class'=>'form-control','placeholder' => 'Diagnóstico']) }}
        </div>
        {{-- Campo de tempo de doença --}}
        <div class="form-group has-feedback">
        {{-- {{ Form::label('tempo_doenca', 'Tempo de doença') }} --}}
        {{ Form::text('tempo_doenca', null, ['class'=>'form-control','placeholder' => 'Tempo de doença']) }}
        </div>
        {{-- Campo de Uso de medicamento --}}
        <div class="form-group has-feedback">
        {{ Form::select('uso_medicamentos', ['SIM' => 'SIM', 'NÃO' => 'NÃO'], null, ['placeholder'=>'Usa medicamentos?', 'class'=>'form-control', 'required']) }}
        </div>
        {{-- campo de prescrição ou nao --}}
        <div class="form-group has-feedback">
        {{ Form::select('sob_prescricao', ['SIM' => 'SIM', 'NÃO' => 'NÃO'], null, ['placeholder'=>'Caso sim, é sob prescrição?', 'class'=>'form-control', 'required']) }}
        </div>
        {{-- campo de medico --}}
        <div class="form-group has-feedback">
        {{ Form::text('medico_que_prescreveu', null, ['class'=>'form-control','placeholder' => 'Caso seja, qual médico prescreveu?']) }}
        </div>
        {{-- campo de medicamentos --}}
        <div class="form-group has-feedback">
        {{ Form::text('nome_medicamentos', null, ['class'=>'form-control','placeholder' => 'Quais medicamentos são?']) }}
        </div>
        {{-- campo de dose --}}
        <div class="form-group has-feedback">
        {{ Form::text('dose', null, ['class'=>'form-control','placeholder' => 'Qual a dosagem?']) }}
        </div>
        {{-- campo de horário --}}
        <div class="form-group has-feedback">
        {{ Form::text('horario', null, ['class'=>'form-control','placeholder' => 'Quais horários?']) }}
        </div>
        {{-- faz tratamento medico? --}}
        <div class="form-group has-feedback">
        {{ Form::select('faz_tratamento_med', ['SIM' => 'SIM', 'NÃO' => 'NÃO'], null, ['placeholder'=>'Faz tratamento médico?', 'class'=>'form-control', 'required']) }}
        </div>
        {{-- quais tratamentos --}}
        <div class="form-group has-feedback">
        {{ Form::text('quais_tratamento', null, ['class'=>'form-control','placeholder' => 'Caso sim, quais tratamentos?']) }}
        </div> 
        {{-- incapaz de realizar atv domesticas? --}}
        <div class="form-group has-feedback">
        {{ Form::select('incapaz_realizar_atividades_domesticas', ['SIM' => 'SIM', 'NÃO' => 'NÃO'], null, ['placeholder'=>'É incapaz de realizar atividades domésticas?', 'class'=>'form-control', 'required']) }}
        </div>
        {{-- Quais atividades --}}
        <div class="form-group has-feedback">
        {{ Form::text('quais_atividades', null, ['class'=>'form-control','placeholder' => 'Caso sim, quais atividades?']) }}
        </div> 
        {{-- atividades_lazer nao entendi esse, se ele gosta de fazer ou se faz--}}
        <div class="form-group has-feedback">
        {{ Form::select('atividades_lazer', ['SIM' => 'SIM', 'NÃO' => 'NÃO'], null, ['placeholder'=>'atividades_lazer n entendi', 'class'=>'form-control', 'required']) }}
        </div>
        {{-- quais atividades_lazer? --}}
        <div class="form-group has-feedback">
        {{ Form::text('quais_atividades_lazer', null, ['class'=>'form-control','placeholder' => 'Caso sim, quais atividades_lazer?']) }}
        </div>
        {{-- MAIOR CAMPO DO FORMULÁRIO CREEMDEUSPAI --}} 
        {{ Form::select('estado_saude_interferido_atividades_lazer', ['SIM' => 'SIM', 'NÃO' => 'NÃO'], null, ['placeholder'=>'Estado de saúde afeta atividades de lazer?', 'class'=>'form-control', 'required']) }}
        {{-- campo de maneira --}}
        <div class="form-group has-feedback">
        {{ Form::text('de_que_maneira', null, ['class'=>'form-control','placeholder' => 'Caso sim, de que maneira?']) }}
        </div>
        {{-- atividade_fisica tb n entendi igual o de lazer mesma duvida --}}
        <div class="form-group has-feedback">
        {{ Form::select('atividade_fisica', ['SIM' => 'SIM', 'NÃO' => 'NÃO'], null, ['placeholder'=>'atividade_fisica', 'class'=>'form-control', 'required']) }}
        </div>
        {{-- caso sim, quais atividade_fisica --}}
        <div class="form-group has-feedback">
        {{ Form::text('quais_atividades_fisicas', null, ['class'=>'form-control','placeholder' => 'Caso sim, quais atividades físicas?']) }}
        </div>
        {{-- atividades_religiosas msm coisa --}}
        <div class="form-group has-feedback">
        {{ Form::select('atividades_religiosas', ['SIM' => 'SIM', 'NÃO' => 'NÃO'], null, ['placeholder'=>'atividades_religiosas', 'class'=>'form-control', 'required']) }}
        </div>
        {{-- quais atividades_religiosas --}}
        <div class="form-group has-feedback">
        {{ Form::text('quais_atividades_religiosas', null, ['class'=>'form-control','placeholder' => 'Caso sim, quais atividades religiosas?']) }}
        </div>
        {{-- Como se locomove --}}
        <div class="form-group has-feedback">
        {{ Form::select('como_locomover', ['Carro' => 'Carro', 'Transporte Público' => 'Transporte Público', 'Bicicleta' => 'Bicicleta', 'Motocicleta' => 'Motocicleta', 'A pé' => 'A pé'], null, ['placeholder'=>'atividades_religiosas', 'class'=>'form-control', 'required']) }}
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