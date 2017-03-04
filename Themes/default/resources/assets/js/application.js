jQuery( document ).ready(function(){
    jQuery.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
});
