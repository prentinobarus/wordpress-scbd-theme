<?php
    /*  
    Template Name: Publication
    */
?>

<?php get_header(); ?>

    <!-- Jumbotron -->
    <div class="container-fluid pubs-hero">
        <div class="container text-besar">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1>Publication(s)</h1>
                    <p>We are a group of passionate researchers who loves to explore big data and data science to obtain new and groundbreaking insights. SCBD team believes that digital footprints have hidden gems to be obtained and used for the benefit of the society. We always thrive to seek opportunities in gaining valuable information from unstructured digital footprints</p>
                    <div class="text-center text-lg-start text-center my-3">
                        <a href="http://labscbd.test/publications/" class="btn btn-outline-dark text-center">View All Publication</a>
                    </div>
                </div>

                <div class="col-lg-3 col-7 my-auto">
                    <div class="card text-center">
                        <div class="card-header">We Have</div>
                        <div class="card-body" style="font-size: 60px; font-weight: 700;">
                            <?php echo wp_count_posts('publications')->publish; ?>
                        </div>
                        <div class="card-footer text-muted">Publication(s)</div>
                    </div>
                </div>
            </div>
        </div>       
    </div>
    <!-- Akhir Jumbotron -->

    <div class="container section">
        <!-- Search Form -->
        <div class="row justify-content-center ">
            <div class="col-lg-8">
                <h3 class="text-center mb-2">search publication here</h3>
                <?php get_template_part('inc/searchform', 'pubs') ?>
            </div>
        </div>
        <!-- Akhir Search Form -->

        <div class="row justify-content-center pubs-list mt-5">
            <div class="col-lg-8">
                <h3 class="judul-section text-center text-lg-start"> recent-publication(s)</h3>

                <?php
                    $args = array(
                        'posts_per_page' =>3,
                        'post_type' => 'publications',
                    );
                    $query = new WP_Query($args);
                    $angka = 1;
                ?>

                <?php if($query->have_posts()): ?>
                    <?php while($query->have_posts()): $query->the_post(); ?>
                        <div class="row pubs">
                            <div class="col-1 position-relative">
                                <h3 class="position-absolute top-50 start-50 translate-middle angka d-lg-block d-none"><?= $angka ?></h3>
                            </div>
                            <div class="col-11">
                                <p class="info-meta"><?php the_field('author'); ?> (<?php the_field('year'); ?>)</p>
                                <a href="<?php the_permalink() ?>" class="judul-artikel"><?php the_title(); ?></a>
                                <p class="info-meta"><?php the_field('journal') ?></p>
                            </div>
                        </div>
                        <?php $angka++ ?>
                    <?php endwhile; ?>
                <?php endif; ?>

                
            </div>
        </div>
    </div>

<?php get_footer(); ?>