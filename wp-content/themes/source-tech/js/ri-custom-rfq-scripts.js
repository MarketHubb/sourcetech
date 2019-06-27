/* jQuery (Footer) */
(function($) {
    
    function tabs_active_class(selection) {
      var type = selection.replace('#', '');
      
      $('#rfq-tabs-container .et_pb_module.et_clickable').each(function(){
        $(this).removeClass('rfq-active-tab');
      });  
      
      if (type == 'servers') {
        $('#rfq-servers-tab').addClass('rfq-active-tab')
      } else if (type == 'networking') {
        $('#rfq-networking-tab').addClass('rfq-active-tab')
      } else if (type == 'maintenance') {
        $('#rfq-maintenance-tab').addClass('rfq-active-tab')
      }
      
    }
    
    function form_selection(selection) {
      var type = selection.replace('#', '');
      
      $('#et-boc .rfq-form-container').each(function(){
        $(this).hide();
      });
      
      $('#rfq-selection-container').fadeOut();
      $('#rfq-tabs-container').fadeIn('slow');
      
      if (type == 'servers') {
        $('#rfq-server-form-container').fadeIn();
      } else if (type == 'networking') {
        $('#rfq-networking-form-container').fadeIn();
      } else if (type == 'maintenance') {
        $('#rfq-maintenance-form-container').fadeIn();
      }
      
    }
    
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
      if (headlineLeadIn != 'undefined' && headlineLeadIn != 'Request') {
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
    
    // RFQ type selection
    $('#rfq-selection-container a').on('click', function(e) {
      var href = $(this).attr('href');
      form_selection(href);
      tabs_active_class(href);
    });
    
    $('#rfq-selection-container .et_pb_module.et_clickable').on('click', function(e) {
      var link = $(this).find('a.rfq-selection-link').attr('href');
      form_selection(link);
      tabs_active_class(link);
    });
    
    $('#rfq-tabs-container .et_pb_module.et_clickable').on('click', function(e){
      var type = $(this).closest('.et_pb_column_1_3').find('h2').data('type');
      form_selection(type);
      tabs_active_class(type);
    });
      
})( jQuery );