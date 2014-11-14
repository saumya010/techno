<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Magista
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
	<?php if(!is_front_page()) { ?>
        <div class="push"></div>
        <?php } ?>
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="magista_foot">
		<div class="row">
			<div class="site-footer-inner col-sm-12">

				<div class="site-info">
                                    <h1>Mission I Am</h1>
                                    <ul class="foot-links">
                                        <li><a href="https://www.facebook.com/pages/Mission-I-Am/627658913998531"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/Mission_IAM"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="https://plus.google.com/u/3/b/104597568325749036733/"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="http://www.pinterest.com/contact1429/"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="https://www.youtube.com/channel/UC7iIwgO9pi_-eqH-mR5iB2Q"><i class="fa fa-youtube"></i></a></li>

                                    </ul>
                                    <p>Mission I AM © 2014. All rights reserved.</p>
                                </div><!-- close .site-info -->
                                
			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>