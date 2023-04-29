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
                            <div class="col-12">
                                <div class="port-feature-content-inner">
                                    <?php the_content(); ?>
                                </div>
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
