{{-- Form de paciente separado por tipo de dado --}}
<h3>Dados pessoais</h3>
{{-- Campo de nome --}}
@include('form_build.text', [
    'nome'=>'nome',
    'label'=>'Nome Completo',
    'placeholder'=>'Ex.: João Pereira da Silva',
    'classicon'=>'glyphicon glyphicon-user',
    'classdiv'=>'col-md-8'
])

{{-- Campo de CPF --}}
@include('form_build.text', [
    'nome'=>'cpf',
    'label'=>'CPF',
    'class'=>'form-control cpf',
    'placeholder'=>'Ex.: 000.000.000-00',
    'classicon'=>'glyphicon glyphicon-user',
    'classdiv'=>'col-md-4'
])

{{-- Campo de sexo --}}
@include('form_build.radio', [
    'nome'=>'sexo',
    'label'=>'Sexo',
    'opcoes'=>[
        'Masculino',
        'Feminino'
    ],
    'classdiv'=>'col-md-4'
])

{{-- Campo de celular --}}
@include('form_build.text', [
    'nome'=>'celular',
    'label'=>'Celular',
    'class'=>'form-control telefone',
    'placeholder'=>'Ex.: 99999-9999',
    'classicon'=>'glyphicon glyphicon-earphone',
    'classdiv'=>'col-md-4'
])

{{-- Data de nascimento --}}
@include('form_build.text', [
    'nome'=>'data_nasc',
    'label'=>'Data de nascimento',
    'class'=>'form-control date',
    'placeholder'=>'Ex.: 01/01/1990',
    'dado'=>($paciente->data_nasc)? $paciente->data_nasc_formatada : null,
    'classicon'=>'fa fa-calendar',
    'classdiv'=>'col-md-4'
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
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>'col-md-6'
])

{{-- Campo de responsável --}}
@include('form_build.select', [
    'nome'=>'responsavel_id',
    'label'=>'Responsável',
    'opcoes'=>$responsaveis->pluck('nome', 'id'),
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>'col-md-6'
])

{{-- Campo de Endereço --}}
@include('form_build.text', [
    'nome'=>'endereco',
    'label'=>'Endereço',
    'placeholder'=>'Ex: Avenida Henrique Galúcio, 1221',
    'classicon'=>'fa fa-home',
    'classdiv'=>'col-md-4'
])

{{-- Campo de Bairro --}}
@include('form_build.text', [
    'nome'=>'bairro',
    'label'=>'Bairro',
    'placeholder'=>'Ex: Centro',
    'classicon'=>'fa fa-location-arrow',
    'classdiv'=>'col-md-4'
])

{{-- Campo de Complemento --}}
@include('form_build.text', [
    'nome'=>'complemento',
    'label'=>'Complemento',
    'placeholder'=>'Ex: Apartamento, Condominio, etc',
    'classicon'=>'fa fa-address-book',
    'classdiv'=>'col-md-4'
])

<h3>Questionário</h3>
{{-- Você fuma? --}}
@include('form_build.radio', [
    'nome'=>'fuma',
    'label'=>'Você fuma?',
    'opcoes'=>[
        'SIM',
        'NÃO',
        'PAROU'
        ]
])

{{-- Se PAROU, Há quanto tempo parou? --}}
<div class="box box-success tempofuma" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.text', [
            'nome'=>'tempo_fuma',
            'label'=>'Há quanto tempo parou?',
            'placeholder'=>'Ex.: Dois meses'
        ])
    </div>
</div>

{{-- Você consome alguma bebida alcoólica? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.radio', [
    'nome'=>'bebida_alcoolica',
    'label'=>'Você consome alguma bebida alcoólica?'
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
            'placeholder'=>'Selecione',
            'class'=>'form-control select2'
        ])
    </div>
</div>

{{-- Você realiza alguma atividade física? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.radio', [
    'nome'=>'atividade_fisica',
    'label'=>'Você realiza alguma atividade física?'
])

{{-- Se SIM, quais atividades físicas? --}}
 <div class="box box-success atividadefisica" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.text', [
            'nome'=>'quais_atividades_fisicas',
            'label'=>'Quais atividades físicas?',
            'placeholder'=>'Ex.: Corrida, Natação'
        ])
    </div>
</div>

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
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>'col-md-6'
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
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2 comoconheceu',
    'classdiv'=>'col-md-6'
])

{{-- Se Outro, Por onde ficou sabendo do projeto --}}
<div class="box box-success outros" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.text', [
            'nome'=>'por_onde',
            'label'=>'Qual outra forma?',
            'placeholder'=>'Ex.: TV'
        ])
    </div>
</div>

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
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>'col-md-6'
])

{{-- Qual o melhor horário para atendimento? --}}
@include('form_build.select', [
    'nome'=>'horario_atend',
    'label'=>'Qual o melhor horário para atendimento?',
    'opcoes'=>[
        'Manhã'=>'Manhã',
        'Tarde'=>'Tarde'
    ],
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2 time',
    'classdiv'=>'col-md-6'
])

