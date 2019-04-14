(function($){
  $(document).on('ready', function(){
    
    // toggle all nav menus
    $('[js-ui-menu-trigger]').on('click', function(){
      $(this).parents('[js-ui-menu]').toggleClass('state--expanded');
    });

  });

})(jQuery);