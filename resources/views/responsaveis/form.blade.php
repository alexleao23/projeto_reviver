{{-- Form de paciente separado por tipo de dado --}}
<h3>Dados pessoais</h3>
{{-- Campo de nome --}}
@include('form_build.text', [
    'nome'=>'nome',
    'label'=>'Nome Completo',
    'class'=>'form-control',
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
    'classdiv'=>'col-md-3'
])

{{-- Campo de celular --}}
@include('form_build.text', [
    'nome'=>'celular',
    'label'=>'Celular',
    'class'=>'form-control telefone',
    'placeholder'=>'Ex.: 99999-9999',
    'classicon'=>'glyphicon glyphicon-earphone',
    'classdiv'=>'col-md-3'
])

{{-- Data de nascimento --}}
@include('form_build.text', [
    'nome'=>'data_nasc',
    'label'=>'Data de nascimento',
    'class'=>'form-control date',
    'placeholder'=>'Ex.: 01/01/1990',
    'dado'=>($responsavel->data_nasc)? $responsavel->data_nasc_formatada : null,
    'classicon'=>'fa fa-calendar',
    'classdiv'=>'col-md-3'
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
    'classdiv'=>'col-md-3'
])

{{-- Campo de Endereço --}}
@include('form_build.text', [
    'nome'=>'endereco',
    'label'=>'Endereço',
    'class'=>'form-control',
    'placeholder'=>'Ex: Avenida Henrique Galúcio, 1221',
    'classicon'=>'fa fa-home',
    'classdiv'=>'col-md-4'
])

{{-- Campo de Bairro --}}
@include('form_build.text', [
    'nome'=>'bairro',
    'label'=>'Bairro',
    'class'=>'form-control',
    'placeholder'=>'Ex: Centro',
    'classicon'=>'fa fa-location-arrow',
    'classdiv'=>'col-md-4'
])

{{-- Campo de Complemento --}}
@include('form_build.text', [
    'nome'=>'complemento',
    'label'=>'Complemento',
    'class'=>'form-control',
    'placeholder'=>'Ex: Apartamento, Condominio, etc',
    'classicon'=>'fa fa-address-book',
    'classdiv'=>'col-md-4'
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