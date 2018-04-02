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
        {{-- Campo de sexo --}}
        <div class="form-group has-feedback">
          {{ Form::label('sexo', 'Sexo') }}
          {{ Form::select('sexo', ['Masculino' => 'Masculino', 'Feminino' => 'Feminino'], null, ['placeholder'=>'Selecione', 'class'=>'form-control', 'required']) }}
        </div>
        {{-- Data de nascimento --}}
        <div class="form-group has-feedback">
          {{ Form::label('data_nasc', 'Data de nascimento') }}
          {{ Form::text('data_nasc', ($responsavel->data_nasc)? $responsavel->data_nasc_formatada : null,['class'=>'form-control date', $errors->has('data_nasc') ? ' is-invalid' : '', 'placeholder'=>'Ex.: 01/01/1990']) }}
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