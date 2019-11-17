<header class="header-global">


<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent  headroom fixed-top">
	<!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primaryNav" aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="primaryNav">
		<?php
		wp_nav_menu( array(
			'menu'          	=> 'primary',
			'theme_location'	=> 'primary',
			'depth'         	=> 2,
			'container'			=> false,
			'menu_class'    	=> 'navbar-nav mr-auto ',
			'fallback_cb'   	=> 'bs4navwalker::fallback',
			'walker'         	=> new bs4navwalker())
		
		);
		?>
		<?php get_search_form(); ?>
	</div>-->

    <div class="container">
        <a class="navbar-brand mr-lg-5" href="/">
            <img alt="image" src="https://latamclub.org/wp-content/uploads/2019/11/logo200-1.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="primaryNav">
            <?php
            wp_nav_menu( array(
                    'menu'          	=> 'primary',
                    'theme_location'	=> 'primary',
                    'depth'         	=> 2,
                    'container'			=> false,
                    'menu_class'    	=> 'navbar-nav mr-auto',
                    'fallback_cb'   	=> 'bs4navwalker::fallback',
                    'walker'         	=> new bs4navwalker())

            );
            ?>


        </div>

    </div>

</nav>


</header>