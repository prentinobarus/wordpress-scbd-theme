    
    <?php 
        if(have_posts()):
            while(have_posts()):
                the_post();
    ?>
    <!-- Artikel-->
    <div class="container section">
        <div class="row justify-content-center">            
            <div class="col-lg-8 col-11 single-post">
                <p class="info-meta"><?php the_author_firstname();?> <?php the_author_lastname() ?> · <?php the_time('j F Y') ?></p>
                <p class="judul-artikel"><?php the_title() ?></p>
                <!-- Thumbnail -->
                <?php if(has_post_thumbnail()){
                    the_post_thumbnail('', array('class' => 'img-fluid big-thumb my-3'));
                }else{ ?>
                <img src="<?php bloginfo('template_url') ?>/assets/img/sp-thumb.jpg" alt="<?php the_title() ?>" class="img-fluid big-thumb my-3">
                <?php }?>
                <!-- Akhir Thumbnail -->
                
                <div class="konten-excerpt">
                    <?php the_content() ?>
                </div>    
            </div>
        </div>
    </div>
    <!-- Akhir Artikel -->
    <?php

            endwhile;
        endif;
    ?>