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

    <!-- GOOGLE MAPS -->
    <div class="map_google">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10738.319386376044!2d-0.4496643!3d47.7119941!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8491cc78c3173ca!2sRoulottes%20de%20la%20Brauderie!5e0!3m2!1sfr!2sfr!4v1623412075633!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!------------------------------------------------------------------------------------------------------------>

</main>

<!--------------------------------------FOOTER---------------------------------------------------->
<?php get_footer();?>