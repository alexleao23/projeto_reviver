
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
    'classdiv'=>'col-md-4'
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
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>'col-md-4',
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
    'required'=>'required',
    'class'=>'form-control select2',
    'classdiv'=>'col-md-4',
    'multiple'=>'multiple'
])

{{-- Presença de Doenças --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.radio', [
    'nome'=>'presenca_doencas',
    'label'=>'Presença de Doenças',
    'classdiv'=>'col-md-12'
])

{{-- Se SIM, quais doenças? --}}
@include('form_build.select-multi', [
    'nome'=>'quais_doencas',
    'label'=>'Se SIM, quais doenças?',
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
    'classdiv'=>'col-md-12',
    'multiple'=>'multiple'
])

{{-- Se Outros, quais outros? --}}
@include('form_build.text', [
    'nome'=>'outros_doencas',
    'label'=>'Se Outros, quais são?',
    'class'=>'form-control',
    'placeholder'=>'Ex.: Sinusite, Rinite',
    'classdiv'=>'col-md-12'
])

{{-- Uso de medicamentos ou suplemento vitamínico-mineral --}}
@include('form_build.radio', [
    'nome'=>'medicamento_suplemento',
    'label'=>'Uso de medicamentos ou suplemento vitamínico-mineral',
    'classdiv'=>'col-md-12'
])
{{-- Se SIM, qual o nome do medicamento ou suplemento vitamínico-mineral? --}}
@include('form_build.text', [
    'nome'=>'nome_medicamento',
    'label'=>'Se SIM, qual o nome do medicamento ou suplemento vitamínico-mineral?',
    'class'=>'form-control',
    'placeholder'=>'Ex.:',
    'classdiv'=>'col-md-12'
])

{{-- Início do tratamento --}}
@include('form_build.text', [
    'nome'=>'inicio_tratamento',
    'label'=>'Início do tratamento',
    'class'=>'form-control',
    'placeholder'=>'Ex.: 6 meses atrás',
    'classdiv'=>'col-md-4'
])

{{-- Posologia --}}
@include('form_build.text', [
    'nome'=>'posologia',
    'label'=>'Posologia',
    'class'=>'form-control',
    'placeholder'=>'Ex.: Duas vezes ao dia',
    'classdiv'=>'col-md-4'
])

{{-- FF (não sei o que é) --}}
@include('form_build.text', [
    'nome'=>'ff',
    'label'=>'FF',
    'class'=>'form-control',
    'placeholder'=>'Ex.:',
    'classdiv'=>'col-md-4'
])

{{-- Toma em jejum? --}}
@include('form_build.radio', [
    'nome'=>'jejum',
    'label'=>'Toma em jejum?'
])

{{-- Toma próximo a algum alimento ou refeição? --}}
@include('form_build.radio', [
    'nome'=>'toma_prox_alimento',
    'label'=>'Toma próximo a algum alimento ou refeição?'
])

{{-- Toma com algum líquido? --}}
@include('form_build.radio', [
    'nome'=>'toma_liquido',
    'label'=>'Toma com algum líquido?'
])

{{-- Se SIM, quais refeições? --}}
@include('form_build.text', [
    'nome'=>'quais_refeicoes',
    'label'=>'Quais refeições?',
    'class'=>'form-control',
    'placeholder'=>'Ex.:'
])
<div class="divider"></div>
<h3>Avaliação Triagem</h3>

{{-- Nos últimos três meses houve diminuição da ingesta alimentar devido a perda de apetite, problemas digestivos ou dificuldade para mastigar ou deglutir? --}}
@include('form_build.select', [
    'nome'=>'diminu_ingesta_alimentar',
    'label'=>'Nos últimos três meses houve diminuição da ingesta alimentar devido a perda de apetite, problemas digestivos ou dificuldade para mastigar ou deglutir?',
    'opcoes'=>[
        0 =>'Diminuição grave da ingesta',
        1 =>'Diminuição moderada da ingesta',
        2 =>'Sem diminuição da ingesta'
    ],
    'placeholder'=>'Selecione',
    'required'=>'required',
    'classdiv'=>'col-md-12',
    'class'=>'form-control select2'
])

