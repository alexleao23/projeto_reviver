{{-- Form de paciente separado por tipo de dado --}}
<h3>Dados pessoais</h3>
{{ csrf_field() }}
<div class="row">
<div class="col-lg-6 col-xs-6"> 
  {{ Form::label('nome', 'Nome completo:') }}
  {{ Form::text('nome', null, ['class'=>'form-control', 'placeholder' => 'Ex: Antônio da Silva Matos']) }}
</div>
<div class="col-lg-2 col-xs-2 {{ $errors->has('sexo') ? 'has-error' : '' }}">
        {{ Form::label('sexo', 'Sexo:') }}
        {{ Form::select('sexo', ['M'=>'Masculino', 'F'=>'Feminino'], null,['class'=>'select2 form-control','placeholder'=>'Selecione']) }}
        {!! $errors->first('sexo', '<span class="help-block">:message</span>') !!}
</div>
<div class="col-lg-2 col-xs-2">
  {{-- TODO deixar tipo text mesmo, pra adicionar o JS de formatação dd/mm/yyyy --}}
  {{ Form::label('data_nasc', 'Data de nascimento:') }}
  {{ Form::text('data_nasc', null, ['class'=>'form-control','placeholder' => 'Ex: dd/mm/aaaa']) }}
</div>
<div class="col-lg-2 col-xs-2   {{ $errors->has('estado_civil') ? 'has-error' : '' }}">
    {{ Form::label('estado_civil', 'Estado Civil:') }}
    {{ Form::select('estado_civil', ['Solteiro(a)'=>'Solteiro(a)','Casado(a)'=>'Casado(a)','Desquitado(a)'=>'Desquitado(a)','Divorciado(a)'=>'Divorciado(a)','Viúvo(a)'=>'Viúvo(a)','Outros'=>'Outros'], null, ['class'=>'select2 form-control', 'placeholder'=>'Selecionar']) }}
    {!! $errors->first('estado_civil', '<span class="help-block">:message</span>') !!}
</div>
</div>
<div class="row">
  <div class="col-lg-3 col-xs-3"> 
    {{ Form::label('celular', 'Celular:') }}
    {{ Form::text('celular', null, ['class'=>'form-control', 'placeholder'=>'Ex: (99)99999-9999']) }}
  </div>
</div>
<h3>Localização</h3>
<div class="row">
<div class="col-lg-6 col-xs-6">
  {{ Form::label('endereco', 'Endereço:') }}
  {{ Form::text('endereco', null, ['class'=>'form-control', 'placeholder'=>'Ex: Avenida Henrique Galúcio, 1443']) }}
</div>
<div class="col-lg-3 col-xs-3">
  {{ Form::label('bairro', 'Bairro:') }}
  {{ Form::text('bairro', null, ['class'=>'form-control', 'placeholder'=>'Ex: Jardim Equatorial']) }}
</div>
<div class="col-lg-3 col-xs-3">
  {{ Form::label('complemento', 'Complemento:') }}
  {{ Form::text('complemento', null, ['class'=>'form-control', 'placeholder'=>'Ex: Apto, Condomínio, etc']) }}
</div>
</div>
<br>  
<div class="pull-right"> 
<a href="{{ URL::previous() }}" class="btn btn-primary">Voltar</a>
<button type="submit" class="btn btn-success">Concluir</button>
<button type="reset" class="btn btn-warning">Limpar</button>
</div>  
