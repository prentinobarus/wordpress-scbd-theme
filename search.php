<?php get_header(); ?>

    <!-- Artikel-->
    <div class="container section search-result">
        <div class="row justify-content-center">

            <!-- Artikel Post -->
            <div class="col-lg-7 col-11">
                <!-- <img src="<?php bloginfo('template_url') ?>/assets/img/search-res.png" width="314px" class="img img-fluid mx-auto d-block mb-5"> -->
                <h3 class="text-center text-lg-start judul-section">search results for "<?= get_search_query() ?>"</h3>
        
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>

                    <div class="row artikel justify-content-center">

                        <?php 
                            if(get_post_type() == "post"){
                        ?>
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
                                <p class="info-meta">In Blog Section</p>
                                <a href="<?php the_permalink(); ?>" class="judul-artikel">
                                    <?php the_title(); ?>
                                </a>
                                <div class="konten-excerpt d-lg-block">
                                    <?php the_author(); ?> · <?php the_time('j F Y') ?>
                                </div>
                            </div>

                        <?php
                            }else{
                        ?>
                            <div class="col-12 order-lg-first ">
                                <p class="info-meta">In <?= ucfirst(get_post_type()) ?> · <?php the_field('author'); ?> (<?php the_field('year') ?>)</p>
                                <a href="<?php the_permalink(); ?>" class="judul-artikel">
                                    <?php the_title(); ?>
                                </a>
                                <div class="konten-excerpt d-lg-block d-none">
                                    <?php the_field('journal'); ?>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                        
                    </div>

                    <?php endwhile; ?>
                    <?php else:?>
                        <div class="row artikel justify-content-center zero-res">

                            <div class="col-lg-9">
                                <img src="<?php bloginfo('template_url') ?>/assets/img/zero-search.png" alt="" class="img-fluid my-2">
                            </div>

                        </div>
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