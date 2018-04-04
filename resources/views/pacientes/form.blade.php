{{-- Form de paciente separado por tipo de dado --}}
<h3 style="margin-top: 1%">Dados pessoais</h3>

{{-- Campo de nome --}}
@include('form_build.text', [
    'nome'=>'nome',
    'label'=>'Nome Completo',
    'class'=>'form-control',
    'placeholder'=>'Ex.: João Pereira da Silva',
    'dado'=>null,
    'classicon'=>'glyphicon glyphicon-user',
    'classdiv'=>''
])

{{-- Campo de CPF --}}
@include('form_build.text', [
    'nome'=>'cpf',
    'label'=>'CPF',
    'class'=>'form-control cpf',
    'placeholder'=>'Ex.: 000.000.000-00',
    'dado'=>null,
    'classicon'=>'glyphicon glyphicon-user',
    'classdiv'=>''
])

{{-- Campo de responsável --}}
@include('form_build.select', [
    'nome'=>'responsavel_id',
    'label'=>'Responsável',
    'opcoes'=>$responsaveis->pluck('nome', 'id'),
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Campo de sexo --}}
@include('form_build.select', [
    'nome'=>'sexo',
    'label'=>'Sexo',
    'opcoes'=>[
        'Masculino'=>'Masculino',
        'Feminino'=>'Feminino'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Data de nascimento --}}
@include('form_build.text', [
    'nome'=>'data_nasc',
    'label'=>'Data de nascimento',
    'class'=>'form-control date',
    'placeholder'=>'Ex.: 01/01/1990',
    'dado'=>($paciente->data_nasc)? $paciente->data_nasc_formatada : null,
    'classicon'=>'fa fa-calendar',
    'classdiv'=>''
])

{{-- Campo de estado civil --}}
@include('form_build.select', [
    'nome'=>'estado_civil',
    'label'=>'Estado Civil',
    'opcoes'=>[
        'Solteiro(a)'=>'Solteiro(a)',
        'Casado(a)'=>'Casado(a)',
        'Desquitado(a)'=>'Desquitado(a)',
        'Divorciado(a)'=>'Divorciado(a)',
        'Viúvo(a)'=>'Viúvo(a)',
        'Outros'=>'Outros'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Campo de celular --}}
@include('form_build.text', [
    'nome'=>'celular',
    'label'=>'Celular',
    'class'=>'form-control telefone',
    'placeholder'=>'Ex.: 99999-9999',
    'dado'=>null,
    'classicon'=>'glyphicon glyphicon-earphone',
    'classdiv'=>''
])

<h3>Localização</h3>

{{-- Campo de Endereço --}}
@include('form_build.text', [
    'nome'=>'endereco',
    'label'=>'Endereço',
    'class'=>'form-control',
    'placeholder'=>'Ex: Avenida Henrique Galúcio, 1221',
    'dado'=>null,
    'classicon'=>'fa fa-home',
    'classdiv'=>''
])

{{-- Campo de Bairro --}}
@include('form_build.text', [
    'nome'=>'bairro',
    'label'=>'Bairro',
    'class'=>'form-control',
    'placeholder'=>'Ex: Centro',
    'dado'=>null,
    'classicon'=>'fa fa-location-arrow',
    'classdiv'=>''
])

{{-- Campo de Complemento --}}
@include('form_build.text', [
    'nome'=>'complemento',
    'label'=>'Complemento',
    'class'=>'form-control',
    'placeholder'=>'Ex: Apartamento, Condominio, etc',
    'dado'=>null,
    'classicon'=>'fa fa-address-book',
    'classdiv'=>''
])

<h3>Questionário</h3>

{{-- Qual a sua escolaridade? --}}
@include('form_build.select', [
    'nome'=>'escolaridade',
    'label'=>'Qual a sua escolaridade?',
    'opcoes'=>[
        'Analfabeto'=>'Analfabeto',
        'EFI'=>'Ensino Fundamental Incompleto',
        'EFC'=>'Ensino Fundamental Completo',
        'EMI'=>'Ensino Médio Incompleto',
        'EMC'=>'Ensino Médio Completo',
        'ESI'=>'Ensino Superior Incompleto',
        'ESC'=>'Ensino Superior Completo',
        'Pós-graduação'=>'Pós-graduação'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Você fuma? --}}
@include('form_build.select', [
    'nome'=>'fuma',
    'label'=>'Você fuma?',
    'opcoes'=>[
        'NÃO'=>'NÃO',
        'SIM'=>'SIM',
        'PAROU'=>'PAROU'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2 fuma',
    'classdiv'=>''
])

{{-- Se PAROU, Há quanto tempo parou? --}}
<div class="box box-success tempofuma" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.text', [
            'nome'=>'tempo_fuma',
            'label'=>'Há quanto tempo parou?',
            'class'=>'form-control',
            'placeholder'=>'Ex.: Dois meses',
            'dado'=>null,
            'classicon'=>'',
            'classdiv'=>''
        ])
    </div>
</div>

{{-- Você consome alguma bebida alcoólica? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.select', [
    'nome'=>'bebida_alcoolica',
    'label'=>'Você consome alguma bebida alcoólica?',
    'opcoes'=>[
        'NÃO'=>'NÃO',
        'SIM'=>'SIM'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2 bebe',
    'classdiv'=>''
])

{{-- Se SIM, quantos dias no mês? --}}
<div class="box box-success quantobebe" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.select', [
            'nome'=>'quantos_dias_mes',
            'label'=>'Quantos dias no mês?',
            'opcoes'=>[
                'Raramente'=>'Raramente',
                '1 dia no mês'=>'1 dia no mês',
                '2-5 dias'=>'2-5 dias',
                '5-10 dias'=>'5-10 dias',
                'Mais de 10 dias'=>'Mais de 10 dias'
            ],
            'dado'=>null,
            'placeholder'=>'Selecione',
            'required'=>'',
            'class'=>'form-control select2',
            'classdiv'=>''
        ])
    </div>
</div>

{{-- Você realiza alguma atividade física? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.select', [
    'nome'=>'atividade_fisica',
    'label'=>'Você realiza alguma atividade física?',
    'opcoes'=>[
        'NÃO'=>'NÃO',
        'SIM'=>'SIM'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>'realizafisica'
])

{{-- Se SIM, quais atividades físicas? --}}
 <div class="box box-success atividadefisica" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.text', [
            'nome'=>'quais_atividades_fisicas',
            'label'=>'Quais atividades físicas?',
            'class'=>'form-control',
            'placeholder'=>'Ex.: Corrida, Natação',
            'dado'=>null,
            'classicon'=>'',
            'classdiv'=>''
        ])
    </div>
