<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LM_Custom_Theme
 */

?>

	</div><!-- #content -->

	<footer class="page-footer grey darken-3">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h6 class="white-text">About</h6>
					<p class="grey-text text-lighten-4">Outside of Design, I collect and read DC Comics, shop for vinyl records, play guitar in a Dave Matthews Cover Band and run, bike and swim.</p>


				</div>
				<div class="col l3 s12">
					<h6 class="white-text">Latest Blog Posts</h6>
					<ul>
						<li><a class="white-text" href="#!">Link 1</a></li>
						<li><a class="white-text" href="#!">Link 2</a></li>
						<li><a class="white-text" href="#!">Link 3</a></li>
						<li><a class="white-text" href="#!">Link 4</a></li>
					</ul>
				</div>
				<div class="col l3 s12">
					<h6 class="white-text">Let's Get Social</h6>
					<ul>
						<li><a class="white-text" href="#!">Link 1</a></li>
						<li><a class="white-text" href="#!">Link 2</a></li>
						<li><a class="white-text" href="#!">Link 3</a></li>
						<li><a class="white-text" href="#!">Link 4</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright grey darken-4 grey-text">
			<div class="container">
				Made by <a class="grey-text text-lighten-3" href="https://edgonzalez.me">Ed Gonzalez</a>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Portfolio Modals -->
<?php $loop = new WP_Query(array('post_type'=>'portfolios', 'order_by'=>
    'post_id','order'=>'ASC'))?>
<?php while($loop->have_posts()):
$loop->the_post();
?>
<!-- Portfolio Modal 1 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-<?php the_ID(); ?>">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0"><?php the_title(); ?></h2>
                    <hr class="star-dark mb-5">
                    <?php the_post_thumbnail() ?>
                    <!--<img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">-->
                    <p class="mb-5"><?php the_content(); ?> </p>
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                        <i class="fa fa-close"></i>
                        Close Project</a>
                </div>
            </div>
        </div>
    </div>
</div>
 
<?php endwhile; ?>

</body>
</html>
