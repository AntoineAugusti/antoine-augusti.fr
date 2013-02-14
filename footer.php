			</div><!-- END CORPS -->
		</div><!-- END WRAP-INNER -->
	</div><!-- END WRAP -->
	<!-- END CORPS -->
	<div id="footer">
		<div id="footer_content">
			<img src="<?php echo DOMAINE; ?>images/footer-ligne.png" class="left" alt="Ligne footer">
			<div class="about">
				<img src="<?php echo DOMAINE; ?>images/footer-fleche.png" class="fleche_footer" alt="fleche"/><span class="bleu"><?php echo $lang['footer_who_am_i']; ?></span><br>
				<?php echo $lang['footer_description']; ?>
			</div>
			<img src="<?php echo DOMAINE; ?>images/footer-ligne.png" class="left" alt="Ligne footer">
			<div class="plan">
				<img src="<?php echo DOMAINE; ?>images/footer-fleche.png" class="fleche_footer" alt="fleche"/><span class="bleu"><?php echo $lang['footer_few_links']; ?></span><br>
				<a href="<?php echo DOMAINE; ?>"><?php echo $lang['footer_home']; ?></a><br>
				<a href="//www.facebook.com/AntoineAugusti" target="_blank" title="Facebook">Facebook</a><br>
				<a href="//www.twitter.com/AntoineAugusti" target="_blank" title="Twitter">Twitter</a><br>
				<a href="//blog.antoine-augusti.fr" target="_blank" title="Blog">Blog</a><br>
				<a href="//cv.antoine-augusti.fr" target="_blank" title="CV">CV</a><br>
				<a href="https://github.com/AntoineAug" target="_blank" title="GitHub">GitHub</a><br>
				<a href="<?php echo DOMAINE; ?>#contact">Contact</a>
			</div>
			<img src="<?php echo DOMAINE; ?>images/footer-ligne.png" class="left" alt="Ligne footer">
			<div class="logo_footer">
				<a href="../" title="<?php echo $lang['header_back_to_home']; ?>"><img src="<?php echo DOMAINE; ?>images/logo.png" alt="Logo"/></a><br>
				<br/>
				&copy; <?php echo date("Y"); ?>	<a href="//www.antoine-augusti.fr" title="<?php echo $lang['footer_website_antoine_augusti']; ?>" target="_blank">Antoine AUGUSTI</a> | <a href="//www.insa-rouen.fr" target="_blank" title="<?php echo $lang['footer_website_insa_rouen']; ?>">INSA Rouen</a><br>
			</div>
		</div>
	</div>
	<!-- END FOOTER -->	

	<div id="translate_transition" class="">
		<p class="translate_text english">Eh! Wait a few seconds, I'm translating my website!</p>
		<p class="translate_text french">Hé ! Attendez un instant, je traduis mon site !</p>
		<p class="caption">&larr; Yeah, it's me.</p>
	<span class="translate_img"></span>
	</div>

	</div>

	<?php
	echo '
	<script>
	var contact_empty_form = "'.$lang['contact_empty_form'].'";
	var contact_wrong_captcha = "'.$lang['contact_wrong_captcha'].'";
	var contact_mail_sent = "'.$lang['contact_mail_sent'].'";
	</script>';
	?>
	<script src="<?php echo DOMAINE; ?>js/scrypt.js"></script>
	</body>
</html>