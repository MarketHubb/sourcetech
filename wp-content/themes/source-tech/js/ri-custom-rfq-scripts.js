/* jQuery (Footer) */
(function($) {
    
   $.extend({
        getUrlVars: function(){
          var vars = [], hash;
          var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
          for(var i = 0; i < hashes.length; i++)
          {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
          }
          return vars;
        },
        getUrlVar: function(name){
          return $.getUrlVars()[name];
        }
      });

      // Get object of URL parameters
      var allVars = $.getUrlVars();
      
      var productName = decodeURIComponent(allVars['model']);
      var productImage = decodeURIComponent(allVars['image']);
      var headlineLeadIn = decodeURIComponent(allVars['lead']);

      // Getting URL var by its name
      var byName = $.getUrlVar('name');
      
      // Change headline lead-in copy
      if (headlineLeadIn != 'Request') {
        var leadInText = headlineLeadIn + ' your';
        $('#request-lead-in').text(leadInText);
      }
      $('')
      
      // Output product image 
      if (productImage != 'undefined') {
      	$('#product-logo-image').attr('src', productImage);
      }
      
      // Output product model #
      if (productName != 'undefined') {
      	$('.product-name').each(function(i, el) {
      		$(this).text(productName);
	    })
	  }
      
})( jQuery );