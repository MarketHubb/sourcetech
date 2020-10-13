<?php // Template Name: Home Demo

get_header(); ?>

<?php get_template_part('template-parts/global/content', 'hero-split'); ?>

<!-- What We do -->
<div class="container-fluid content-section">
    <div class="wrapper">
        <div class="row justify-content-center content-heading">
            <div class="col-md-8 text-center">
                <h2 class="section-title">What We Do</h2>
                <p>From small offices to large data centers, SourceTech Systems has the enterprise IT hardware and 24x7 support services to keep you connected.</p>
            </div>
        </div>
        <div class="row row-eq-height content-section">
            <?php
            if( have_rows('page_home_what') ):
                $services = '';
                while ( have_rows('page_home_what') ) : the_row();
                    $services .= '<div class="col-md-4 text-center content-panels">';
                    $services .= '<div class="card card-image-header no-border h-100 no-border content-panel">';
                    $services .= '<div class="card-header">';
                    $services .= '<img class="img-top-radius mb-3" src="' . get_sub_field('page_home_what_image') . '" />';
                    $services .= '</div>';
                    $services .= '<div class="card-body d-flex flex-column">';
                    $services .= '<h4>' . get_sub_field('page_home_what_heading') . '</h4>';
                    $services .= '<p class="mb-4">' . get_sub_field('page_home_what_description') . '</p>';
//                    $services .= '<div class="mt-auto">';
                    $services .= '<a href="' . get_sub_field('page_home_link_url') . '" class="hero-btn mt-auto">';
                    $services .= get_sub_field('page_home_link_text') . '</a>';
                    $services .= '</div>';
                    $services .= '</div>';
                    $services .= '</div>';
                endwhile;
                echo $services;
            endif;
            ?>
        </div>
    </div>
</div>

<header class="masthead">
    <div class="container-fluid h-100">
        <div class="wrapper">
            <div class="row align-items-center h-100 pt-5">
                <div class="col-md-12 col-lg-7 z-index-1 aos-init aos-animate pt-4 mt-1" data-aos="fade-right"
                     data-aos-delay="300">
                    <h1 class="text-white mb-0">New &amp; Refurbished Servers<br>
                        <span class="font-weight-lighter">Dell PowerEdge & HP ProLiant</span></h1>
                    <p class="text-white">Save thousands on top brands of new & refurbished servers + <br>all servers comes with a FREE 2-year warranty. </p>
                    <a href="/refurbished-servers/" class="hero-btn">Shop Servers</a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Testimonial -->
<div class="container-fluid content-section">
    <div class="wrapper">
        <div class="row justify-content-center my-5">
            <div class="col-md-7 text-center">
                <p class="testimonial">"Our company has been doing business with SourceTech for about a year, and they have become our primary 3rd party company when it comes to pre-owned servers and storage. They always provide the lowest pricing."</p>
                <p class="author mb-0">- Timothy Deleon</p>
            </div>
        </div>
    </div>
</div>

<header class="masthead masthead-2">
    <div class="container-fluid h-100">
        <div class="wrapper">
            <div class="row align-items-center justify-content-end h-100 pt-5">
                <div class="col-md-12 col-lg-7 z-index-1 aos-init aos-animate pt-4 mt-1" data-aos="fade-right"
                     data-aos-delay="300">
                    <h1 class="text-white mb-0">Cisco Network Equipment<br>
                        <span class="font-weight-lighter">Routers & Switches</span></h1>
                    <p class="text-white">We have you covered for your new and refurbished Cisco equipment purchases, upgrades and maintenance needs.</p>
                    <a href="/product-category/networking/" class="hero-btn">Shop Cisco</a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid content-section">
    <div class="wrapper">
        <div class="row justify-content-center content-heading">
            <div class="col-md-8 text-center">
                <h2 class="section-title">Why SourceTech</h2>
                <p>Whether you manage a one-person office or an enterprise-level data center, we'll provide exceptional customer service and the lowest possible prices on IT hardware.</p>
            </div>
        </div>
        <div class="row row-eq-height content-section why-us">
            <div class="col-md-4 text-center content-panels">
                <div class="card no-border h-100">
                    <div class="card-header no-border bg-blue-light">
                        <i class="blue shadow py-2 fas fa-award fa-3x"></i>
                    </div>
                    <div class="card-body">
                        <h4 class="mt-2">Exceptional<br>Service</h4>
                        <p>We choose to serve, not to sell. Whether you need to place a large order, or help with a configuration detail - our team is here to help.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center content-panels">
                <div class="card no-border h-100">
                    <div class="card-header no-border bg-blue-light">
                        <i class="blue shadow py-2 fas fa-file-invoice-dollar fa-3x"></i>
                    </div>
                    <div class="card-body">
                        <h4 class="mt-2">Lowest<br>Prices</h4>
                        <p>Our servers, storage & networking equipment are factory tested, configured to order & often costs thousands less than the OEM.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center content-panels">
                <div class="card no-border h-100">
                    <div class="card-header no-border bg-blue-light">
                        <i class="blue shadow py-2 fas fa-server fa-3x"></i>
                    </div>
                    <div class="card-body">
                        <h4 class="mt-2">Unbeatable<br>Selection</h4>
                        <p>Most resellers push what they have on the shelf - not us. We custom-build every server to order so you only get what you need. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Service-->
<header class="masthead masthead-3">
    <div class="container-fluid h-100">
        <div class="wrapper">
            <div class="row align-items-center h-100 pt-5">
                <div class="col-md-12 col-lg-7 z-index-1 aos-init aos-animate pt-4 mt-1" data-aos="fade-right"
                     data-aos-delay="300">
                    <h1 class="text-white mb-0">24x7 Service & Support<br>
                        <span class="font-weight-lighter">Nation-wide Network</span></h1>
                    <p class="text-white">With our support services, your equipment can be serviced by our certified IT personnel 24 hours a day, 365 days a year</p>
                    <a href="/maintenance-installation/" class="hero-btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Testimonial -->
<div class="container-fluid content-section">
    <div class="wrapper">
        <div class="row justify-content-center my-5">
            <div class="col-md-7 text-center">
                <p class="testimonial">"Excellent service! I've been very pleased with the quality of service and hardware I've received.  Shipping the equipment to Canada, all custom paperwork was well managed. I'd highly recommend them!"</p>
                <p class="author mb-0">- Michel Bouchard</p>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
