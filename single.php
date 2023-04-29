<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
?>

        <!--== Start Page Header Area ==-->
        <div class="page-header-wrapper bg-offwhite">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="page-header-content d-flex">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Page Header Area ==-->
        <!--== Start Page Content Wrapper ==-->
        <div class="page-wrapper">
            <!-- Start Portfolio Details Content -->
            <article class="port-details-page-wrap">
                <div class="port-details-header">
                    <?php if (has_post_thumbnail()) { ?>
                        <!-- Start Portfolio Details Thumb -->
                        <div class="ht-slick-slider portfolio-thumbnail-inner" data-slick='{"slidesToShow": 5, "responsive": [{"breakpoint": 991,"settings": {"dots": false,"slidesToShow": 3}}, {"breakpoint": 575,"settings": {"slidesToShow": 2}}]}'>
                            <figure class="port-details-thumb-item">
                                <a href="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" class="btn-img-gallery">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="<?php the_title(); ?>">
                                </a>
                            </figure>
                        </div><!-- End Portfolio Details Thumb -->
                    <?php } ?>
                </div>
                <div class="port-details-body mt-80 mt-sm-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-lg-8">
                                <!-- Start Portfolio Feature Area -->
                                <div class="port-details-feature-content port-con-item mb-sm-46">
                                    <h2>The Project</h2>
                                    <div class="port-feature-content-inner">
                                        <?php the_content(); ?>
                                    </div>
                                </div><!-- End Portfolio Feature Area -->
                            </div>
                            <div class="col-md-5 col-lg-4">
                                <!-- Start Portfolio Details Area -->
                                <div class="port-details-content port-con-item">
                                    <h2>Details</h2>
                                    <div class="port-details-con-inner">
                                        <div class="single-post-details__footer">
                                            <!-- <div class="single-post-details__footer__item">
                                                <div class="footer-item-left">
                                                    <h5 class="item-head"><i class="fa fa-user-circle-o"></i> Client:</h5>
                                                </div>
                                                <div class="footer-item-right"><span class="client-name">HasTech
                                                        Company</span></div>
                                            </div> -->
                                            <div class="single-post-details__footer__item">
                                                <div class="footer-item-left">
                                                    <h5 class="item-head"><i class="fa fa-calendar"></i> Date:</h5>
                                                </div>
                                                <div class="footer-item-right"><span class="date"><?php the_date() ?></span>
                                                </div>
                                            </div>
                                            <!-- <div class="single-post-details__footer__item">
                                                <div class="footer-item-left">
                                                    <h5 class="item-head"><i class="fa fa-tags"></i> Tags:</h5>
                                                </div>
                                                <div class="footer-item-right">
                                                    <ul class="cate-list nav">
                                                        <li><a href="#">Design</a></li>
                                                        <li><a href="#">Interior</a></li>
                                                        <li><a href="#">Multi</a></li>
                                                    </ul>
                                                </div>
                                            </div> -->
                                            <!-- <div class="single-post-details__footer__item">
                                                <div class="footer-item-left">
                                                    <h5 class="item-head"><i class="fa fa-share-alt"></i> Share:</h5>
                                                </div>
                                                <div class="footer-item-right">
                                                    <div class="share-item"><a href="#" class="trio-tooltip" data-tippy-content="Share On Facebook"><i class="fa fa-facebook"></i></a> <a href="#" class="trio-tooltip" data-tippy-content="Share On Twitter"><i class="fa fa-twitter"></i></a> <a href="#" class="trio-tooltip" data-tippy-content="Share On Google Plus"><i class="fa fa-google-plus"></i></a></div>
                                                </div>
                                            </div> -->
                                        </div><a href="#" class="btn btn-event">View Project</a>
                                    </div>
                                </div><!-- End Portfolio Details Area -->
                            </div>
                        </div>
                    </div>
                </div>
            </article><!-- End Portfolio Details Content -->
            <!-- Start Portfolio Details Pagination -->
            <!-- <div class="port-details-pagination bg-offwhite mt-120 mt-md-80 mt-sm-60">
        <div class="port-pagination-content d-flex justify-content-between align-items-center"><a href="#"><i class="tri-o-prev-arrow"></i></a> <a href="#" class="middle-icon"><i class="fa fa-th-large"></i></a> <a href="#"><i class="tri-o-next-arrow"></i></a></div>
    </div> -->
            <!-- End Portfolio Details Pagination -->
        </div>
        <!--== End Page Content Wrapper ==-->

<?php
    endwhile;
endif;

get_footer();
