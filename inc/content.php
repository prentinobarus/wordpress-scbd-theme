    <!-- Artikel-->
    <div class="container section">
        <div class="row justify-content-center">

            <!-- Search Section -->
            <div class="col-lg-3 order-lg-last mb-5 search-form">
                
                <h3 class="judul-section text-center text-lg-start">search</h3>
                <?php get_template_part('inc/searchform', 'post') ?>
                <div class="tag-btn text-lg-start text-center">
                    <?php get_template_part('inc/tags-section') ?>
                </div>
            </div>
            <!-- Akhir Search Section -->

            <!-- Artikel Post -->
            <div class="col-lg-7">
                <h3 class="text-center text-lg-start judul-section">all article(s)</h3>
        
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>

                    <div class="row artikel justify-content-center">
                        <div class="col-4">

                            <!-- Thumbnail -->
                            <a href="<?php the_permalink() ?>">
                            <?php if(has_post_thumbnail()){
                                the_post_thumbnail('content-thumb', array('class' => 'img img-fluid mx-auto d-block'));
                            }else{ ?>
                            <img src="<?php bloginfo('template_url') ?>/assets/img/thumbnail.jpg" alt="<?php the_title() ?>" class="img img-fluid mx-auto d-block">
                            <?php }?>
                            </a>
                            <!-- Akhir Thumbnail -->
                            
                        </div>
                        <div class="col-8 order-lg-first ">
                            <p class="info-meta"><?php the_author_firstname();?> <?php the_author_lastname() ?> · <?php the_time('j F Y') ?></p>
                            <a href="<?php the_permalink(); ?>" class="judul-artikel">
                                <?php the_title(); ?>
                            </a>
                            <div class="konten-excerpt d-lg-block d-none">
                                <?php the_excerpt(); ?>
                            </div>
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