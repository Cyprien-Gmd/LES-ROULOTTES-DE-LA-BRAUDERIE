<?php get_header();?>

<main id="singlearticle">

<!-- BOUCLE SINGLE ARTCILE -->
<article>

    <!-- CONTENT ARTICLE -->
    <h2 itemprop="headline">
        <?php the_title(); ?>
    </h2>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        
        <span id="content">
            <?php the_content(); ?>            
        </span>

        <?php endwhile; ?>
        <?php endif; ?>

        <!-- TAILLE DU THUMBNAIL -->
        <?php the_post_thumbnail( 'large-thumbnail'); ?>
        
</article>

</main>
