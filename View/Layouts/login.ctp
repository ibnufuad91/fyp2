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
		<section id="page">
			<div id="pane-content">
				<section id="content">
					<section id="pane">
						<header>
							<h1>User Login</h1>
						</header>
						<div align="center">
						<div class="g4" width="40%">
							<?php echo $this->Session->flash(); ?>
							<?php echo $this->Session->flash('auth'); ?>
							<?php echo $this->fetch('content'); ?>
							
						</div>
						</div>
						<div class="cf"></div>
					</section>
				</section>
			</div>
		</section>
	</div>
</body>
</html>
