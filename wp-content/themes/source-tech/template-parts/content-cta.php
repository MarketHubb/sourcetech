<!-- Section: CTA Card -->
<!--<div class="card border-light cta-card text-right shadow">-->
<!--    <div class="card-body cta-header bg-orange">-->
<!--        <h3 class="card-title text-white mb-0">Get a Custom Quote Today</h3>-->
<!--        <p class="card-text"></p>-->
<!--    </div>-->
<!--    <ul class="list-group list-group-flush">-->
<!--        <li class="list-group-item">Live Chat <i class="fas fa-comments-alt"></i></li>-->
<!--        <li class="list-group-item"><a href="tel:800-932-0657">800-932-0657</a> <i class="fas fa-phone"></i></li>-->
<!--        <li class="list-group-item"><a href="mailto:info@source-tech.net">info@source-tech.net</a> <i-->
<!--                    class="fas fa-envelope-open-text"></i></li>-->
<!--    </ul>-->
<!--</div>-->

<?php
$manufacturer = get_query_var('manufacturer');
$product_name = get_query_var('product_name');
if ($product_name) {
    $mail_subject = 'Website inquiry for ' . $product_name . ' | SourceTech Systems';
} else {
    $mail_subject = "Website Inquiry | SourceTech Systems";
}
?>

<div class="inline-block cta-card shadow">
    <ul class="list-group list-group-flush">
        <li class="list-group-item bg-orange text-white">3 Easy Ways to Get a Quote</li>
        <li class="list-group-item">
            <p class="cta-lead-copy text-right mb-0 pb-0">Chat with real humans 24x7 <i class="fas fa-comments-alt"></i></p>
            <span class="cta-chat" onclick='$zoho.salesiq.floatwindow.visible("show");'>Chat Now <i class="far fa-long-arrow-right"></i></span>
        </li>
        <li class="list-group-item">
            <p class="cta-lead-copy text-right mb-0 pb-0">Talk to our <?php echo $manufacturer; ?> server experts <i class="fas fa-phone"></i></p>
            <a href="tel:800-932-0657" class="cta-phone">800-932-0657 <i class="far fa-long-arrow-right"></i></a>
        </li>
        <li class="list-group-item">
            <p class="cta-lead-copy text-right mb-0 pb-0">Send us config details for a quote <i
                        class="fas fa-envelope-open-text"></i></p>
            <a href="mailto:info@source-tech.net?subject=<?php echo rawurlencode($mail_subject); ?>" class="cta-email">info@source-tech.net <i class="far fa-long-arrow-right"></i></a>
        </li>
    </ul>
</div>