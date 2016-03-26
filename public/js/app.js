$(document).ready(function() {
    $.ajaxSetup({
            headers: {
                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
             }
      });

    $("button.delete").on('click', function(e){
        e.preventDefault();
        if ( ! confirm('Are you sure?')) {
            return false;
        }
        var action = $(this).data("action");
        var parent = $(this).parent();
        var token  = $(this).data("token");
        $.ajax({
            type: 'POST',
            url: action,
            data: { _token: token, _method: 'delete' },
   
            error: function(msg) {
               alert(msg.responseJSON[0]);
            },
            success: function() {
                window.location.href = '/patients'
            }
        });
    });

   $(".alert").fadeOut(4000);


    var timer;
    window.up = function (){
        timer = setTimeout(function(){
            var keywords = $('#search-input').val();

            if (keywords.length>0) {

                $.post('/search', {keywords: keywords}, 
                    function(markup){
                        $('#search-result').html(markup);
                     }); 
            }
        }, 500);
    }

    window.down = function (){clearTimeout(timer);}
    
}); 
