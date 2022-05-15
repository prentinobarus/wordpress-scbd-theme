<?php 
    $tags_term = array(
        'orderby' => 'count',
        'order' => 'DESC',
        'number' => 10,
        
    );
    $tags = get_tags($tags_term);
    foreach($tags as $tag):
        $tag_link = get_tag_link($tag->term_id);
?>
    <a href="<?= $tag_link ?>" class="btn btn-outline-dark btn-sm my-1"><?= $tag->name ?> <span class="badge bg-secondary"> <?= $tag->count ?></span></a>

<?php
    endforeach;
?>