$(document).ready(function(){

    countCharacters($('#arTitle'),60);
    countCharacters($('#arVisibletitle'),100);
    countCharacters($('#arDescription'),160);

    function countCharacters(target,max){
        target.parent().find('.count span').text(target.val().length);
        if(target.val().length > max){
            target.parent().find('.error-msg').text('Data melebihi maksimum karakter.');
        }
        else{
            target.parent().find('.error-msg').text('');
            if(!target.val()){
                target.parent().find('.error-msg').text('Data wajib diisi.');
            }
            else{
                target.parent().find('.error-msg').text('');
            }
        }
    }

    function isEmpty(target, parent){
        if(!target.val()){
            parent.find('.error-msg').text('Data wajib diisi.');
        }
        else{
            parent.find('.error-msg').text('');
        }
    }
    
    
    $('input:not("#arTitle"):not("#arDescription"):not("#arVisibletitle")').blur(function(){
        if($(this).is('#arImage')){
            isEmpty($(this), $(this).parent().parent());
        }else{
            isEmpty($(this), $(this).parent());
        }
    });

    // Keyup Count Characters
    // countCharacters($('#arTitle'),60);
    // countCharacters($('#arDescription'),160);
    $('#arTitle').keyup(function(){
        countCharacters($(this), 60)
    });
    $('#arDescription').keyup(function(){
        countCharacters($(this), 160)
    });
    $('#arVisibletitle').keyup(function(){
        countCharacters($(this), 100)
    });
    // end

    // File input name
    // $('#arImage').change(function(){
    //     var file = $('#arImage')[0].files[0].name;
    //     $('.custom-file-label').text(file);
    // });

    $('.btn').click(function(){
        $('input').each(function(){
            // if($(this).is('#arImage')){
            //     isEmpty($(this), $(this).parent().parent());
            // }
            
                isEmpty($(this), $(this).parent());
            
        });

        setTimeout(function(){
            if(!$('form').find('.error-msg').text() && $('form').hasClass('update-form')){
                $('form').append('<button type="submit" name="update"></button>')
                $('button').trigger('click');
            }
            else if(!$('form').find('.error-msg').text() && $('form').hasClass('insert-form')){
                $('form').append('<button type="submit" name="submit"></button>')
                $('button').trigger('click');
            }
        },300);
    });



})