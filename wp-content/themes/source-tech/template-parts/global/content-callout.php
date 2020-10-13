<?php
$repeater = get_query_var('repeater');
$repeater_field = get_query_var('repeater_field');
$orientation = get_query_var('orientation');
$image = get_query_var('image');
$heading_main = get_query_var('heading_main');
$heading_main = get_query_var('heading_main');
$heading_sub = get_query_var('heading_sub');
$description = get_query_var('description');
$link_text = get_query_var('link_text');
$link_url = get_query_var('link_url');
?>

<?php
$test = get_query_var('test')
?>

<header class="masthead">
    <div class="container-fluid h-100">
        <div class="wrapper">
            <div class="row align-items-center h-100 pt-5">
                <div class="col-md-12 col-lg-7 z-index-1 aos-init aos-animate pt-4 mt-1" data-aos="fade-right"
                     data-aos-delay="300">
                    <h1 class="text-white"><?php echo $test[0]; ?><br>
                        <span class="font-weight-lighter">Low Prices from Dell &<br>HP.</span></h1>
                    <p class="text-white">We carry new &amp; refurbished servers, storage & networking equipment
                        from top brands like Dell, HP and Cisco.</p>
                    <a href="#what" class="hero-btn">Shop Servers</a>
                </div>
            </div>
        </div>
    </div>
</header>
