/* jQuery (Footer) */
(function($) {
    
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