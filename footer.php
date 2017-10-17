<?php
/**
 * The template for displaying the footer.
 *
 * Contains all content after the main content area and sidebar
 *
 * @package Poseidon
 */

?>
<div style="clear: both; margin: 55px 0 15px 0;">
    <div style="text-align: center; border-bottom: 1px solid #265582; margin:15px 0 15px 0;">
        <p style="padding: 0 0 5px 0; margin: 0; color: #062E54; font-style: normal;">Confirmed speakers</p>
    </div>
    <?php kw_sc_logo_carousel('cooperation'); ?>
</div>

	</div><!-- #content -->
	<?php do_action( 'poseidon_before_footer' ); ?>

	<div id="footer" class="footer-wrap">
                <iframe
                width="100%" height="450"
                frameborder="0" style="padding:0; margin:0;"
                src="https://www.google.com/maps/embed/v1/search?key=AIzaSyDvh418Bz91j_VTKy3QU_UcFwMaa0Bonlw&q=Politechnika Gdańska Wydział Elektroniki, Telekomunikacji i Informatyki"
                allowfullscreen>
        </iframe>
		<footer id="colophon" class="site-footer container clearfix" role="contentinfo">

			<?php do_action( 'poseidon_footer_menu' ); ?>

			<div id="footer-text" class="site-info">
                <table>
                    <tr>
                        <td colspan="3">
                            <?php kw_sc_logo_carousel('footer-logos'); ?>
                        </td>
                        <td>
                                <p>
                                <div>Department of Biomedical Engineering</div>
                                <div>Faculty of Electronics, Telecommunications and Informatics</div>
                                <div>Gdansk University of Technology</div>
                            </p>
                        </td>
                    </tr>
                </table>
<!--				--><?php //do_action( 'poseidon_footer_text' ); ?>
			</div><!-- .site-info -->

		</footer><!-- #colophon -->

	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
