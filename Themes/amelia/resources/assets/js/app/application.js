jQuery(document).ready(function(){

    if (jQuery('[data-panel="toggle"]').length) {

        jQuery('[data-panel="toggle"]').on('click', function(){
            jQuery(this).parents('.panel').find('.panel-body').slideToggle();
            jQuery(this).html(jQuery(this).html() == 'Hide' ? 'Show' : 'Hide');
        });
    }

});

