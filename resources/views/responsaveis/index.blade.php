@extends('partials.template')
@section('content-header')
    <h1 style="text-align: center; color: white;">
        Responsáveis -
        <small>Lista</small>
    </h1>
@endsection
@section('content')
    <div class="col-md-10 col-md-offset-1">
        <!-- Your Page Content Here -->
        <div class="box box-primary" style="z-index: 99;">
            {{-- <div class="box-header">
            asdf
            </div> --}}
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            
                            <th>
                                Ações
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{ dd($responsavels) }} --}}
                        @foreach($responsavels as $responsavel)

                            <tr>
                                <td>{{ $responsavel->nome  }}</td>
                                <td width="410px">

                                    <a href="{{ action('ResponsaveisController@show', $responsavel->id) }}" class="btn btn-default"><i class="fa fa-eye"></i> Detalhes </a>

                                    <a href="{{ action('ResponsaveisController@edit',$responsavel->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i> Editar </a>
                                    <form action="{{ action('ResponsaveisController@destroy',$responsavel->id) }}" method="POST" style="display: inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button href="" class="btn btn-danger"><i class="fa fa-trash"></i> Remover</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div style="text-align: center;">
                {{ $responsavels->links() }}
            </div>
        </div>
    </div>
@endsection