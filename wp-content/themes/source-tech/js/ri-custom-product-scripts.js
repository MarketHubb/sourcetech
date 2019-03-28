/* jQuery (Footer) */
(function($) {
    // Variant copy testing for primary CTA button
    var variant = $('header').data('buttonvariant');
    var cta_button_copy = $('a.button.request-quote span');
    cta_button_copy.text(variant);
    
    // Trigger GA event on CTA button click
    $('a.button.request-quote').click(function() {
        ga('send', 'event', 'CTA Button', 'Click', cta_button_copy);
    });
    
    // Pass model # and image to RFQ form
    var productImage = $('.woocommerce-product-gallery__wrapper > div > a >img').attr('src');
    var productImageQueryString = 'image=' + productImage;
    
    $('a.button.request-quote').each(function() {
        var href = $(this).attr('href');

        if (href) {
            href += (href.match(/\?/) ? '&' : '?') + productImageQueryString;
            $(this).attr('href', href);
        }
    });

})( jQuery );