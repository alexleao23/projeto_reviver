{{-- Form de paciente separado por tipo de dado --}}
<h3>Dados pessoais</h3>
        {{-- Campo de nome --}}
        <div class="form-group has-feedback">
          {{ Form::label('nome', 'Nome Completo') }}
          {{ Form::text('nome', null , ['class'=>'form-control', $errors->has('nome') ? ' is-invalid' : '', 'placeholder'=>'Ex.: João Pereira da Silva']) }}
          {{-- <input name="nome" type="text" class="form-control" placeholder="Nome Completo" {{ $errors->has('nome') ? ' is-invalid' : '' }} value="{{ old('name') }}" required autofocus> --}}
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
          @if ($errors->has('nome'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('nome') }}</strong>
              </span>
          @endif
        </div>
        {{-- Campo de CPF --}}
        <div class="form-group has-feedback">
          {{ Form::label('cpf', 'CPF') }}
          {{ Form::text('cpf', null , ['class'=>'form-control cpf', $errors->has('cpf') ? ' is-invalid' : '', 'placeholder'=>'Ex.: 000.000.000-00']) }}
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
          @if ($errors->has('cpf'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('cpf') }}</strong>
              </span>
          @endif
        </div>
        {{-- Campo de responsável --}}
        <div class="form-group has-feedback">
          {{ Form::label('responsavel_id', 'Responsável') }}
          {{ Form::select('responsavel_id', $responsavel->pluck('nome', 'id'), null, ['placeholder'=>'Selecione', 'class'=>'form-control select2', 'required']) }}
        </div>
        {{-- Campo de sexo --}}
        <div class="form-group has-feedback">
          {{ Form::label('sexo', 'Sexo') }}
          {{ Form::select('sexo', ['Masculino' => 'Masculino', 'Feminino' => 'Feminino'], null, ['placeholder'=>'Selecione', 'class'=>'form-control', 'required']) }}
        </div>
        {{-- Data de nascimento --}}
        <div class="form-group has-feedback">
          {{ Form::label('data_nasc', 'Data de nascimento') }}
          {{ Form::text('data_nasc', ($paciente->data_nasc)? $paciente->data_nasc_formatada : null,['class'=>'form-control date', $errors->has('data_nasc') ? ' is-invalid' : '', 'placeholder'=>'Ex.: 01/01/1990']) }}
          {{-- <input name="data_nasc" type="text" class="form-control date" placeholder="Data de nascimento" {{ $errors->has('data_nasc') ? ' is-invalid' : '' }}" value="{{ old('data_nasc') }}" required> --}}
          <span class="fa fa-calendar form-control-feedback"></span>
          @if ($errors->has('data_nasc'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('data_nasc') }}</strong>
              </span>
          @endif
        </div>
        {{-- Campo de estado civil --}}
        <div class="form-group has-feedback">
          {{ Form::label('estado_civil', 'Estado Civil') }}
          {{ Form::select('estado_civil', ['Solteiro(a)'=>'Solteiro(a)','Casado(a)'=>'Casado(a)','Desquitado(a)'=>'Desquitado(a)','Divorciado(a)'=>'Divorciado(a)','Viúvo(a)'=>'Viúvo(a)','Outros'=>'Outros'], null, ['placeholder'=>'Selecione', 'class'=>'form-control', 'required']) }}
        </div>
        {{-- Campo de celular --}}
        <div class="form-group has-feedback">
          {{ Form::label('celular', 'Celular') }}
          {{ Form::text('celular', null , ['class'=>'form-control telefone', $errors->has('celular') ? ' is-invalid' : '', 'placeholder'=>'Ex.: 99999-9999']) }}
          {{-- <input name="celular" type="celular" class="form-control telefone" placeholder="Celular(Ex: 99999-9999)" {{ $errors->has('celular') ? ' is-invalid' : '' }}" value="{{ old('celular') }}" required> --}}
          <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
          @if ($errors->has('celular'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('celular') }}</strong>
              </span>
          @endif
        </div>
        <h3>Localização</h3>
        {{-- Campo de Endereço --}}
        <div class="form-group has-feedback">
          {{ Form::label('endereco', 'Endereço') }}
          {{ Form::text('endereco', null , ['class'=>'form-control', $errors->has('endereco') ? ' is-invalid' : '', 'placeholder'=>'Ex: Avenida Henrique Galúcio, 1221']) }}
          {{-- <input name="endereco" class="form-control endereco" placeholder="Endereço(Ex: Avenida Henrique Galúcio, 1221)" {{ $errors->has('endereco') ? ' is-invalid' : '' }}" value="{{ old('endereco') }}" required> --}}
          <span class="fa fa-home form-control-feedback"></span>
          @if ($errors->has('endereco'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('endereco') }}</strong>
              </span>
          @endif
        </div>
        {{-- Campo de Complemento --}}
        <div class="form-group has-feedback">
          {{ Form::label('complemento', 'Complemento') }}
          {{ Form::text('complemento', null , ['class'=>'form-control', $errors->has('complemento') ? ' is-invalid' : '', 'placeholder'=>'Ex: Apartamento, Condominio, etc']) }}
          {{-- <input name="complemento" class="form-control complemento" placeholder="Complemento(Ex: Apartamento, Condominio, etc)" {{ $errors->has('complemento') ? ' is-invalid' : '' }}" value="{{ old('complemento') }}" required> --}}
          <span class="fa fa-address-book form-control-feedback"></span>
          @if ($errors->has('complemento'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('complemento') }}</strong>
              </span>
          @endif
        </div>
        {{-- Campo de Bairro --}}
        <div class="form-group has-feedback">
          {{ Form::label('bairro', 'Bairro') }}
          {{ Form::text('bairro', null , ['class'=>'form-control', $errors->has('bairro') ? ' is-invalid' : '', 'placeholder'=>'Ex: Centro']) }}
          {{-- <input name="bairro" class="form-control bairro" placeholder="Bairro(Ex: Centro)" {{ $errors->has('bairro') ? ' is-invalid' : '' }}" value="{{ old('bairro') }}" required> --}}
          <span class="fa fa-location-arrow form-control-feedback"></span>
          @if ($errors->has('bairro'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('bairro') }}</strong>
              </span>
          @endif
        </div>
        <h3>Questionário</h3>
        {{-- Qual a sua escolaridade? --}}
        <div class="form-group has-feedback">
            {{ Form::label('escolaridade', 'Qual a sua escolaridade?') }}
            {{ Form::select('escolaridade', ['Analfabeto'=>'Analfabeto', 'EFI'=>'Ensino Fundamental Incompleto', 'EFC'=>'Ensino Fundamental Completo', 'EMI'=>'Ensino Médio Incompleto', 'EMC'=>'Ensino Médio Completo', 'ESI'=>'Ensino Superior Incompleto', 'ESC'=>'Ensino Superior Completo', 'Pós-graduação'=>'Pós-graduação'], null, ['class'=>'form-control', 'placeholder' => 'Selecione']) }}
            {!! $errors->first('escolaridade', '<span class="help-block">:message</span>') !!}
        </div>
        {{-- Você fuma? --}}
        <div class="form-group has-feedback">
            {{ Form::label('fuma', 'Você fuma?') }}
            {{ Form::select('fuma', ['NÃO' => 'NÃO', 'SIM' => 'SIM', 'PAROU'=>'PAROU'], null, ['class'=>'form-control fuma', 'required']) }}
        </div>
        <div class="box box-success tempofuma" style="z-index: 99">
            <div class='box-body' style="background-color: lightgrey;">
                {{-- Se PAROU, Há quanto tempo parou? --}}
                <div class="form-group has-feedback">
                    {{ Form::label('tempo_fuma', 'Há quanto tempo parou?') }}
                    {{ Form::text('tempo_fuma', null, ['class'=>'form-control','placeholder' => 'Ex.: Dois meses']) }}
                </div>
            </div>
        </div>
        {{-- Você consome alguma bebida alcoólica? --}}
        <div class="form-group has-feedback">
            {{ Form::label('bebida_alcoolica', 'Você consome alguma bebida alcoólica?') }}
            {{ Form::select('bebida_alcoolica', ['NÃO' => 'NÃO', 'SIM' => 'SIM'], null, ['class'=>'form-control bebe', 'required']) }}
        </div>
        <div class="box box-success quantobebe" style="z-index: 99">
            <div class='box-body' style="background-color: lightgrey;">
                {{-- Se SIM, quantos dias no mês? --}}
                <div class="form-group has-feedback">
                    {{ Form::label('quantos_dias_mes', 'Quantos dias no mês?') }}
                    {{ Form::select('quantos_dias_mes', ['Raramente'=>'Raramente', '1 dia no mês'=>'1 dia no mês', '2-5 dias'=>'2-5 dias', '5-10 dias'=>'5-10 dias', 'Mais de 10 dias'=>'Mais de 10 dias'], null, ['placeholder'=>'Selecione','class'=>'form-control']) }}
                </div>
            </div>
        </div>
        {{-- Você realiza alguma atividade física? --}}
        <div class="form-group has-feedback realizafisica">
            {{ Form::label('atividade_fisica', 'Você realiza alguma atividade física?') }}
            {{ Form::select('atividade_fisica', ['NÃO' => 'NÃO', 'SIM' => 'SIM'], null, ['class'=>'form-control', 'required']) }}
        </div>
         <div class="box box-success atividadefisica" style="z-index: 99">
            <div class='box-body' style="background-color: lightgrey;">
                {{-- Se SIM, quais atividades físicas? --}}
                <div class="form-group has-feedback">
                    {{ Form::label('quais_atividades_fisicas', 'Quais atividades físicas?') }}
                    {{ Form::text('quais_atividades_fisicas', null, ['class'=>'form-control','placeholder' => 'Ex.: Corrida, Natação']) }}
                </div>
            </div>
        </div>
        {{-- Qual o melhor horário para atendimento? --}}
        <div class="form-group has-feedback">
            {{ Form::label('horario_atend', 'Qual o melhor horário para atendimento?') }}
            {{ Form::select('horario_atend', ['Manhã'=>'Manhã', 'Tarde'=>'Tarde'], null, ['class'=>'form-control time', 'placeholder' => 'Selecione']) }}
            {!! $errors->first('horario_atend', '<span class="help-block">:message</span>') !!}
        </div>
        {{-- Qual o melhor dia para atendimento? --}}
        <div class="form-group has-feedback">
            {{ Form::label('dia_atend', 'Qual o melhor dia para atendimento?') }}
            {{ Form::select('dia_atend', ['Segunda'=>'Segunda', 'Terça'=>'Terça', 'Quarta'=>'Quarta', 'Quinta'=>'Quinta', 'Sexta'=>'Sexta', 'Sábado'=>'Sábado'], null, ['class'=>'form-control','placeholder' => 'Selecione']) }}
        </div>
        {{-- Como ficou sabendo do Projeto Reviver? --}}
        <div class="form-group has-feedback">
            {{ Form::label('sabendo_projeto', 'Como ficou sabendo do Projeto Reviver?') }}
            {{ Form::select('sabendo_projeto', ['Redes Sociais'=>'Redes Sociais', 'Amigos, Parentes, Vizinhos'=>'Amigos, Parentes, Vizinhos', 'Universidade'=>'Universidade', 'Outros'=>'Outros'], null, ['class'=>'form-control comoconheceu', 'placeholder'=>'Selecione']) }}
        </div>
        <div class="box box-success outros" style="z-index: 99">
            <div class='box-body' style="background-color: lightgrey;">
                {{-- Se Outro, Por onde ficou sabendo do projeto --}}
                <div class="form-group has-feedback">
                    {{ Form::label('por_onde', 'Qual outra forma?') }}
                    {{ Form::text('por_onde', null, ['class'=>'form-control','placeholder' => 'Ex.: TV']) }}
                </div>
            </div>
        </div>      
        {{-- Qual o diagnóstico do paciente? --}}
        <div class="form-group has-feedback">
            {{ Form::label('diagnostico_paciente', 'Diagnóstico do paciente') }}
            {{ Form::select('diagnostico_paciente', ['Doença de Alzheimer (DA)'=>'Doença de Alzheimer (DA)', 'Doença de Parkinson (DP)'=>'Doença de Parkinson (DP)'], null, ['class'=>'form-control','placeholder' => 'Selecione']) }}
        </div>
        {{-- Há quanto tempo possui a doença? --}}
        <div class="form-group has-feedback">
            {{ Form::label('tempo_doenca', 'Há quanto tempo possui a doença?') }}
            {{ Form::select('tempo_doenca', ['1 ano'=>'1 ano', '2 anos'=>'2 anos', '3 anos'=>'3 anos', 'Outro'=>'Outro'], null, ['class'=>'form-control tempodoenca','placeholder' => 'Selecione']) }}
        </div>
        <div class="box box-success outrostempo" style="z-index: 99">
            <div class='box-body' style="background-color: lightgrey;">
                <div class="form-group has-feedback">
                    {{ Form::label('tempo_outro', 'Há quanto tempo?') }}
                    {{ Form::text('tempo_outro', null, ['class'=>'form-control','placeholder' => 'Ex.: 10 anos']) }}
                </div>
            </div>
        </div>
        {{-- Paciente faz uso de medicamentos? --}}
        <div class="form-group has-feedback">
            {{ Form::label('uso_medicamentos', 'Paciente faz uso de medicamentos?') }}
            {{ Form::select('uso_medicamentos', ['NÃO' => 'NÃO', 'SIM' => 'SIM'], null, ['class'=>'form-control usamedicamentos', 'required']) }}
        </div>
          <div class="box box-success campousamedicamentos" style="z-index: 99">
            <div class='box-body' style="background-color: lightgrey;">
                {{-- Quais medicamentos utiliza? --}}
                <div class="form-group has-feedback ">
                    {{ Form::label('nome_medicamentos', 'Quais medicamentos utiliza?') }}
                    {{ Form::text('nome_medicamentos', null, ['class'=>'form-control','placeholder' => 'Ex.: Paracetamol, Doril']) }}
                </div>
                {{-- Qual a dosagem? --}}
                <div class="form-group has-feedback">
                    {{ Form::label('dose', 'Qual a dosagem?') }}
                    {{ Form::text('dose', null, ['class'=>'form-control','placeholder' => 'Ex.: Dois comprimidos ao dia']) }}
                </div>
                {{-- Quais horários? --}}
                <div class="form-group has-feedback ">
                    {{ Form::label('horarios', 'Quais horários toma os medicamentos?') }}
                    {{ Form::text('horarios', null, ['class'=>'form-control','placeholder' => 'Quais horários?']) }}
                </div>
                {{-- Se SIM, sob prescrição médica? --}}
                <div class="form-group has-feedback campoprescrito">
                    {{ Form::label('sob_prescricao', 'Sob prescrição médica?') }}
                    {{ Form::select('sob_prescricao', ['NÃO' => 'NÃO', 'SIM' => 'SIM'], null, ['class'=>'form-control']) }}
                </div>
                {{-- Se SIM, qual médico prescreveu os medicamentos? --}}
                <div class="form-group has-feedback campomedico">
                    {{ Form::label('medico_prescreveu', 'Qual médico prescreveu os medicamentos?') }}
                    {{ Form::text('medico_prescreveu', null, ['class'=>'form-control','placeholder' => 'Ex.: Dr. Pedro Santos']) }}
                </div>
            </div>
          </div>

        {{-- Você faz algum tratamento sem medicamentos? --}}
        <div class="form-group has-feedback realizatratamentossemmed">
            {{ Form::label('tratamento_smed', 'Você faz algum tratamento sem medicamentos?') }}
            {{ Form::select('tratamento_smed', ['NÃO' => 'NÃO', 'SIM' => 'SIM'], null, ['class'=>'form-control', 'required']) }}
        </div>
         <div class="box box-success tratamentossemmed" style="z-index: 99">
            <div class='box-body' style="background-color: lightgrey;">
                {{-- Se SIM, quais tratamentos? --}}
                <div class="form-group has-feedback">
                    {{ Form::label('quais_tratamentos', 'Quais tratamentos?') }}
                    {{ Form::text('quais_tratamentos', null, ['class'=>'form-control','placeholder' => 'Ex.: Fisioterapia']) }}
                </div> 
            </div>
        </div>
        {{-- Você tem se sentido incapaz de realizar atividades domésticas habituais devido à sua doença? --}}
        <div class="form-group has-feedback incapazdomestica">
            {{ Form::label('incapaz_realizar_atividades_domesticas', 'Você tem se sentido incapaz de realizar atividades domésticas habituais devido à sua doença?') }}
            {{ Form::select('incapaz_realizar_atividades_domesticas', ['NÃO' => 'NÃO', 'SIM' => 'SIM'], null, ['class'=>'form-control', 'required']) }}
        </div>
         <div class="box box-success campodomestica" style="z-index: 99">
            <div class='box-body' style="background-color: lightgrey;">
                {{-- Se SIM, quais atividades? --}}
                <div class="form-group has-feedback">
                    {{ Form::label('quais_atividades', 'Quais atividades?') }}
                    {{ Form::text('quais_atividades', null, ['class'=>'form-control','placeholder' => 'Ex.: Varrer a casa']) }}
                </div> 
            </div>
        </div>
        {{-- Você realiza alguma atividade de lazer ou divertimento? --}}
        <div class="form-group has-feedback camporealizalazer">
            {{ Form::label('atividades_lazer', 'Você realiza alguma atividade de lazer ou divertimento?') }}
            {{ Form::select('atividades_lazer', ['NÃO' => 'NÃO', 'SIM' => 'SIM'], null, ['class'=>'form-control', 'required']) }}
        </div>
         <div class="box box-success campolazer" style="z-index: 99">
            <div class='box-body' style="background-color: lightgrey;">
                {{-- Se SIM, quais atividades de lazer? --}}
                <div class="form-group has-feedback">
                    {{ Form::label('quais_atividades_lazer', 'Quais atividades de lazer?') }}
                    {{ Form::text('quais_atividades_lazer', null, ['class'=>'form-control','placeholder' => 'Ex.: Jogar bola']) }}
                </div>
            </div>
        </div>
        {{-- Seu estado de saúde tem interferido nas suas atividades de lazer ou divertimento? --}}
        <div class="form-group has-feedback teminterferido">
            {{ Form::label('interferido_atividades_lazer', 'Seu estado de saúde tem interferido nas suas atividades de lazer ou divertimento?') }}
            {{ Form::select('interferido_atividades_lazer', ['NÃO' => 'NÃO', 'SIM' => 'SIM'], null, ['class'=>'form-control', 'required']) }}
        </div>
         <div class="box box-success maneira" style="z-index: 99">
            <div class='box-body' style="background-color: lightgrey;">
                {{-- Se SIM, de que maneira? --}}
                <div class="form-group has-feedback">
                    {{ Form::label('de_que_maneira', 'De que maneira?') }}
                    {{ Form::text('de_que_maneira', null, ['class'=>'form-control','placeholder' => 'Ex.: Impedindo que eu saia de casa']) }}
                </div>
            </div>
        </div>
        {{-- Você participa de atividades religiosas? --}}
        <div class="form-group has-feedback realizareligiosa">
            {{ Form::label('atividades_religiosas', 'Você participa de atividades religiosas?') }}
            {{ Form::select('atividades_religiosas', ['NÃO' => 'NÃO', 'SIM' => 'SIM'], null, ['class'=>'form-control', 'required']) }}
        </div>
         <div class="box box-success atividadereligiosa" style="z-index: 99">
            <div class='box-body' style="background-color: lightgrey;">
                {{-- Se SIM, quais atividades religiosas? --}}
                <div class="form-group has-feedback">
                    {{ Form::label('quais_atividades_religiosas', 'Quais atividades religiosas?') }}
                    {{ Form::text('quais_atividades_religiosas', null, ['class'=>'form-control','placeholder' => 'Ex.: Evangelizar']) }}
                </div>
            </div>
        </div>
        {{-- Como você costuma se locomover? --}}
        <div class="form-group has-feedback">
            {{ Form::label('como_locomover', 'Como você costuma se locomover?') }}
            {{ Form::select('como_locomover', ['Carro' => 'Carro', 'Transporte Público' => 'Transporte Público', 'Bicicleta' => 'Bicicleta', 'Motocicleta' => 'Motocicleta', 'A pé' => 'A pé'], null, ['placeholder'=>'Selecione', 'class'=>'form-control', 'required']) }}
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