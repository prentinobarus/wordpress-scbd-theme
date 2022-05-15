<?php get_header() ?>

    <!-- Artikel-->
    <div class="container section">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 col-11 single-post">
                <p class="info-meta"><?php the_field('author') ?> (<?php the_field('year') ?>)</p>
                <p class="judul-artikel"><?php the_title(); ?></p>
                <p class="info-meta mb-4"><?php the_field('journal') ?></p>

                <p id="desc-title" style="margin: 0px;">Abstract:</p>
                <div style="text-align: justify">
                    <?php the_content() ?>
                </div>
            </div>
        </div>

        <div class="row justify-content-center deskripsi mx-auto">
            <div class="col-lg-5">
                <p class="konten-excerpt"><span id="desc-title">Date of Conference :</span> <?php the_field('date_of_conference') ?></p>
                <p class="konten-excerpt"><span id="desc-title">Conference Location :</span> <?php the_field('conference_location') ?></p>
            </div>
            <div class="col-lg-3">
                <p class="konten-excerpt"><span id="desc-title">Publisher :</span> <?php the_field('publisher') ?></p>
                <p class="konten-excerpt"><span id="desc-title">DOI :</span> <a href="https://doi.org/<?php the_field('doi'); ?>" target="_blank"> <?php the_field('doi') ?></a></p>
            </div>
        </div>
    </div>
    <!-- Akhir Artikel -->

<?php get_footer(); ?>