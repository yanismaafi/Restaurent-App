function reservation() {

    var name = $("input[name=Rname]").val();
    var email = $("input[name=Remail]").val();
    var phone = $("input[name=phone]").val();
    var date = $("input[name=date]").val();
    var time = $("input[name=time]").val();
    var nbrPerson = $("input[name=nbrPerson]").val();
    var comment = $("textarea[name=comment]").val();    


    $.ajaxSetup({
        headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });

    $.ajax({

        type:'POST',
        url: "/reservation",
        typeData:'JSON',
        data:{ name:name, email:email, phone:phone, date:date, time:time, nbrPerson:nbrPerson, comment:comment },

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
                    icon:  'success',
                    title: 'Votre réservation a été effectué avec succès.'
                  })

                  resetInput();
            }
            else if(data == 'not available')
            {
                const Toast = Swal.mixin({
                  toast: true,
                  position: 'bottom-right',
                  showConfirmButton: false,
                  timer: 3500,
                })

                Toast.fire({
                  icon: 'error',
                  title: 'Pas de table disponible pour le moment,réesayer plutard.'
                });
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
                title: 'Echec, votre reservation n\'a pas pu etre effectué.'
              });

              if(data.status == 422)
              {
                printErrorMsg(data.responseJSON.errors);
              }
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
  $("#ReservationForm")[0].reset();
}

function resetAlert()
{
  $(".print-error-msg").find("ul").remove();
}