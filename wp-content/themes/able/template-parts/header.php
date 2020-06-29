<header class="header <?php echo is_front_page() ? 'header--front' : ''; ?>" id="js-header">
	<div class="header__left">
		<a href="<?php echo HOME_URL; ?>">
			<img src="<?php echo IMAGE_URL;?>logo.svg" alt="">
		</a>
	</div>
	<div class="header__right">
		<a class="header__contact" href="mailto:info@a-ble.co.jp">
			<i class="icon icon-envelope"></i>
		</a>		
		<div class="header__hamburger" id="js-toggle-menu">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
</header>