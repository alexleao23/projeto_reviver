{{-- Form de questionário de nutrição --}}
{{--  IMC, PONTUAÇÃO-IMC e PONTUAÇÃO-TRIAGEM, --}}
<h3 style="margin-top: 1%">História Clínica</h3>

{{-- Paciente --}}
@include('form_build.select', [
    'nome'=>'paciente_id',
    'label'=>'Paciente',
    'opcoes'=>$paciente->pluck('nome', 'id'),
    'dado'=>$paciente->id,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Antecedentes Familiares --}}
@include('form_build.select-multi', [
    'nome'=>'antecedentes_familiares',
    'label'=>'Antecedentes Familiares',
    'opcoes'=>[
        'Diabetes'=>'Diabetes',
        'Hipertensão'=>'Hipertensão',
        'Câncer'=>'Câncer',
        'Alzheimer'=>'Alzheimer'
    ],
    'dado'=>null,
    'dataplaceholder'=>'Selecione',
    'required'=>'',
    'class'=>'form-control select2',
    'classdiv'=>'',
    'multiple'=>'multiple'
])

{{-- Antecedentes Clínicos --}}
@include('form_build.select-multi', [
    'nome'=>'antecedentes_clinicos',
    'label'=>'Antecedentes Clínicos',
    'opcoes'=>[
        'Tabagista'=>'Tabagista',
        'Alcoolista'=>'Alcoolista',
        'Depressão'=>'Depressão',
        'Doenças Cardiovasculares'=>'Doenças Cardiovasculares',
        'Infarto'=>'Infarto',
        'Traumatismo Craniano'=>'Traumatismo Craniano'
    ],
    'dado'=>null,
    'dataplaceholder'=>'Selecione',
    'required'=>'',
    'class'=>'form-control select2',
    'classdiv'=>'',
    'multiple'=>'multiple'
])

{{-- Presença de Doenças --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.select', [
    'nome'=>'presenca_doencas',
    'label'=>'Presença de Doenças',
    'opcoes'=>[
        'NÃO'=>'NÃO',
        'SIM'=>'SIM'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2 presencadoencas',
    'classdiv'=>''
])

{{-- Se SIM, quais doenças? --}}
<div class="box box-success quaisdoencas" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.select-multi', [
            'nome'=>'quais_doencas',
            'label'=>'Quais doenças?',
            'opcoes'=>[
                'Diabetes'=>'Diabetes',
                'Hipertensão'=>'Hipertensão',
                'Câncer'=>'Câncer',
                'Artrite Reumatóide'=>'Artrite Reumatóide',
                'Inflamações'=>'Inflamações',
                'Infecções'=>'Infecções',
                'Febre'=>'Febre',
                'Diarréia'=>'Diarréia'
            ],
            'dado'=>null,
            'dataplaceholder'=>'Selecione',
            'required'=>'',
            'class'=>'form-control select2',
            'classdiv'=>'',
            'multiple'=>'multiple'
        ])

        {{-- Se Outros, quais outros? --}}
        @include('form_build.text', [
            'nome'=>'outros_doencas',
            'label'=>'Se houverem outras, quais são?',
            'class'=>'form-control',
            'placeholder'=>'Ex.: Sinusite, Rinite',
            'dado'=>null,
            'classicon'=>'',
            'classdiv'=>''
        ])
    </div>
</div>

