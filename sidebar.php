<?php
/**
 * The sidebar containing the secondary widget area, displays on homepage, archives and posts.
 *
 * If no active widgets in this sidebar, it will shows Recent Posts, Archives and Tag Cloud widgets.
 *
 * @package Horizon_Theme
 */
?>

<div id="secondary" class="col-md-4 col-md-pull-8" role="complementary">
	<div class="horizon-summary-sidebar">
		<!-- Nav tabs -->
		<ul class="nav-tabs nav" role="tablist">
			<li role="presentation" class="active"><a href="#recent" aria-controls="recent" role="tab" data-toggle="tab">Recents</a></li>
			<li role="presentation"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Populares</a></li>
			<li role="presentation"><a href="#comment" aria-controls="comment" role="tab" data-toggle="tab">Comentários</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">

			<!-- Posts recentes -->

			<div role="tabpanel" class="tab-pane active" id="recent">
				<div class="media list-featured">
					<div class="media-left">
						<a href="#">
							<img class="media-object" src="http://placehold.it/70x70">
						</a>
					</div>
					<div class="media-body">
						<a href="#">
							<h5 class="media-heading">Posts recentes loop</h5>
						</a>
						<p><span class="fa fa-clock-o"></span> 11 de Janeiro de 1111</p>
					</div>
				</div>

				<div class="media list-featured">
					<div class="media-left">
						<a href="#">
							<img class="media-object" src="http://placehold.it/70x70">
						</a>
					</div>
					<div class="media-body">
						<a href="#">
							<h5 class="media-heading">Posts recentes loop</h5>
						</a>
						<p><span class="fa fa-clock-o"></span> 11 de Janeiro de 1111</p>
					</div>
				</div>

				<div class="media list-featured">
					<div class="media-left">
						<a href="#">
							<img class="media-object" src="http://placehold.it/70x70">
						</a>
					</div>
					<div class="media-body">
						<a href="#">
							<h5 class="media-heading">Posts recentes loop</h5>
						</a>
						<p><span class="fa fa-clock-o"></span> 11 de Janeiro de 1111</p>
					</div>
				</div>
			</div>

			<!-- Posts populares -->

			<div role="tabpanel" class="tab-pane" id="popular">
				<div class="media list-featured">
					<div class="media-left">
						<a href="#">
							<img class="media-object" src="http://placehold.it/70x70">
						</a>
					</div>
					<div class="media-body">
						<a href="#">
							<h5 class="media-heading">Posts populares loop</h5>
						</a>
						<p><span class="fa fa-clock-o"></span> 11 de Janeiro de 1111</p>
					</div>
				</div>

				<div class="media list-featured">
					<div class="media-left">
						<a href="#">
							<img class="media-object" src="http://placehold.it/70x70">
						</a>
					</div>
					<div class="media-body">
						<a href="#">
							<h5 class="media-heading">Posts populares loop</h5>
						</a>
						<p><span class="fa fa-clock-o"></span> 11 de Janeiro de 1111</p>
					</div>
				</div>

				<div class="media list-featured">
					<div class="media-left">
						<a href="#">
							<img class="media-object" src="http://placehold.it/70x70">
						</a>
					</div>
					<div class="media-body">
						<a href="#">
							<h5 class="media-heading">Posts populares loop</h5>
						</a>
						<p><span class="fa fa-clock-o"></span> 11 de Janeiro de 1111</p>
					</div>
				</div>
			</div>

			<!-- Comentários -->

			<div role="tabpanel" class="tab-pane" id="comment">
				<div class="media list-featured">
					<div class="media-left">
						<a href="#">
							<img class="media-object img-circle" src="http://placehold.it/70x70">
						</a>
					</div>
					<div class="media-body">
						<a href="#">
							<h5 class="media-heading">Fulano da Silva</h5>
						</a>
						<p><span class="fa fa-comment-o"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. E ipsum dolor sit amet, consectetur. </p>
					</div>
				</div>

				<div class="media list-featured">
					<div class="media-left">
						<a href="#">
							<img class="media-object img-circle" src="http://placehold.it/70x70">
						</a>
					</div>
					<div class="media-body">
						<a href="#">
							<h5 class="media-heading">Fulano da Silva</h5>
						</a>
						<p><span class="fa fa-comment-o"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. E ipsum dolor sit amet, consectetur. </p>
					</div>
				</div>

				<div class="media list-featured">
					<div class="media-left">
						<a href="#">
							<img class="media-object img-circle" src="http://placehold.it/70x70">
						</a>
					</div>
					<div class="media-body">
						<a href="#">
							<h5 class="media-heading">Fulano da Silva</h5>
						</a>
						<p><span class="fa fa-comment-o"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. E ipsum dolor sit amet, consectetur. </p>
					</div>
				</div>
			</div>
		</div>

	</div>
	<?php
		if ( ! dynamic_sidebar( 'main-sidebar' ) ) {
			the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ) );
			the_widget( 'WP_Widget_Archives', array( 'count' => 0, 'dropdown' => 1 ) );
			the_widget( 'WP_Widget_Tag_Cloud' );
		}
	?>
</div><!-- #secondary -->
