{{-- Form de questionário de nutrição --}}
{{--  IMC, PONTUAÇÃO-IMC e PONTUAÇÃO-TRIAGEM, --}}
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
            {{ Form::select('presenca_doencas', ['NÃO'=>'NÃO', 'SIM'=>'SIM'], null, ['class'=>'form-control presencadoencas']) }}
            {!! $errors->first('presenca_doencas', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="box box-success quaisdoencas" style="z-index: 99">
            <div class='box-body' style="background-color: lightgrey;">
                {{-- Se SIM, quais doenças? --}}
                <div class="form-group has-feedback">
                    {{ Form::label('quais_doencas', 'Quais doenças?') }}
                    {{ Form::select('quais_doencas', ['Diabetes'=>'Diabetes', 'Hipertensão'=>'Hipertensão', 'Câncer'=>'Câncer', 'Artrite Reumatóide'=>'Artrite Reumatóide', 'Inflamações'=>'Inflamações', 'Infecções'=>'Infecções', 'Febre'=>'Febre', 'Diarréia'=>'Diarréia'], null, ['data-placeholder'=>'Selecione', 'class'=>'form-control select2', 'multiple']) }}
                    {!! $errors->first('quais_doencas', '<span class="help-block">:message</span>') !!}
                </div>
                {{-- Se Outros, quais outros? --}}
                <div class="form-group has-feedback doencaoutros">
                    {{ Form::label('outros_doencas', 'Se houverem outras, quais são?') }}
                    {{ Form::text('outros_doencas', null, ['placeholder'=>'Ex.: Sinusite, Rinite','class'=>'form-control']) }}
                    {!! $errors->first('outros_doencas', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
        </div>
        {{-- Uso de medicamentos ou suplemento vitamínico-mineral --}}
        <div class="form-group has-feedback">
            {{ Form::label('medicamento_suplemento', 'Uso de medicamentos ou suplemento vitamínico-mineral') }}
            {{ Form::select('medicamento_suplemento', ['NÃO'=>'NÃO', 'SIM'=>'SIM'], null, ['class'=>'form-control vitaminico']) }}
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
            {{ Form::label('quais_refeicoes', 'Se SIM, quais refeições?') }}
            {{ Form::text('quais_refeicoes', null, ['placeholder'=>'Ex.:','class'=>'form-control']) }}
            {!! $errors->first('quais_refeicoes', '<span class="help-block">:message</span>') !!}
        </div>
        {{-- Toma com algum líquido? --}}
        <div class="form-group has-feedback">
            {{ Form::label('toma_liquido', 'Toma com algum líquido?') }}
            {{ Form::select('toma_liquido', ['NÃO'=>'NÃO', 'SIM'=>'SIM'], null, ['class'=>'form-control']) }}
            {!! $errors->first('toma_liquido', '<span class="help-block">:message</span>') !!}
        </div>
        <h3>Avaliação Triagem</h3>
        <div class="form-group has-feedback">
            {{ Form::label('diminu_ingesta_alimentar', 'Nos últimos três meses houve diminuição da ingesta alimentar devido a perda de apetite, problemas digestivos ou dificuldade para mastigar ou deglutir?') }}
            {{ Form::select('diminu_ingesta_alimentar', [0 =>'Diminuição grave da ingesta', 1 =>'Diminuição moderada da ingesta', 2 => 'Sem diminuição da ingesta'], null, ['placeholder'=>'Selecione', 'class'=>'form-control select2']) }}
            {!! $errors->first('diminu_ingesta_alimentar', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback">
            {{ Form::label('perda_peso', 'Perda de peso nos últimos 3 meses') }}
            {{ Form::select('perda_peso', [0 =>'Superior a três quilos', 1 =>'Não sabe informar', 2 => 'Entre um e três quilos', 3 => 'Não houve perda de peso'], null, ['placeholder'=>'Selecione', 'class'=>'form-control select2']) }}
            {!! $errors->first('perda_peso', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback">
            {{ Form::label('mobilidade', 'Mobilidade') }}
            {{ Form::select('mobilidade', [0 =>'Restrito ao leito ou à cadeira de rodas', 1 =>'Deambula mas não é capaz de sair de casa', 2 => 'Normal'], null, ['placeholder'=>'Selecione', 'class'=>'form-control select2']) }}
            {!! $errors->first('mobilidade', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback">
            {{ Form::label('stress_doenca', 'Passou por algum stress psicológico ou doença aguda nos últimos três meses?') }}
            {{ Form::select('stress_doenca', [0 =>'Sim', 2 => 'Não'], null, ['class'=>'form-control select2']) }}
            {!! $errors->first('stress_doenca', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback">
            {{ Form::label('problemas_neuropsicologicos', 'Problemas neuropsicológicos') }}
            {{ Form::select('problemas_neuropsicologicos', [0 =>'Demência ou depressão graves', 1 =>'Demência ligeira', 2 => 'Sem problemas psicológicos'], null, ['placeholder'=>'Selecione', 'class'=>'form-control select2']) }}
            {!! $errors->first('problemas_neuropsicologicos', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback">
            {{ Form::label('peso', 'Peso em kg') }}
            {{ Form::text('peso', null , ['class'=>'form-control peso', $errors->has('peso') ? ' is-invalid' : '', 'placeholder'=>'Ex.: 98.15']) }}
        </div>
        <div class="form-group has-feedback">
            {{ Form::label('altura', 'Altura em metros') }}
            {{ Form::text('altura', null , ['class'=>'form-control altura', $errors->has('altura') ? ' is-invalid' : '', 'placeholder'=>'Ex.: 1.67']) }}
        </div>
        {{-- Triagem End --}}

        {{-- Resto das perguntas --}}
        <h3>Avaliação Global</h3>
        <div class="form-group has-feedback">
            {{ Form::label('vive_emcasa', 'O paciente vive em sua própria casa(não em instituição geriátrica ou hospital)?') }}
            {{ Form::select('vive_emcasa', [1 =>'Sim', 0 =>'Não'], null, ['class'=>'form-control select2']) }}
            {!! $errors->first('vive_emcasa', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback">
            {{ Form::label('utiliza_muito_medicamentos', 'Utiliza mais de três medicamentos diferentes por dia?') }}
            {{ Form::select('utiliza_muito_medicamentos', [0 =>'Sim', 1 =>'Não'], null, ['class'=>'form-control select2']) }}
            {!! $errors->first('utiliza_muito_medicamentos', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback">
            {{ Form::label('lesoes_pele', 'Possui lesões de pele ou escaras?') }}
            {{ Form::select('lesoes_pele', [0 =>'Sim', 1 =>'Não'], null, ['class'=>'form-control select2']) }}
            {!! $errors->first('lesoes_pele', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback">
            {{ Form::label('refeicoes_dia', 'Quantas refeições faz por dia?') }}
            {{ Form::select('refeicoes_dia', [0 =>'Uma refeição', 1 =>'Duas refeições', 2 => 'Três refeições'], null, ['placeholder'=>'Selecione', 'class'=>'form-control select2']) }}
            {!! $errors->first('refeicoes_dia', '<span class="help-block">:message</span>') !!}
        </div>
        <b>O paciente consome</b>
        <div class="box box-success" style="z-index: 99">
            <div class='box-body' style="background-color: lightgrey;">
                <div class="form-group has-feedback">
                    {{ Form::label('uma_porcao_diaria_leite', 'Pelo menos uma porção diária de leite ou derivados(leite, queijo, iogurte, etc)?') }}
                    {{ Form::select('uma_porcao_diaria_leite', [true =>'Sim', false =>'Não'], null, ['class'=>'form-control select2']) }}
                    {!! $errors->first('uma_porcao_diaria_leite', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group has-feedback">
                    {{ Form::label('duas_porcoes_semanais_legumes', 'Duas ou mais porções semanais de leguminosas ou ovos?') }}
                    {{ Form::select('duas_porcoes_semanais_legumes', [true =>'Sim', false =>'Não'], null, ['class'=>'form-control select2']) }}
                    {!! $errors->first('duas_porcoes_semanais_legumes', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group has-feedback">
                    {{ Form::label('carne_peixe_aves', 'Carne, peixe ou aves todos os dias?') }}
                    {{ Form::select('carne_peixe_aves', [true =>'Sim', false =>'Não'], null, ['class'=>'form-control select2']) }}
                    {!! $errors->first('carne_peixe_aves', '<span class="help-block">:message</span>') !!}
                </div>  
            </div>
        </div>
        <div class="form-group has-feedback">
            {{ Form::label('duas_porcoes_diarias_frutas', 'O paciente consome duas ou mais porções diárias de frutas ou produtos hortícolas?') }}
            {{ Form::select('duas_porcoes_diarias_frutas', [1 =>'Sim', 0 =>'Não'], null, ['class'=>'form-control select2']) }}
            {!! $errors->first('duas_porcoes_diarias_frutas', '<span class="help-block">:message</span>') !!}
        </div>  
        <div class="form-group has-feedback">
            {{ Form::label('liquido_doente_consome_dia', 'Quantos copos de líquido(água, sumo, café, chá, leite) o paciente consome por dia?') }}
            {{ Form::select('liquido_doente_consome_dia', [1 =>'Mais de cinco copos', 0 =>'Menos de três copos', '0.5' => 'Três a cinco copos'], null, ['placeholder'=>'Selecione', 'class'=>'form-control select2']) }}
            {!! $errors->first('liquido_doente_consome_dia', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback">
            {{ Form::label('modo_alimentar', 'Modo de se alimentar') }}
            {{ Form::select('modo_alimentar', [0 =>'Não é capaz de se alimentar sozinho', 1 =>'Se alimenta sozinho, mas com dificuldade', 2 => 'Se alimenta sozinho, sem dificuldade'], null, ['placeholder'=>'Selecione', 'class'=>'form-control select2']) }}
            {!! $errors->first('modo_alimentar', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback">
            {{ Form::label('doente_sua_saude', 'Em comparação com pessoas da mesma idade, como considera o paciente sua própria saúde?') }}
            {{ Form::select('doente_sua_saude', [0 =>'Pior', '0.5' => 'Não sabe', 1 =>'Igual', 2 => 'Melhor'], null, ['placeholder'=>'Selecione', 'class'=>'form-control select2']) }}
            {!! $errors->first('doente_sua_saude', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback">
            {{ Form::label('pb', 'Perímetro braquial(PB) em cm') }}
            {{ Form::select('pb', [0 =>'PB < 21', '0.5' => '21 <= PB <= 22', 1 =>'PB > 22'], null, ['placeholder'=>'Selecione', 'class'=>'form-control select2']) }}
            {!! $errors->first('pb', '<span class="help-block">:message</span>') !!}
        </div>        
        <div class="form-group has-feedback">
            {{ Form::label('pp', 'Perímetro da perna(PP) em cm') }}
            {{ Form::select('pp', [0 =>'PP < 31', 1 =>'PP >= 31'], null, ['placeholder'=>'Selecione', 'class'=>'form-control select2']) }}
            {!! $errors->first('pp', '<span class="help-block">:message</span>') !!}
        </div>       
        {{-- Resto das perguntas end --}}
        {{-- Avaliação Miofuncional Orofacial --}}
        <h3>Avaliação Miofuncional Orofacial - Aspector Gerais de Alimentação</h3>
        <div class="form-group has-feedback">
            {{ Form::label('tempo_medio_quais_refeicoes', 'Tempo médio para cada refeição') }}
            {{ Form::select('tempo_medio_quais_refeicoes', ['Até 30 minutos' =>'Até 30 minutos', 'Mais de 30 minutos' =>'Mais de 30 minutos'], null, ['placeholder'=>'Selecione', 'class'=>'form-control select2']) }}
            {!! $errors->first('tempo_medio_quais_refeicoes', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback">
            {{ Form::label('postura_alimentacao', 'Postura durante a alimentação') }}
            {{ Form::select('postura_alimentacao', ['Sentada' =>'Sentada', 'Inclinada' =>'Inclinada'], null, ['placeholder'=>'Selecione', 'class'=>'form-control select2']) }}
            {!! $errors->first('postura_alimentacao', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback">
            {{ Form::label('aux_liquido', 'Auxílio de líquido') }}
            {{ Form::select('aux_liquido', ['NÃO' =>'NÃO','SIM' =>'SIM'], null, ['class'=>'form-control select2']) }}
            {!! $errors->first('aux_liquido', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback restricaoconsistencia">
            {{ Form::label('restricao_consistencia', 'Restrição de alguma consistência?') }}
            {{ Form::select('restricao_consistencia', ['NÃO' =>'NÃO','SIM' =>'SIM'], null, ['class'=>'form-control select2']) }}
            {!! $errors->first('restricao_consistencia', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="box box-success qualconsistencia" style="z-index: 99">
            <div class='box-body' style="background-color: lightgrey;">
                <div class="form-group has-feedback">
                    {{ Form::label('qual_restricao', 'Auxílio de líquido') }}
                    {{ Form::select('qual_restricao', ['Sólido' =>'Sólido','Pastoso' =>'Pastoso', 'Líquido'=>'Líquido'], null, ['placeholder'=>'Selecione', 'class'=>'form-control select2']) }}
                    {!! $errors->first('qual_restricao', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
        </div>
        <div class="form-group has-feedback">
            {{ Form::label('denticao', 'Dentição') }}
            {{ Form::select('denticao', ['Presente' =>'Presente', 'Ausente' =>'Ausente'], null, ['placeholder'=>'Selecione', 'class'=>'form-control select2']) }}
            {!! $errors->first('denticao', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback protese">
            {{ Form::label('protese_dentaria', 'Utiliza prótese dentária?') }}
            {{ Form::select('protese_dentaria', ['NÃO' =>'NÃO','SIM' =>'SIM'], null, ['class'=>'form-control select2']) }}
            {!! $errors->first('protese_dentaria', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="box box-success qualprotese" style="z-index: 99">
            <div class='box-body' style="background-color: lightgrey;">
                <div class="form-group has-feedback">
                    {{ Form::label('qual_protese', 'Que tipo de prótese?') }}
                    {{ Form::select('qual_protese', ['Total Superior' =>'Total Superior','Total Inferior' =>'Total Inferior', 'Pacial Superior'=>'Pacial Superior', 'Parcial Inferior'=>'Parcial Inferior'], null, ['placeholder'=>'Selecione', 'class'=>'form-control select2']) }}
                    {!! $errors->first('qual_protese', '<span class="help-block">:message</span>') !!}
                </div>
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