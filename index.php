<?php get_header();
// Template Name: Index
?>

<main id="accueil">

    <span id="content">
        <?php the_content(); ?>     
    
        <!-- SECTION CARDS -->
        <section id="cards_reviews">
            <?php if ( have_rows( 'répéteur' ) ) : ?>
            <?php while ( have_rows( 'répéteur' ) ) : the_row(); ?>
                <?php if ( have_rows( 'groupe' ) ) : ?>
                    <?php while ( have_rows( 'groupe' ) ) : the_row(); ?>
            
            <!-- MISE EN FORME DE LA CARD -->
            <div class="card">
                <div class="profile">
    
                    <!-- IMAGE PROFILE -->
                    <?php $image = get_sub_field( 'image' ); ?>
                    <?php $size = 'full'; ?>
                    <?php if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, $size ); ?>
                    <?php endif; ?>
    
                    <!-- NON PRENOM -->
                    <h2>
                        <?php the_sub_field( 'nom' ); ?>
                    </h2>
                </div>
    
                <div class="description">
                    <!-- NOTE */* -->
                    <span class="note">
                        <?php the_sub_field( 'notation' ); ?>
                    </span>
    
                    <!-- DESCRIPTION NOTE -->
                    <p>
                        <?php the_sub_field( 'description' ); ?>
                    </p>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
    
                <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>
    
    
        </section>             
    </span>
    

</main>

<?php get_footer(); ?>