{{-- Perda de peso nos últimos 3 meses --}}
@include('form_build.select', [
    'nome'=>'perda_peso',
    'label'=>'Perda de peso nos últimos 3 meses',
    'opcoes'=>[
        0 =>'Superior a três quilos',
        1 =>'Não sabe informar',
        2 =>'Entre um e três quilos',
        3 =>'Não houve perda de peso'
    ],
    'placeholder'=>'Selecione',
    'required'=>'required',
    'classdiv'=>'col-md-6',
    'class'=>'form-control select2'
])

{{-- Mobilidade --}}
@include('form_build.select', [
    'nome'=>'mobilidade',
    'label'=>'Mobilidade',
    'opcoes'=>[
        0 =>'Restrito ao leito ou à cadeira de rodas',
        1 =>'Deambula mas não é capaz de sair de casa',
        2 =>'Normal'
    ],
    'placeholder'=>'Selecione',
    'required'=>'required',
    'classdiv'=>'col-md-6',
    'class'=>'form-control select2'
])

{{-- Passou por algum stress psicológico ou doença aguda nos últimos três meses? --}}
<div class="col-md-12">
    <div class="form-group">
        {{ Form::label('stress_doenca', 'Passou por algum stress psicológico ou doença aguda nos últimos três meses?') }}<br>
        {{ Form::radio('stress_doenca', 0, false, ['class'=>'flat-red']) }} Sim&nbsp;&nbsp;
        {{ Form::radio('stress_doenca', 2, true, ['class'=>'flat-red']) }} Não&nbsp;&nbsp;
    </div>
</div>

{{-- Problemas neuropsicológicos --}}
@include('form_build.select', [
    'nome'=>'problemas_neuropsicologicos',
    'label'=>'Problemas neuropsicológicos',
    'opcoes'=>[
        0 =>'Demência ou depressão graves',
        1 =>'Demência ligeira',
        2 =>'Sem problemas psicológicos'
    ],
    'placeholder'=>'Selecione',
    'required'=>'required',
    'classdiv'=>'col-md-4',
    'class'=>'form-control select2'
])

{{-- Peso em kg --}}
@include('form_build.text', [
    'nome'=>'peso',
    'label'=>'Peso em kg',
    'class'=>'form-control peso',
    'placeholder'=>'Ex.: 98.15',
    'classdiv'=>'col-md-4'
])

{{-- Altura em metros --}}
@include('form_build.text', [
    'nome'=>'altura',
    'label'=>'Altura em metros',
    'class'=>'form-control altura',
    'placeholder'=>'Ex.: 1.67',
    'classdiv'=>'col-md-4'
])

{{-- Triagem End --}}

{{-- Resto das perguntas --}}
<div class="divider"></div>
<h3>Avaliação Global</h3>

{{-- O paciente vive em sua própria casa(não em instituição geriátrica ou hospital)? --}}
@include('form_build.radio2', [
    'nome'=>'vive_emcasa',
    'label'=>'O paciente vive em sua própria casa(não em instituição geriátrica ou hospital)?',
    'opcoes'=>[
        'Não',
        'Sim'
    ],
    'classdiv'=>'col-md-12'
])


{{-- Possui lesões de pele ou escaras? --}}
@include('form_build.radio2', [
    'nome'=>'lesoes_pele',
    'label'=>'Possui lesões de pele ou escaras?',
    'opcoes'=>[
        'Sim',
        'Não'
    ],
    'classdiv'=>'col-md-12'
])

{{-- Utiliza mais de três medicamentos diferentes por dia? --}}
@include('form_build.radio2', [
    'nome'=>'utiliza_muito_medicamentos',
    'label'=>'Utiliza mais de três medicamentos diferentes por dia?',
    'opcoes'=>[
        'Sim',
        'Não'
    ],
    'classdiv'=>'col-md-12'
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
    'placeholder'=>'Selecione',
    'required'=>'required',
    'classdiv'=>'col-md-12',
    'class'=>'form-control select2'
])

