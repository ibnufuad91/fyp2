<html>
<head>
	<meta charset="UTF-8" />
	<title>Mighty - Premium Admin Panel</title>
	<meta name="description" content="Mighty - Premium Admin Panel" />
	<meta name="author" content="Lucas Pelegrino" />
	<meta name="keywords" content="mighty admin, admin, themeforest, panel, administrator, theme, template, html template" />

	<!-- Optimized mobile viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
	<?php echo $this->element('assets'); ?>
</head>
<body class="fixed fixed-topbar">
	<div id="wrapper">
		<section id="top">
			<header>
				<nav id="menu-bar">
					<ul>
						<li>
							<a href="#">Notifications <span class="note">7</span></a>
						</li>
						<li class="with-submenu">
							<a href="#">System settings</a>
							<nav class="submenu">
								<ul>
									<li><a href="#">Maintenance Mode</a></li>
									<li><a href="#">General Settings</a></li>
									<li><a href="#">SEO configurations</a></li>
								</ul>
							</nav>
						</li>
						<!-- .keep makes the element aways visible (even in smaller screens) -->
						<li class="keep"><?php echo $this->Form->postLink('Logout', array('controller'=>'users', 'action'=>'logout')); ?></li>
						<li class="keep"><a href="#" class="bt-alt"><span>visit website</span></a></li>
					</ul>
				</nav>
			</header>
		</section>
		<section id="page">
			<aside id="sidebar">
				<div id="logo">
					<a href="./index.php.html"><?php echo $this->Html->image('logo.png', array('alt'=>'Mighty Admin')); ?></a>
				</div>
				<?php echo $this->Element('sidemenu'); ?>
				
			</aside>
			<?php echo $this->Element('content'); ?>
		</section>
	</div>
</body>
</html>