</div>

{{-- Qual o melhor horário para atendimento? --}}
@include('form_build.select', [
    'nome'=>'horario_atend',
    'label'=>'Qual o melhor horário para atendimento?',
    'opcoes'=>[
        'Manhã'=>'Manhã',
        'Tarde'=>'Tarde'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2 time',
    'classdiv'=>''
])

{{-- Qual o melhor dia para atendimento? --}}
@include('form_build.select', [
    'nome'=>'dia_atend',
    'label'=>'Qual o melhor dia para atendimento?',
    'opcoes'=>[
        'Segunda'=>'Segunda',
        'Terça'=>'Terça',
        'Quarta'=>'Quarta',
        'Quinta'=>'Quinta',
        'Sexta'=>'Sexta',
        'Sábado'=>'Sábado'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Como ficou sabendo do Projeto Reviver? --}}
@include('form_build.select', [
    'nome'=>'sabendo_projeto',
    'label'=>'Como ficou sabendo do Projeto Reviver?',
    'opcoes'=>[
        'Redes Sociais'=>'Redes Sociais',
        'Amigos, Parentes, Vizinhos'=>'Amigos, Parentes, Vizinhos',
        'Universidade'=>'Universidade',
        'Outros'=>'Outros'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2 comoconheceu',
    'classdiv'=>''
])

{{-- Se Outro, Por onde ficou sabendo do projeto --}}
<div class="box box-success outros" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.text', [
            'nome'=>'por_onde',
            'label'=>'Qual outra forma?',
            'class'=>'form-control',
            'placeholder'=>'Ex.: TV',
            'dado'=>null,
            'classicon'=>'',
            'classdiv'=>''
        ])
    </div>
</div>

{{-- Qual o diagnóstico do paciente? --}}
@include('form_build.select', [
    'nome'=>'diagnostico_paciente',
    'label'=>'Diagnóstico do paciente',
    'opcoes'=>[
        'Doença de Alzheimer (DA)'=>'Doença de Alzheimer (DA)',
        'Doença de Parkinson (DP)'=>'Doença de Parkinson (DP)'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Há quanto tempo possui a doença? --}}
@include('form_build.select', [
    'nome'=>'tempo_doenca',
    'label'=>'Há quanto tempo possui a doença?',
    'opcoes'=>[
        '1 ano'=>'1 ano',
        '2 anos'=>'2 anos',
        '3 anos'=>'3 anos',
        'Outro'=>'Outro'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2 tempodoenca',
    'classdiv'=>''
])

{{-- Se Outro, há quanto tempo? --}}
<div class="box box-success outrostempo" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.text', [
            'nome'=>'tempo_outro',
            'label'=>'Há quanto tempo?',
            'class'=>'form-control',
            'placeholder'=>'Ex.: 10 anos',
            'dado'=>null,
            'classicon'=>'',
            'classdiv'=>''
        ])
    </div>
</div>

{{-- Paciente faz uso de medicamentos? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.select', [
    'nome'=>'uso_medicamentos',
    'label'=>'Paciente faz uso de medicamentos?',
    'opcoes'=>[
        'NÃO'=>'NÃO',
        'SIM'=>'SIM'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2 usamedicamentos',
    'classdiv'=>''
])

{{-- Se SIM --}}
<div class="box box-success campousamedicamentos" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        {{-- Quais medicamentos utiliza? --}}
        @include('form_build.text', [
            'nome'=>'nome_medicamentos',
            'label'=>'Quais medicamentos utiliza?',
            'class'=>'form-control',
            'placeholder'=>'Ex.: Paracetamol, Doril',
            'dado'=>null,
            'classicon'=>'',
            'classdiv'=>''
        ])

        {{-- Qual a dosagem? --}}
        @include('form_build.text', [
            'nome'=>'dose',
            'label'=>'Qual a dosagem?',
            'class'=>'form-control',
            'placeholder'=>'Ex.: Dois comprimidos ao dia',
            'dado'=>null,
            'classicon'=>'',
            'classdiv'=>''
        ])

        {{-- Quais horários? --}}
        @include('form_build.text', [
            'nome'=>'horarios',
            'label'=>'Quais horários toma os medicamentos?',
            'class'=>'form-control',
            'placeholder'=>'Quais horários?',
            'dado'=>null,
            'classicon'=>'',
            'classdiv'=>''
        ])

        {{-- Se SIM, sob prescrição médica? --}}
        @include('form_build.select', [
            'nome'=>'sob_prescricao',
            'label'=>'Sob prescrição médica?',
            'opcoes'=>[
                'NÃO'=>'NÃO',
                'SIM'=>'SIM'
            ],
            'dado'=>null,
            'placeholder'=>'Selecione',
            'required'=>'',
            'class'=>'form-control select2',
            'classdiv'=>'campoprescrito'
        ])

        {{-- Se SIM, qual médico prescreveu os medicamentos? --}}
        @include('form_build.text', [
            'nome'=>'medico_prescreveu',
            'label'=>'Qual médico prescreveu os medicamentos?',
            'class'=>'form-control',
            'placeholder'=>'Ex.: Dr. Pedro Santos',
            'dado'=>null,
            'classicon'=>'',
            'classdiv'=>'campomedico'
        ])
    </div>
</div>

{{-- Você faz algum tratamento sem medicamentos? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.select', [
    'nome'=>'tratamento_smed',
    'label'=>'Você faz algum tratamento sem medicamentos?',
    'opcoes'=>[
        'NÃO'=>'NÃO',
        'SIM'=>'SIM'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>'realizatratamentossemmed'
])

{{-- Se SIM, quais tratamentos? --}}
<div class="box box-success tratamentossemmed" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.text', [
            'nome'=>'quais_tratamentos',
            'label'=>'Quais tratamentos?',
            'class'=>'form-control',
            'placeholder'=>'Ex.: Fisioterapia',
            'dado'=>null,
            'classicon'=>'',
            'classdiv'=>''
        ])
    </div>
</div>

{{-- Você tem se sentido incapaz de realizar atividades domésticas habituais devido à sua doença? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.select', [
    'nome'=>'incapaz_realizar_atividades_domesticas',
    'label'=>'Você tem se sentido incapaz de realizar atividades domésticas habituais devido à sua doença?',
    'opcoes'=>[
        'NÃO'=>'NÃO',
        'SIM'=>'SIM'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>'incapazdomestica'
])

{{-- Se SIM, quais atividades? --}}
<div class="box box-success campodomestica" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.text', [
            'nome'=>'quais_atividades',
            'label'=>'Quais atividades?',
            'class'=>'form-control',
            'placeholder'=>'Ex.: Varrer a casa',
            'dado'=>null,
            'classicon'=>'',
            'classdiv'=>''
        ])
    </div>
