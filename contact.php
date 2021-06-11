<?php get_header();
// Template Name: Contact
?>

<main id="contact">

    <?php the_content();
    ?>

    <!-- LE FORMULAIRE -->
    <div class="formulaire">
        <div class="form_1">
            <div class="form_2">
                <div class="form_3"><i class="fas fa-map-marker-alt"></i><p>La Brauderie
                    49330 BRISSARTHE</p></div>
                <div class="form_3"><i class="fas fa-phone-alt"></i><p>06.18.91.39.40</p></div>
                <div class="form_3"><i class="fas fa-comment-alt"></i><p>roulottes.brauderie@gmail.com</p></div>
            </div>
            <input type="button" value="RESERVER" class="reserver">
        </div>

        <?php echo do_shortcode( '[contact-form-7 id="14" title="Formulaire de contact 1"]' ); ?>

    </div>
    <!------------------------------------------------------------------------------------------------------------>

</main>

<!--------------------------------------FOOTER---------------------------------------------------->
<?php get_footer();?>