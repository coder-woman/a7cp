

$('.submit-form').click(function(e) {
        e.preventDefault();

           var email = $('input[name="f_email"]').val();

           if( !$('input[name="f_name"]').val() ){

                        $('.submit-form').html('Escribe tu nombre');

            } else if( !$('input[name="f_phone"]').val() ){

                        $('.submit-form').html('¿Cuál es tu Telefono?');

                } else if( !$('textarea[name="f_message"]').val() ) {

                    $('.submit-form').html('Escribe tu mensaje');

                } else {

                    if(IsEmail(email)==true){

                          $('.submit-form').html('Enviando...');

                          $.ajax({
                                type: 'POST',
                                url: 'send_msg.php', //$('#contact_form').attr('action')
                                data: $('#contact-form').serialize(),

                                success: function(data) {
                                    $('#contact-form').html(data);
                                }
                            })
                            return false;
                        } else {
                            $('.submit-form').html('Intenta con email válido.');
                            }
                    }
      });



      function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regex.test(email)) {
       return false;
    }else{
       return true;
    }
}



