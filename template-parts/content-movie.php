<article <?= post_class(); ?>>
    <div class="image">
        <a href="<?= get_the_permalink(); ?>">
            <img src="<?= get_the_post_thumbnail_url( 'thumb-220' ); ?>">

            <span>Tập <?= rwmb_meta( 'episode' ); ?>/<?= rwmb_meta( 'total' ); ?></span>
        </a>
    </div>

    <a href="<?= get_the_permalink(); ?>"><h4><?= get_the_title(); ?></h4></a>

    <div class="info">
        <span class="cl-gr"><?= get_the_category()[0]->name; ?></span>
        <span class="cl-gr"><?= rwmb_meta( 'length' ); ?>phút/tập</span>
        <span class="cl-gr"><?= get_the_category()[1]->name; ?></span>
    </div>

    <div class="tags">
        <?php
        $tags = get_the_tags();
        foreach( $tags as $tag ) :
        ?>
        <a href="<?= get_tag_link( $tag->slug ) ?>"><?= $tag->name ?></a>
        <?php
        endforeach;
        ?>
    </div>
</article>