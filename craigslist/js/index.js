(function($){
  $(document).on('ready', function(){
    
    // toggle all nav menus
    $('[js-ui-menu-trigger]').on('click', function(){
      $(this).parents('[js-ui-menu]').toggleClass('state--expanded');
    });
    
    var $price = $("[js-price-slider]");
    
    $price.slider({
      range: true,
      min: 0,
      max: 300,
      values: [ 0, 250 ],
      slide: function( event, ui ) {
        $(ui.handle).attr('data-value', formatCurrency(ui.value));
      }
    });
    
    _.each( $('.ui-slider-handle'), function(item, itr){
      $(item).attr('data-value', formatCurrency($price.slider('values', itr)));
    });
    
    $('[js-item-fav]').on('click', function(){
      $(this).parents('.feed__itm').toggleClass('feed__itm--fav');
    });
    
  });
  
  var formatCurrency = function(num){
    return (num == 0) ? '$' + num : '$' + num + 'k';
  }
})(jQuery);