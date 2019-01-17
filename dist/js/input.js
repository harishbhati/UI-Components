$( document ).ready(function() {
    $('.animated .form-control').on('focus', function() {
        $(this).parent().addClass('active');
    });
    
    $('.animated .form-control').on('blur', function(e) {
        console.log(e.currentTarget.value);
       if(!e.currentTarget.value.trim())
        $(this).parent().removeClass('active');
    });
    $('select.form-control').parent().addClass('active');
});