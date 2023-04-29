<!--== Start Freelancer Portfolio Area ==-->
<div class="freelancer-portfolio-area mt-120 mt-md-80 mt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title-wrap layout--3">
                    <h2>Portfolios</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Start Portfolio Filterable Menu -->
                <!-- <div class="portfolio-filter-menu mb-md-50">
                    <ul class="port-filter-menu nav justify-content-center">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".brand">Branding</li>
                        <li data-filter=".design">Design</li>
                        <li data-filter=".markup">Markup</li>
                        <li data-filter=".modeling">Modeling</li>
                        <li data-filter=".photo">Photography</li>
                    </ul>
                </div> -->
                <!-- End Portfolio Filterable Menu -->
                <!-- Start Portfolio Content Wrap -->
                <div class="portfolio-content basic-title">
                    <div class="row mtm-44 mtm-sm-30 masonry-grid">

                        <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                        ?>
                                <!-- Single Portfolio Item #01 -->
                                <div class="col-sm-6 col-lg-4 photo design markup">
                                    <div class="single-portfolio-wrap layout--2">
                                        <figure class="portfolio-thumb">
                                            <?php if (has_post_thumbnail()) { ?>
                                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') ?>" alt="<?php the_title(); ?>">
                                            <?php } ?>
                                            <a href="<?php the_permalink() ?>" class="btn-view-work">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </figure>
                                        <div class="portfolio-details">
                                            <div class="port-info">
                                                <h3>
                                                    <a href="<?php the_permalink() ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            endwhile;
                        endif;
                        ?>



                    </div><!-- End Portfolio Content Wrap -->
                </div>
            </div>
        </div>
    </div>
    <!--== End Freelancer Portfolio Area ==-->



    <!-- <div class="col-sm-6 col-lg-4 photo design markup">
    <div class="single-portfolio-wrap layout--2">
        <figure class="portfolio-thumb"><img src="assets/img/portfolio/portfolio_02.jpg" alt="Portfolio Image"> <a href="portfolio-details.html" class="btn-view-work"><i class="fa fa-link"></i></a></figure>
        <div class="portfolio-details">
            <div class="port-info">
                <h3><a href="portfolio-details.html">Hardcover Book Cover</a></h3>
                <nav class="nav portfolio-cate"><a href="portfolio-details.html">Design</a>
                    <a href="portfolio-details.html">Photography</a>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-lg-4 photo markup brand">
    <div class="single-portfolio-wrap layout--2">
        <figure class="portfolio-thumb"><img src="assets/img/portfolio/portfolio_06.jpg" alt="Portfolio Image"> <a href="portfolio-details.html" class="btn-view-work"><i class="fa fa-link"></i></a></figure>
        <div class="portfolio-details">
            <div class="port-info">
                <h3><a href="portfolio-details.html">Flying Macbook</a></h3>
                <nav class="nav portfolio-cate"><a href="portfolio-details.html">Design</a>
                    <a href="portfolio-details.html">Photography</a>
                </nav>
            </div>
        </div>
    </div>
</div> -->