/* jQuery (Footer) */
(function($) {
    
    var productImage = $('.woocommerce-product-gallery__wrapper > div > a >img').attr('src');
    console.log(productImage);
    var productImageQueryString = 'image=' + productImage;
    console.log(productImageQueryString);
    
    $('a.button.request-quote').each(function() {
        var href = $(this).attr('href');

        if (href) {
            href += (href.match(/\?/) ? '&' : '?') + productImageQueryString;
            $(this).attr('href', href);
        }
    });

})( jQuery );