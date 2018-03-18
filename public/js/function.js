$('.form-btn-delete').click(function (event) {
    event.preventDefault();

   var title_info = ($(this).data('title') != null) ? $(this).data('title') : "Excluir registro?";
   var text_info = ($(this).data('text') != null) ? $(this).data('text') : "Deseja mesmo excluir esse registro?";
   var type_info = ($(this).data('type') != null) ? $(this).data('type') : "warning";
   var showCancelButton_info = ($(this).data('showCancelButton') != null) ? $(this).data('showCancelButton') : true;
   var confirmButtonColor_info = ($(this).data('confirmButtonColor') != null) ? $(this).data('confirmButtonColor') :  "#DD6B55";
   var confirmButtonText_info = ($(this).data('confirmButtonText') != null) ? $(this).data('confirmButtonText') :  "Confirmar";
   var cancelButtonText_info = ($(this).data('cancelButtonText') != null) ? $(this).data('cancelButtonText') :  "Cancelar";
   var form = $(this).data('form');
   var btn = $(this);
    swal({
        title: title_info,
        text: text_info,
        type:type_info,
        showCancelButton: showCancelButton_info,
        confirmButtonColor: confirmButtonColor_info,
        confirmButtonText: confirmButtonText_info,
        cancelButtonText: cancelButtonText_info,
        closeOnConfirm: false
        // if(form!=null){
    }, function() {
      var method = $(btn).data('method')
      var url = $(btn).data('url')
      var token = $(btn).data('token')
        $('body').append(
          `<form id="dynamic-form" method="${method}" action="${url}">
              <input name="_method" value="DELETE"/>
              <input name="_token" value="${token}"/>
              <button type="submit"></button>
          </form>`
          )
        $('#dynamic-form button').click()

        //     if($('#'+form))
        //     {
        //         $('#'+form).submit();
        //     }else{
        //         btn.attr('form');
        //         $('#'+btn.attr('form')).submit();
        //     }
        // }else{
        //     btn.parent().find('form')[0].submit();
        // }

    });
});
// $(document).ready(function() {
//   $('.js-example-basic-single').select2();
// });