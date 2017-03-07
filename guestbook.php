<?php /* Template Name: Guestbook */ ?>

<?php get_header(); ?>
		<!-- Seiteninhalt -->
		<main class="guestbook-content">					
			<h2 class="text-center"><?php the_title(); ?></h2>
			<?php comments_template('/guestbook_comments.php');	?>	
		</main>
	</div><!--/.container-->
<?php get_footer(); ?>