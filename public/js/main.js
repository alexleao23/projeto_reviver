
/*     $(function () {
         $('input').iCheck({
             checkboxClass: 'icheckbox_square-blue',
             radioClass: 'iradio_square-blue',
             increaseArea: '20%' // optional
         });

     });
 */
 particlesJS();

 $("#pacienteform").submit(function() {
   
   $('.cpf').unmask();
   $('.telefone').unmask();
   $('.cns').unmask();
   $('.cep').unmask();
   $('#concluir').attr('disabled','disabled');
 
 });


 $("#usuarioform").submit(function() {
   $('.cpf').unmask();
 });

 $("#entradaform").submit(function(){

    $('#submitentrada').attr('disabled','disabled');

 });

$(document).ready(function () {

    $('.select2').select2()
    $('.cep').mask('00000-000')
    $('.date').mask('00/00/0000')
    $('.datetime').mask('00/00/0000 00:00')
    $('.cpf').mask('000.000.000-00');
    $('.telefone').mask('00000-0000');
    $('.cns').mask('000 0000 0000 0000');
    $('.rg').mask('000000');



    jQuery('#fim').datetimepicker();


    $('#busca-paciente-ajax').keyup(function () {

        var busca = $(this).val();

        var box_resultado = $('#resultado-busca-paciente');

        box_resultado.html('<div style="text-align: center"> <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i> </div>');

        var total_resultado_busca = $('#total-resultado-busca');

        total_resultado_busca.html('0')

        if(busca.length <= 3){
            box_resultado.hide();
            total_resultado_busca.html('0')
        }else {
            box_resultado.show();

            $.ajax({
                url: '/admin/paciente/busca_paciente',
                type: 'GET',
                dataType: 'json',
                data: {'busca': busca},
                })
                .done(function (data) {
                    total_resultado_busca.html(data.length);
                    if(data.length){
                        box_resultado.html('');
                        $(data).each(function (index, paciente) {

                            htmlResultado =
                                '<li>' +
                                '  <table class="table table-bordered">' +
                                '    <tr>' +
                                '      <th>Nome</th>' +
                                '         <td colspan="5">' + paciente.nome +' </td>' +
                                '         <th rowspan="3" style="vertical-align: middle; text-align: center;background: none ">' +
                                '           <a href="/admin/entrada/dar_entrada/'+ paciente.id +'?destino=nova_entrada" class="btn btn-primary"> <i class="fa fa-arrow-circle-right"></i> Selecionar </a>' +
                                '           <a href="/admin/paciente/'+ paciente.id +'/edit" target="_blank"  class="btn btn-default"> <i class="fa fa-edit"></i> Dados completos</a>' +
                                '      </th>' +
                                '    </tr>' +
                                '    <tr>' +
                                '      <th>Nome Mãe: </th>' +
                                '        <td colspan="5"> '+ paciente.nome_mae + ' </td>' +
                                '    </tr>' +
                                '    <tr>' +
                                '      <th>Data de Nascimento:</th>' +
                                '   <td>'+ paciente.data_nasc +'</td>' +
                                '     <th>CPF</th>' +
                                '     <td>'+ paciente.cpf +'</td>' +
                                '     <th>CNS</th>' +
                                '     <td>'+ paciente.cns +'</td>' +
                                '   </tr>' +
                                '  </table>' +
                                '</li>';
                            box_resultado.append(htmlResultado);
                        });
                    } else {
                        box_resultado.html('<h3 class="text-center">Paciente não encontrado... <a href="/admin/paciente/create?destino=nova_entrada" class="btn btn-success"> <i class="fa fa-user-plus"></i> Cadastrar novo paciente</a></h3>');
                    }
                })
                .fail(function () {
                    console.log("error");
                })
                .always(function () {
                    console.log("complete");
                });
        }
    });
    $.fn.formatData = function (data_form) {
        if(data_form){
            data = data_form.split(" ");
            data = data[0].split("-");
            return data[2]+"/"+data[1]+"/"+data[0]
        }
        return null;
    }
    $('#box-geral-alerta-sucesso').fadeOut(5000);

    $('input[name=indigente]').on('ifChanged', function () {
        $.fn.loadhabilitarObsPaciente($(this).val());
    });

    $('input[name=indigente]:checked').ready(function () {
        $.fn.loadhabilitarObsPaciente($('input[name=indigente]:checked').val());
    });


    $.fn.loadhabilitarObsPaciente = function (op) {
        if(op == 1) {

            $('#obs_indigente').show();
            $('#demais_campos').hide();

            $('#observacoes').attr("required","required");
        } else {
            $('#obs_indigente').hide();
            $('#demais_campos').show();
            $('#observacoes').removeAttr("required")
        }
    }

    $('.select2-ajax-estabelecimento').select2({
            minimumInputLength: 2,
            ajax: {
                url: '/admin/estabelecimento/buscar',
                dataType: 'json',
                type: "GET",

                data: function (params) {

                    var queryParameters = {
                        busca: params.term
                    }
                    return queryParameters;
                },
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {

                            return {
                                text:  item.nome_fantasia,
                                id: item.id
                            }
                        })
                    };

                }
            }
        }
    );

});



function habilitarObsPaciente(op){


   if($(op).val() == 1) {
       $('#obs_indigente').show();
       $('#demais_campos').hide();

       $('#observacoes').attr("required","required");
   } else {
       $('#obs_indigente').hide();
       $('#demais_campos').show();
       $('#observacoes').removeAttr("required")
   }
}
function funcao(){
    swal("Sucesso!", "O cadastro foi realizado!", "success");
}