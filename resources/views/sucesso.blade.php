@extends('layouts.app')
@section('title', 'Sucesso!')
@section('content')
<div class="card-panel-login">
  <h4 class="center">Sucesso!</h4>
  <p style="text-align: justify;">Sua inscrição foi realizada com sucesso, aguarde nosso contato para saber se você foi aceito!</p>
  <form>
  	<div class="row">
  		<div class="col s12">
  <a href="{{ route('inicio') }}" class="center btn waves-effect waves-light col s12 gradient-45deg-indigo-light-blue
              gradient-shadow">Voltar para a página inicial</a>
  		</div>
	</div>
  </form>
</div>
@endsection