</div>

{{-- Você realiza alguma atividade de lazer ou divertimento? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.select', [
    'nome'=>'atividades_lazer',
    'label'=>'Você realiza alguma atividade de lazer ou divertimento?',
    'opcoes'=>[
        'NÃO'=>'NÃO',
        'SIM'=>'SIM'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>'camporealizalazer'
])

{{-- Se SIM, quais atividades de lazer? --}}
<div class="box box-success campolazer" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.text', [
            'nome'=>'quais_atividades_lazer',
            'label'=>'Quais atividades de lazer?',
            'class'=>'form-control',
            'placeholder'=>'Ex.: Jogar bola',
            'dado'=>null,
            'classicon'=>'',
            'classdiv'=>''
        ])
    </div>
</div>

{{-- Seu estado de saúde tem interferido nas suas atividades de lazer ou divertimento? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.select', [
    'nome'=>'interferido_atividades_lazer',
    'label'=>'Seu estado de saúde tem interferido nas suas atividades de lazer ou divertimento?',
    'opcoes'=>[
        'NÃO'=>'NÃO',
        'SIM'=>'SIM'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>'teminterferido'
])

{{-- Se SIM, de que maneira? --}}
<div class="box box-success maneira" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.text', [
            'nome'=>'de_que_maneira',
            'label'=>'De que maneira?',
            'class'=>'form-control',
            'placeholder'=>'Ex.: Impedindo que eu saia de casa',
            'dado'=>null,
            'classicon'=>'',
            'classdiv'=>''
        ])
    </div>
</div>

{{-- Você participa de atividades religiosas? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.select', [
    'nome'=>'atividades_religiosas',
    'label'=>'Você participa de atividades religiosas?',
    'opcoes'=>[
        'NÃO'=>'NÃO',
        'SIM'=>'SIM'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>'realizareligiosa'
])

{{-- Se SIM, quais atividades religiosas? --}}
<div class="box box-success atividadereligiosa" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.text', [
            'nome'=>'quais_atividades_religiosas',
            'label'=>'Quais atividades religiosas?',
            'class'=>'form-control',
            'placeholder'=>'Ex.: Evangelizar',
            'dado'=>null,
            'classicon'=>'',
            'classdiv'=>''
        ])
    </div>
</div>

{{-- Como você costuma se locomover? --}}
@include('form_build.select', [
    'nome'=>'como_locomover',
    'label'=>'Como você costuma se locomover?',
    'opcoes'=>[
        'Carro'=>'Carro',
        'Transporte Público'=>'Transporte Público',
        'Bicicleta'=>'Bicicleta',
        'Motocicleta'=>'Motocicleta',
        'A pé'=>'A pé'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

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