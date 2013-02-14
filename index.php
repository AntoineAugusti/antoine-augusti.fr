<?php 
include "head.php";
?>
				<div id="contact" class="corps-left">
					<h1><span class="icon-corps contact"></span><?php echo $lang['index_contact_me']; ?></h1>
					<div class="gray-post">
						<?php
						display_full_contact();
						?>
		            </div>
	        	</div>

	        	<div class="corps-right">
	        		<h1><span class="icon-corps blog"></span><?php echo $lang['index_derniers_articles']; ?></h1>
					<div class="gray-post">
					<ul class="inside-square">
					<?php
					$reponse = mysql_query("SELECT guid, post_title, post_date FROM wp_posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY id DESC LIMIT 0,5");
					while ($donnees = mysql_fetch_array($reponse) )
						{
					?>
						<li class="margin-bottom-30"><?php convertirDate($donnees['post_date']); ?> -<a href="<?php echo $donnees['guid']; ?>" target="_blank"> <?php echo htmlentities($donnees['post_title']); ?></a></li>	
					<?php } ?>
					</ul>
					</div>
	        	</div>

	        	<div class="clear"></div>

	        	<h1><span class="icon-corps work"></span><?php echo $lang['index_some_projects']; ?></h1>
					<?php
						display_projets();
					?>
			       
				<h1><span class="icon-corps gmail"></span><?php echo $lang['index_contact_me_by_email']; ?></h1>
					<?php
						display_contact_by_email();
					?>
<?php
include 'footer.php'; 
?>
