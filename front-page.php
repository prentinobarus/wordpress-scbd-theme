<?php get_header(); ?>

    <!-- Jumbotron -->
    <div class="container-fluid section-besar">
        <div class="container text-besar text-center">
            <h3>School of Economics and Business</h3>
            <h1>SOCIAL COMPUTING & BIG DATA</h1>
            <p>This is the offical website of SCBD Laboratory - Telkom University. The contents listed on this website are intendeed for informational and research purposes.  
            </p>
        </div>       
    </div>
    <!-- Akhir Jumbotron -->

    <!-- What We Do -->
    <div class="container">       
        <div class="row justify-content-center">
            <div class="col-10 wwd text-lg-center">
                <div class="row">
                    <h3 class="text-center">what we do</h3>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">collaborative research</h5>
                              <p class="card-text">Partnership between scientific fields practitioners to produce more comprehensive knowledge especially in Social Computing related studies</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">sharing knowledge</h5>
                              <p class="card-text">We conducts weekly sharing sessions for lecturers and students through discussion, tutorials, and dissemination. We also provide on-line conference alternatives to attend the sessions.</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">data day event</h5>
                              <p class="card-text">A seminar, workshop, and competition event we holds annually since 2015.</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">consultation</h5>
                              <p class="card-text">We provide consultation services for students and others for better collaborative researches among academics.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir What We Do -->

    <!-- Latest Article -->
    <div class="container section mt-5">
        <h3 class="text-center text-lg-start judul-section">latest article(s)</h3>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 mx-2">
            <?php
                $args = array(
                    'posts_per_page' =>6,
                );
                $query = new WP_Query($args);
                $angka = 1;
            ?>

            <?php if($query->have_posts()): ?>
                <?php while($query->have_posts()): $query->the_post(); ?>
                    <div class="col artikel-latest">
                        <div class="row">
                            <div class="col-1 position-relative">
                                <h3 class="position-absolute top-50 start-50 translate-middle angka"><?= $angka ?></h3>
                            </div>
                            <div class="col-11">
                                <a href="<?php the_permalink() ?>" class="judul-artikel"><?php the_title() ?></a>
                                <p class="info-meta"><?php the_time('M j') ?> · <?php the_author_firstname();?> <?php the_author_lastname() ?></p>
                            </div>
                        </div>
                    </div>
                    <?php $angka++ ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- AKhir Latest Article -->

    <hr style="margin: 69px; border-width: 1px; border-style: solid; border-color: #333;">
    
    <!-- Recent & Search -->
    <div class="container section">
        <div class="row justify-content-center">

            <!-- Search Section -->
            <div class="col-lg-3 search-form order-lg-last mb-3 text-lg-start text-center">
                <h3 class="judul-section text-center text-lg-start" style="margin-bottom: 10px">search all</h3>
                
                <?php get_search_form() ?>
                
                <?php get_template_part('inc/tags-section') ?>
            </div>
            <!--Akhir Search Section -->

            <!-- Recent Pubs -->
            <div class="col-lg-7 col-10">
                <h3 class="judul-section text-center text-lg-start"> recent-publication(s)</h3>

                <?php 
                    $args2 = array(
                        'posts_per_page' => 4,
                        'post_type' => 'publications'
                    );

                    $pubs = new WP_Query($args2);
                ?>

                <?php
                
                    if($pubs->have_posts()):
                        while($pubs->have_posts()): $pubs->the_post();
                
                ?>

                <div class="pubs">
                    <p class="info-meta"><?php the_field('author') ?> (<?php the_field('year') ?>)</p>
                    <a href="<?php the_permalink() ?>" class="judul-artikel"><?php the_title() ?></a>
                    <p class="info-meta"><?php the_field('journal') ?></p>
                </div>

                <?php
                        endwhile;
                    endif;
                ?>
            </div>
            <!-- Akhir Recent Pubs -->

            
        </div>
    </div>   
    <!-- Akhir Recent & Search -->

<?php get_footer(); ?>