{{-- Qual o diagnóstico do paciente? --}}
@include('form_build.select', [
    'nome'=>'diagnostico_paciente',
    'label'=>'Diagnóstico do paciente',
    'opcoes'=>[
        'Doença de Alzheimer (DA)'=>'Doença de Alzheimer (DA)',
        'Doença de Parkinson (DP)'=>'Doença de Parkinson (DP)'
    ],
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>'col-md-6'
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
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2 tempodoenca',
    'classdiv'=>'col-md-6'
])

{{-- Se Outro, há quanto tempo? --}}
<div class="box box-success outrostempo" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.text', [
            'nome'=>'tempo_outro',
            'label'=>'Há quanto tempo?',
            'placeholder'=>'Ex.: 10 anos'
        ])
    </div>
</div>

{{-- Você tem se sentido incapaz de realizar atividades domésticas habituais devido à sua doença? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.radio', [
    'nome'=>'incapaz_realizar_atividades_domesticas',
    'label'=>'Você tem se sentido incapaz de realizar atividades domésticas habituais devido à sua doença?',
    'classdiv'=>'col-md-6'
])

{{-- Se SIM, quais atividades? --}}
<div class="box box-success campodomestica" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.text', [
            'nome'=>'quais_atividades',
            'label'=>'Quais atividades?',
            'placeholder'=>'Ex.: Varrer a casa'
        ])
    </div>
</div>

{{-- Seu estado de saúde tem interferido nas suas atividades de lazer ou divertimento? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.radio', [
    'nome'=>'interferido_atividades_lazer',
    'label'=>'Seu estado de saúde tem interferido nas suas atividades de lazer ou divertimento?',
    'classdiv'=>'col-md-6'
])

{{-- Se SIM, de que maneira? --}}
<div class="box box-success maneira" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.text', [
            'nome'=>'de_que_maneira',
            'label'=>'De que maneira?',
            'placeholder'=>'Ex.: Impedindo que eu saia de casa'
        ])
    </div>
</div>

{{-- Paciente faz uso de medicamentos? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.radio', [
    'nome'=>'uso_medicamentos',
    'label'=>'Paciente faz uso de medicamentos?'
])

{{-- Se SIM --}}
<div class="box box-success campousamedicamentos" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        {{-- Quais medicamentos utiliza? --}}
        @include('form_build.text', [
            'nome'=>'nome_medicamentos',
            'label'=>'Quais medicamentos utiliza?',
            'placeholder'=>'Ex.: Paracetamol, Doril'
        ])

        {{-- Qual a dosagem? --}}
        @include('form_build.text', [
            'nome'=>'dose',
            'label'=>'Qual a dosagem?',
            'placeholder'=>'Ex.: Dois comprimidos ao dia'
        ])

        {{-- Quais horários? --}}
        @include('form_build.text', [
            'nome'=>'horarios',
            'label'=>'Quais horários toma os medicamentos?',
            'placeholder'=>'Quais horários?'
        ])

        {{-- Se SIM, sob prescrição médica? --}}
        @include('form_build.radio', [
            'nome'=>'sob_prescricao',
            'label'=>'Sob prescrição médica?'
        ])

        {{-- Se SIM, qual médico prescreveu os medicamentos? --}}
        @include('form_build.text', [
            'nome'=>'medico_prescreveu',
            'label'=>'Qual médico prescreveu os medicamentos?',
            'placeholder'=>'Ex.: Dr. Pedro Santos',
            'classdiv'=>'campomedico'
        ])
    </div>
</div>

{{-- Você faz algum tratamento sem medicamentos? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.radio', [
    'nome'=>'tratamento_smed',
    'label'=>'Você faz algum tratamento sem medicamentos?'
])

{{-- Se SIM, quais tratamentos? --}}
<div class="box box-success tratamentossemmed" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.text', [
            'nome'=>'quais_tratamentos',
            'label'=>'Quais tratamentos?',
            'placeholder'=>'Ex.: Fisioterapia'
        ])
    </div>
</div>

{{-- Você realiza alguma atividade de lazer ou divertimento? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.radio', [
    'nome'=>'atividades_lazer',
    'label'=>'Você realiza alguma atividade de lazer ou divertimento?'
])

{{-- Se SIM, quais atividades de lazer? --}}
<div class="box box-success campolazer" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.text', [
            'nome'=>'quais_atividades_lazer',
            'label'=>'Quais atividades de lazer?',
            'placeholder'=>'Ex.: Jogar bola'
        ])
    </div>
</div>

{{-- Você participa de atividades religiosas? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.radio', [
    'nome'=>'atividades_religiosas',
    'label'=>'Você participa de atividades religiosas?',
    'classdiv'=>'col-md-4'
])

{{-- Se SIM, quais atividades religiosas? --}}
<div class="box box-success atividadereligiosa" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.text', [
            'nome'=>'quais_atividades_religiosas',
            'label'=>'Quais atividades religiosas?',
            'placeholder'=>'Ex.: Evangelizar'
        ])
    </div>
</div>

{{-- Como você costuma se locomover? --}}
@include('form_build.radio', [
    'nome'=>'como_locomover',
    'label'=>'Como você costuma se locomover?',
    'opcoes'=>[
        'Carro',
        'Transporte Público',
        'Bicicleta',
        'Motocicleta',
        'A pé'
    ],
    'classdiv'=>'col-md-8'
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