{{-- Uso de medicamentos ou suplemento vitamínico-mineral --}}
@include('form_build.select', [
    'nome'=>'medicamento_suplemento',
    'label'=>'Uso de medicamentos ou suplemento vitamínico-mineral',
    'opcoes'=>[
        'NÃO'=>'NÃO',
        'SIM'=>'SIM'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2 vitaminico',
    'classdiv'=>''
])

{{-- Se SIM, qual o nome do medicamento ou suplemento vitamínico-mineral? --}}
@include('form_build.text', [
    'nome'=>'nome_medicamento',
    'label'=>'Se SIM, qual o nome do medicamento ou suplemento vitamínico-mineral?',
    'class'=>'form-control',
    'placeholder'=>'Ex.:',
    'dado'=>null,
    'classicon'=>'',
    'classdiv'=>''
])

{{-- Início do tratamento --}}
@include('form_build.text', [
    'nome'=>'inicio_tratamento',
    'label'=>'Início do tratamento',
    'class'=>'form-control',
    'placeholder'=>'Ex.: 6 meses atrás',
    'dado'=>null,
    'classicon'=>'',
    'classdiv'=>''
])

{{-- Posologia --}}
@include('form_build.text', [
    'nome'=>'posologia',
    'label'=>'Posologia',
    'class'=>'form-control',
    'placeholder'=>'Ex.: Duas vezes ao dia',
    'dado'=>null,
    'classicon'=>'',
    'classdiv'=>''
])

{{-- FF (não sei o que é) --}}
@include('form_build.text', [
    'nome'=>'ff',
    'label'=>'FF',
    'class'=>'form-control',
    'placeholder'=>'Ex.:',
    'dado'=>null,
    'classicon'=>'',
    'classdiv'=>''
])

{{-- Toma em jejum? --}}
@include('form_build.select', [
    'nome'=>'jejum',
    'label'=>'Toma em jejum?',
    'opcoes'=>[
        'NÃO'=>'NÃO',
        'SIM'=>'SIM'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Toma próximo a algum alimento ou refeição? --}}
@include('form_build.select', [
    'nome'=>'toma_prox_alimento',
    'label'=>'Toma próximo a algum alimento ou refeição?',
    'opcoes'=>[
        'NÃO'=>'NÃO',
        'SIM'=>'SIM'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Se SIM, quais refeições? --}}
@include('form_build.text', [
    'nome'=>'quais_refeicoes',
    'label'=>'Se SIM, quais refeições?',
    'class'=>'form-control',
    'placeholder'=>'Ex.:',
    'dado'=>null,
    'classicon'=>'',
    'classdiv'=>''
])

{{-- Toma com algum líquido? --}}
@include('form_build.select', [
    'nome'=>'toma_liquido',
    'label'=>'Toma com algum líquido?',
    'opcoes'=>[
        'NÃO'=>'NÃO',
        'SIM'=>'SIM'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'',
    'class'=>'form-control select2',
    'classdiv'=>''
])

<h3>Avaliação Triagem</h3>

{{-- Nos últimos três meses houve diminuição da ingesta alimentar devido a perda de apetite, problemas digestivos ou dificuldade para mastigar ou deglutir? --}}
@include('form_build.select', [
    'nome'=>'diminu_ingesta_alimentar',
    'label'=>'Nos últimos três meses houve diminuição da ingesta alimentar devido a perda de apetite, problemas digestivos ou dificuldade para mastigar ou deglutir?',
    'opcoes'=>[
        0 =>'Diminuição grave da ingesta',
        1 =>'Diminuição moderada da ingesta',
        2 => 'Sem diminuição da ingesta'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Perda de peso nos últimos 3 meses --}}
@include('form_build.select', [
    'nome'=>'perda_peso',
    'label'=>'Perda de peso nos últimos 3 meses',
    'opcoes'=>[
        0 =>'Superior a três quilos',
        1 =>'Não sabe informar',
        2 => 'Entre um e três quilos',
        3 => 'Não houve perda de peso'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Mobilidade --}}
@include('form_build.select', [
    'nome'=>'mobilidade',
    'label'=>'Mobilidade',
    'opcoes'=>[
        0 =>'Restrito ao leito ou à cadeira de rodas',
        1 =>'Deambula mas não é capaz de sair de casa',
        2 => 'Normal'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Passou por algum stress psicológico ou doença aguda nos últimos três meses? --}}
@include('form_build.select', [
    'nome'=>'stress_doenca',
    'label'=>'Passou por algum stress psicológico ou doença aguda nos últimos três meses?',
    'opcoes'=>[
        0 =>'Sim',
        2 => 'Não'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Problemas neuropsicológicos --}}
@include('form_build.select', [
    'nome'=>'problemas_neuropsicologicos',
    'label'=>'Problemas neuropsicológicos',
    'opcoes'=>[
        0 =>'Demência ou depressão graves',
        1 =>'Demência ligeira',
        2 => 'Sem problemas psicológicos'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Peso em kg --}}
@include('form_build.text', [
    'nome'=>'peso',
    'label'=>'Peso em kg',
    'class'=>'form-control peso',
    'placeholder'=>'Ex.: 98.15',
    'dado'=>null,
    'classicon'=>'',
    'classdiv'=>''
])

{{-- Altura em metros --}}
@include('form_build.text', [
    'nome'=>'altura',
    'label'=>'Altura em metros',
    'class'=>'form-control altura',
    'placeholder'=>'Ex.: 1.67',
    'dado'=>null,
    'classicon'=>'',
    'classdiv'=>''
])

{{-- Triagem End --}}

{{-- Resto das perguntas --}}
<h3>Avaliação Global</h3>

{{-- O paciente vive em sua própria casa(não em instituição geriátrica ou hospital)? --}}
@include('form_build.select', [
    'nome'=>'vive_emcasa',
    'label'=>'O paciente vive em sua própria casa(não em instituição geriátrica ou hospital)?',
    'opcoes'=>[
        1 =>'Sim',
        0 =>'Não'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Utiliza mais de três medicamentos diferentes por dia? --}}
@include('form_build.select', [
    'nome'=>'utiliza_muito_medicamentos',
    'label'=>'Utiliza mais de três medicamentos diferentes por dia?',
    'opcoes'=>[
        0 =>'Sim',
        1 =>'Não'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Possui lesões de pele ou escaras? --}}
@include('form_build.select', [
    'nome'=>'lesoes_pele',
    'label'=>'Possui lesões de pele ou escaras?',
    'opcoes'=>[
        0 =>'Sim',
        1 =>'Não'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Quantas refeições faz por dia? --}}
@include('form_build.select', [
    'nome'=>'refeicoes_dia',
    'label'=>'Quantas refeições faz por dia?',
    'opcoes'=>[
        0 =>'Uma refeição',
        1 =>'Duas refeições',
        2 =>'Três refeições'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

<b>O paciente consome</b>

<div class="box box-success" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        {{-- Pelo menos uma porção diária de leite ou derivados(leite, queijo, iogurte, etc)? --}}
        @include('form_build.select', [
            'nome'=>'uma_porcao_diaria_leite',
            'label'=>'Pelo menos uma porção diária de leite ou derivados(leite, queijo, iogurte, etc)?',
            'opcoes'=>[
                true =>'Sim',
                false =>'Não'
            ],
            'dado'=>null,
            'placeholder'=>'Selecione',
            'required'=>'required',
            'class'=>'form-control select2',
            'classdiv'=>''
        ])
        
        {{-- Duas ou mais porções semanais de leguminosas ou ovos? --}}
        @include('form_build.select', [
            'nome'=>'duas_porcoes_semanais_legumes',
            'label'=>'Duas ou mais porções semanais de leguminosas ou ovos?',
            'opcoes'=>[
                true =>'Sim',
                false =>'Não'
            ],
            'dado'=>null,
            'placeholder'=>'Selecione',
            'required'=>'required',
            'class'=>'form-control select2',
            'classdiv'=>''
        ])
        
        {{-- Carne, peixe ou aves todos os dias? --}}
        @include('form_build.select', [
            'nome'=>'carne_peixe_aves',
            'label'=>'Carne, peixe ou aves todos os dias?',
            'opcoes'=>[
                true =>'Sim',
                false =>'Não'
            ],
            'dado'=>null,
            'placeholder'=>'Selecione',
            'required'=>'required',
            'class'=>'form-control select2',
            'classdiv'=>''
        ])
    </div>
</div>

{{-- O paciente consome duas ou mais porções diárias de frutas ou produtos hortícolas?' --}}
@include('form_build.select', [
    'nome'=>'duas_porcoes_diarias_frutas',
    'label'=>'O paciente consome duas ou mais porções diárias de frutas ou produtos hortícolas?',
    'opcoes'=>[
        1 =>'Sim',
        0 =>'Não'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Quantos copos de líquido(água, sumo, café, chá, leite) o paciente consome por dia? --}}
@include('form_build.select', [
    'nome'=>'liquido_doente_consome_dia',
    'label'=>'Quantos copos de líquido(água, sumo, café, chá, leite) o paciente consome por dia?',
    'opcoes'=>[
        1 =>'Mais de cinco copos',
        0 =>'Menos de três copos',
        '0.5'=>'Três a cinco copos'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Modo de se alimentar --}}
@include('form_build.select', [
    'nome'=>'modo_alimentar',
    'label'=>'Modo de se alimentar',
    'opcoes'=>[
        0 =>'Não é capaz de se alimentar sozinho',
        1 =>'Se alimenta sozinho, mas com dificuldade',
        2 =>'Se alimenta sozinho, sem dificuldade'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Em comparação com pessoas da mesma idade, como considera o paciente sua própria saúde? --}}
@include('form_build.select', [
    'nome'=>'doente_sua_saude',
    'label'=>'Em comparação com pessoas da mesma idade, como considera o paciente sua própria saúde?',
    'opcoes'=>[
        0 =>'Pior',
        '0.5'=>'Não sabe',
        1 =>'Igual',
        2 =>'Melhor'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Perímetro braquial(PB) em cm --}}
@include('form_build.select', [
    'nome'=>'pb',
    'label'=>'Perímetro braquial(PB) em cm',
    'opcoes'=>[
        0 =>'PB menor que 21',
        '0.5'=>'PB maior ou igual a 21 e menor ou igual a 22',
        1 =>'PB maior que 22'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Perímetro da perna(PP) em cm --}}
@include('form_build.select', [
    'nome'=>'pp',
    'label'=>'Perímetro da perna(PP) em cm',
    'opcoes'=>[
        0 =>'PP menor que 31',
        1 =>'PP maior ou igual a 31'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])
     
{{-- Resto das perguntas end --}}
{{-- Avaliação Miofuncional Orofacial --}}
<h3>Avaliação Miofuncional Orofacial - Aspector Gerais de Alimentação</h3>

{{-- Tempo médio para cada refeição --}}
@include('form_build.select', [
    'nome'=>'tempo_medio_refeicao',
    'label'=>'Tempo médio para cada refeição',
    'opcoes'=>[
        'Até 30 minutos'=>'Até 30 minutos',
        'Mais de 30 minutos'=>'Mais de 30 minutos'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Postura durante a alimentação --}}
@include('form_build.select', [
    'nome'=>'postura_alimentacao',
    'label'=>'Postura durante a alimentação',
    'opcoes'=>[
        'Sentada'=>'Sentada',
        'Inclinada'=>'Inclinada'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Auxílio de líquido --}}
@include('form_build.select', [
    'nome'=>'aux_liquido',
    'label'=>'Auxílio de líquido',
    'opcoes'=>[
        'SIM'=>'Sim',
        'NÃO'=>'Não'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Restrição de alguma consistência? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.select', [
    'nome'=>'restricao_consistencia',
    'label'=>'Restrição de alguma consistência?',
    'opcoes'=>[
        'SIM'=>'Sim',
        'NÃO'=>'Não'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>'restricaoconsistencia'
])

{{-- Se SIM, qual restrição? --}}
<div class="box box-success qualconsistencia" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.select', [
            'nome'=>'qual_restricao',
            'label'=>'Qual restrição?',
            'opcoes'=>[
                'Sólido'=>'Sólido',
                'Pastoso'=>'Pastoso',
                'Líquido'=>'Líquido'
            ],
            'dado'=>null,
            'placeholder'=>'Selecione',
            'required'=>'',
            'class'=>'form-control select2',
            'classdiv'=>''
        ])
    </div>
</div>

{{-- Usa mastigacao? --}}
@include('form_build.select', [
    'nome'=>'usa_mastigacao',
    'label'=>'Usa mastigacao?',
    'opcoes'=>[
        'SIM'=>'Sim',
        'NÃO'=>'Não'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Dentição --}}
@include('form_build.select', [
    'nome'=>'denticao',
    'label'=>'Dentição',
    'opcoes'=>[
        'Presente'=>'Presente',
        'Ausente'=>'Ausente'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'',
    'class'=>'form-control select2',
    'classdiv'=>''
])

{{-- Utiliza prótese dentária? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.select', [
    'nome'=>'protese_dentaria',
    'label'=>'Utiliza prótese dentária?',
    'opcoes'=>[
        'SIM'=>'Sim',
        'NÃO'=>'Não'
    ],
    'dado'=>null,
    'placeholder'=>'Selecione',
    'required'=>'',
    'class'=>'form-control select2',
    'classdiv'=>'protese'
])

{{-- Se SIM, que tipo de prótese? --}}
<div class="box box-success qualprotese" style="z-index: 99">
    <div class='box-body' style="background-color: lightgrey;">
        @include('form_build.select', [
            'nome'=>'qual_protese',
            'label'=>'Que tipo de prótese?',
            'opcoes'=>[
                'Total Superior'=>'Total Superior',
                'Total Inferior'=>'Total Inferior',
                'Pacial Superior'=>'Pacial Superior',
                'Parcial Inferior'=>'Parcial Inferior'
            ],
            'dado'=>null,
            'placeholder'=>'Selecione',
            'required'=>'',
            'class'=>'form-control select2',
            'classdiv'=>'protese'
        ])
    </div>
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