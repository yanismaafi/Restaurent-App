function sendMsg() {

    var name = $("input[name=name]").val();
    var email = $("input[name=email]").val();
    var subject = $("input[name=subject]").val();
    var message = $("textarea[name=message]").val();


    $.ajaxSetup({
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });

    $.ajax({

        type:'POST',
        url: "contact",
        typeData:'JSON',
        data:{ name:name, email:email, subject:subject, message:message },

        success:function(data){

            if(data == 'success')
            {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'bottom-right',
                    showConfirmButton: false,
                    timer: 3500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                  })

                  Toast.fire({
                    icon: 'success',
                    title: 'Votre message a été envoyé.'
                  })

                  resetInput();

            }else
            {
              printErrorMsg(data.responseJSON.errors);
            }

        },


        error:function(data){

            const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-right',
                showConfirmButton: false,
                timer: 3500,
              })

              Toast.fire({
                icon: 'error',
                title: 'Echec, votre message n\'a pas pu etre envoyé.'
              });

              printErrorMsg(data.responseJSON.errors);
        }

    });
}


function printErrorMsg (msg) {

  resetAlert();
  $(".print-error-msg").append('<ul></ul>');
  $(".print-error-msg").css('display','block');

  $.each( msg, function(key,value ) {

      $(".print-error-msg").find("ul").append('<li>'+value+'</li>');

  });

}

function resetInput()
{
  $("#ContactForm")[0].reset();
}
   
function resetAlert()
{
  $(".print-error-msg").find("ul").remove();
}