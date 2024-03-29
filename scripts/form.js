$(function(){
    var stt_is_shown = false;
    $(window).scroll(function(){
       var win_height = 300;
       var scroll_top = $(document).scrollTop(); 
       if (scroll_top > win_height && !stt_is_shown) {
          stt_is_shown = true;
          $("#button").fadeIn();
       } else if (scroll_top < win_height && stt_is_shown) {
          stt_is_shown = false;
          $("#button").fadeOut();
       }
   });
   $("#button").click(function(e){
      e.preventDefault();
      $('html, body').animate({scrollTop:0}, 500);
    });
 });


 $(function() {
    var $inputs = $('form input[required], form textarea[required], select[required]');

    var displayFieldError = function($elem) {
        var $fieldRow = $elem.closest('.form-row');
        var $fieldError = $fieldRow.find('.field-error');
        if (!$fieldError.length) {
            var errorText = $elem.attr('data-error');
            var $divError = $('<div class="field-error">' + errorText + '</div>');
            $fieldRow.append($divError);
        }
    };

    var hideFieldError = function($elem) {
        var $fieldRow = $elem.closest('.form-row');
        var $fieldError = $fieldRow.find('.field-error');
        if ($fieldError.length) {
            $fieldError.remove();
        }
    };

    $inputs.on('input', function() {
        var $elem = $(this);
        if (!$elem.get(0).checkValidity()) {
            $elem.addClass('error');
        } else {
            $elem.removeClass('error');
            hideFieldError($elem);
        }
    });

    $inputs.filter(':checkbox').on('click', function() {
        var $elem = $(this);
        var $row = $(this).closest('.form-row');
        if ($elem.is(':checked')) {
            $elem.removeClass('error');
            hideFieldError($elem);
        } else {
            $elem.addClass('error');
        }
    });

    var checkFieldsErrors = function() {
        //ustawiamy zmienną na true. Następnie robimy pętlę po wszystkich polach
        //jeżeli któreś z pól jest błędne, przełączamy zmienną na false.
        var fieldsAreValid = true;
        $inputs.each(function(i, elem) {
            var $elem = $(elem);
            if (elem.checkValidity()) {
                hideFieldError($elem);
                $elem.removeClass('error');
            } else {
                displayFieldError($elem);
                $elem.addClass('error');
                fieldsAreValid = false;
            }
        });
        return fieldsAreValid;
    };

    $('.form').on('submit', function(e) {
        e.preventDefault();

        var $form = $(this);

        if (checkFieldsErrors()) {
            var dataToSend = $form.serializeArray();
            dataToSend = dataToSend.concat(
                $form.find('input:checkbox:not(:checked)').map(function() {
                    return {"name": this.name, "value": this.value}
                }).get()
            );

            var $submit = $form.find(':submit');
            $submit.prop('disabled', 1);
            $submit.addClass('element-is-busy');

            $.ajax({
                url : $form.attr('action'),
                method: $form.attr('method'),
                dataType : 'json',
                data : dataToSend,
                success: function(ret) {
                    if (ret.errors) {
                        ret.errors.map(function(el) {
                            return '[name="'+el+'"]'
                        });
                        checkFieldsErrors($form.find(ret.errors.join(',')));
                    } else {
                        if (ret.status=='ok') {
                            $form.replaceWith('<div class="form-send-success"><strong>Wiadomość została wysłana</strong><span>Dziękujemy za kontakt. Postaramy się odpowiedzieć jak najszybciej</span></div>');
                        }
                        if (ret.status=='error') {
                            $submit.after('<div class="send-error">Wysłanie wiadomości się nie powiodło</div>');
                        }
                    }
                },
                error : function() {
                    console.error('Wystąpił błąd z połączeniem');
                },
                complete: function() {
                    $submit.prop('disabled', 0);
                    $submit.removeClass('element-is-busy');
                }
            });
        }
    })
})