{{-- Pelo menos uma porção diária de leite ou derivados(leite, queijo, iogurte, etc)? --}}
<div class="col-md-12">
    <div class="form-group">
        {{ Form::label('uma_porcao_diaria_leite', 'Pelo menos uma porção diária de leite ou derivados(leite, queijo, iogurte, etc)?') }}<br>
        {{ Form::radio('uma_porcao_diaria_leite', true, false, ['class'=>'flat-red']) }} Sim&nbsp;&nbsp;
        {{ Form::radio('uma_porcao_diaria_leite', false, true, ['class'=>'flat-red']) }} Não&nbsp;&nbsp;
    </div>
</div>

{{-- Duas ou mais porções semanais de leguminosas ou ovos? --}}
<div class="col-md-12">
    <div class="form-group">
        {{ Form::label('duas_porcoes_semanais_legumes', 'Duas ou mais porções semanais de leguminosas ou ovos?') }}<br>
        {{ Form::radio('duas_porcoes_semanais_legumes', true, false, ['class'=>'flat-red']) }} Sim&nbsp;&nbsp;
        {{ Form::radio('duas_porcoes_semanais_legumes', false, true, ['class'=>'flat-red']) }} Não&nbsp;&nbsp;
    </div>
</div>

{{-- O paciente consome duas ou mais porções diárias de frutas ou produtos hortícolas?' --}}
@include('form_build.radio2', [
    'nome'=>'duas_porcoes_diarias_frutas',
    'label'=>'O paciente consome duas ou mais porções diárias de frutas ou produtos hortícolas?',
    'opcoes'=>[
        'Não',
        'Sim'
    ],
    'classdiv'=>'col-md-7'
])

{{-- Carne, peixe ou aves todos os dias? --}}
<div class="col-md-12">
    <div class="form-group">
        {{ Form::label('carne_peixe_aves', 'Carne, peixe ou aves todos os dias?') }}<br>
        {{ Form::radio('carne_peixe_aves', true, false, ['class'=>'flat-red']) }} Sim&nbsp;&nbsp;
        {{ Form::radio('carne_peixe_aves', false, true, ['class'=>'flat-red']) }} Não&nbsp;&nbsp;
    </div>
</div>

{{-- Quantos copos de líquido(água, sumo, café, chá, leite) o paciente consome por dia? --}}
@include('form_build.select', [
    'nome'=>'liquido_doente_consome_dia',
    'label'=>'Quantos copos de líquido(água, sumo, café, chá, leite) o paciente consome por dia?',
    'opcoes'=>[
        0 =>'Menos de três copos',
        '0.5' =>'Três a cinco copos',
        1 =>'Mais de cinco copos'
    ],
    'placeholder'=>'Selecione',
    'required'=>'required',
    'classdiv'=>'col-md-7',
    'class'=>'form-control select2'
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
    'placeholder'=>'Selecione',
    'required'=>'required',
    'classdiv'=>'col-md-5',
    'class'=>'form-control select2'
])

{{-- Em comparação com pessoas da mesma idade, como considera o paciente sua própria saúde? --}}
@include('form_build.select', [
    'nome'=>'doente_sua_saude',
    'label'=>'Em comparação com pessoas da mesma idade, como considera o paciente sua própria saúde?',
    'opcoes'=>[
        0 =>'Pior',
        '0.5' =>'Não sabe',
        1 =>'Igual',
        2 =>'Melhor'
    ],
    'placeholder'=>'Selecione',
    'required'=>'required',
    'classdiv'=>'col-md-12',
    'class'=>'form-control select2'
])

{{-- Perímetro braquial(PB) em cm --}}
@include('form_build.select', [
    'nome'=>'pb',
    'label'=>'Perímetro braquial(PB) em cm',
    'opcoes'=>[
        0 =>'PB < 21',
        '0.5' =>'21 <= PB <= 22',
        1 =>'PB > 22'
    ],
    'placeholder'=>'Selecione',
    'required'=>'required',
    'classdiv'=>'col-md-6',
    'class'=>'form-control select2'
])

{{-- Perímetro da perna(PP) em cm --}}
@include('form_build.select', [
    'nome'=>'pp',
    'label'=>'Perímetro da perna(PP) em cm',
    'opcoes'=>[
        0 =>'PP < 31',
        1 =>'PP >= 31'
    ],
    'placeholder'=>'Selecione',
    'required'=>'required',
    'classdiv'=>'col-md-6',
    'class'=>'form-control select2'
])
     
{{-- Resto das perguntas end --}}
{{-- Avaliação Miofuncional Orofacial --}}
<div class="divider"></div>
<h3>Avaliação Miofuncional Orofacial - Aspector Gerais de Alimentação</h3>

{{-- Tempo médio para cada refeição --}}
<div class="col-md-4">
    <div class="form-group">
        {{ Form::label('tempo_medio_refeicao', 'Tempo médio para cada refeição') }}<br>
        {{ Form::radio('tempo_medio_refeicao', 'Até 30 minutos', true, ['class'=>'flat-red']) }} Até 30 minutos&nbsp;&nbsp;
        {{ Form::radio('tempo_medio_refeicao', 'Mais de 30 minutos', false, ['class'=>'flat-red']) }} Mais de 30 minutos&nbsp;&nbsp;
    </div>
</div>

{{-- Postura durante a alimentação --}}
<div class="col-md-4">
    <div class="form-group">
        {{ Form::label('postura_alimentacao', 'Postura durante a alimentação') }}<br>
        {{ Form::radio('postura_alimentacao', 'Sentada', true, ['class'=>'flat-red']) }} Sentada&nbsp;&nbsp;
        {{ Form::radio('postura_alimentacao', 'Inclinada', false, ['class'=>'flat-red']) }} Inclinada&nbsp;&nbsp;
    </div>
</div>

{{-- Auxílio de líquido --}}
@include('form_build.radio', [
    'nome'=>'aux_liquido',
    'label'=>'Auxílio de líquido'
])

{{-- Restrição de alguma consistência? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.radio', [
    'nome'=>'restricao_consistencia',
    'label'=>'Restrição de alguma consistência?',
    'classdiv'=>'col-md-12'
])

{{-- Se SIM, quais restrições? --}}
@include('form_build.checkbox', [
    'nome'=>'qual_restricao',
    'label'=>'Se SIM, quais restrições?',
    'opcoes'=>[
        'Sólido',
        'Pastoso',
        'Líquido'
    ],
    'classdiv'=>'col-md-12'
])

{{-- Usa mastigacao? --}}
@include('form_build.radio', [
    'nome'=>'usa_mastigacao',
    'label'=>'Usa mastigacao?',
    'classdiv'=>'col-md-3'
])

{{-- Dentição --}}
<div class="col-md-3">
    <div class="form-group">
        {{ Form::label('denticao', 'Dentição') }}<br>
        {{ Form::radio('denticao', 'Presente', true, ['class'=>'flat-red']) }} Presente&nbsp;&nbsp;
        {{ Form::radio('denticao', 'Ausente', false, ['class'=>'flat-red']) }} Ausente&nbsp;&nbsp;
    </div>
</div>

{{-- Utiliza prótese dentária? --}}
{{-- Precisa ajeitar no js --}}
@include('form_build.radio', [
    'nome'=>'protese_dentaria',
    'label'=>'Utiliza prótese dentária?',
    'classdiv'=>'col-md-12'
])

{{-- Se SIM, quais tipos de próteses? --}}
@include('form_build.checkbox', [
    'nome'=>'qual_protese',
    'label'=>'Se SIM, quais tipos de próteses?',
    'opcoes'=>[
        'Total Superior',
        'Total Inferior',
        'Pacial Superior',
        'Parcial Inferior'
    ],
    'classdiv'=>'col-md-12'
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