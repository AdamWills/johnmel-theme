<nav class="navbar navbar-light navbar-toggleable-sm">
	<div class="container">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false" aria-label="Toggle navigation"></button>
		<div class="collapse navbar-collapse" id="navbar-header">
      <a class="navbar-brand" href="{{ home_url() }}">
        <img src="@asset('images/logo.svg')" alt="{{ get_bloginfo('name', 'display') }}">
      </a>
			<?php
				wp_nav_menu( array(
					'menu'              => 'Testing Menu',
					'theme_location'    => 'primary_navigation',
					'depth'             => 2,
					'container'         => '',
					'container_class'   => '',
					'container_id'      => '',
					'menu_class'        => 'navbar-nav',
					'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					'walker'            => new App\wp_bootstrap_navwalker())
				);
			?>
	</div>
</nav>
