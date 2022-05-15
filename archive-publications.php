<?php get_header(); ?>

    <!-- Artikel-->
    <div class="container section">

        <!-- Search Form -->
        <div class="row justify-content-center ">
            <div class="col-lg-8">
                <h3 class="text-center mb-2">search publication here</h3>
                <?php get_template_part('inc/searchform', 'pubs') ?>
            </div>
        </div>
        <!-- Akhir Search Form -->

        <div class="row justify-content-center mt-5">
            <!-- Artikel Post -->
            <div class="col-lg-8">
                <h3 class="text-center text-lg-start judul-section">all publication(s)</h3>
        
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>

                    <div class="row artikel justify-content-center">
                        <div class="col-11">
                            <p class="info-meta"><?php the_field('author') ?> · <?php the_field('year') ?></p>
                            <a href="<?php the_permalink(); ?>" class="judul-artikel">
                                <?php the_title(); ?>
                            </a>
                            <p class="info-meta"><?php the_field('journal') ?></p>
                        </div>
                    </div>

                    <?php endwhile; ?>
                <?php endif; ?>

                <!-- Pagination -->
                <?= bootstrap_pagination() ?>
                <!-- Akhir Pagination -->


            </div>
            <!-- Akhir Artikel Post -->
        </div>
    </div>
    <!-- Akhir Artikel -->

<?php get_footer(); ?>