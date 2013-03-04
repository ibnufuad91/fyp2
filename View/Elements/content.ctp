<section id="content">
	<section id="content-top">
		<div class="search-field-entry">
			<input type="text" placeholder="Search" />
			<input type="submit" class="search-button" value="L" /><!-- L is the glyph for the search icon -->
		</div>
		
		<nav class="quick-actions">
			<ul>
				<li>
					<a href="#">
						<i class="glyph-attachment"></i>
					</a>
				</li>
				<li class="with-submenu">
					<a href="#">
						<i class="glyph-favorite"></i>
					</a>
					<nav class="submenu">
						<ul>
							<li><a href="#">Subitem 1</a></li>
							<li><a href="#">Subitem 2</a></li>
							<li><a href="#">Subitem 6</a></li>
						</ul>
					</nav>
				</li>
				<li>
					<a href="#">
						<i class="glyph-settings"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="glyph-search"></i>
					</a>
				</li>
				<li class="alt with-submenu">
					<nav>
						<ul>
							<li><a href="#">account settings</a></li>
							<li class="active"><a href="#">edit profile</a></li>
							<li><a href="#">balance</a></li>
						</ul>
					</nav>
				</li>
			</ul>
		</nav>
	</section>
	<div class="cf"></div>
	
	<section id="pane">
		<header>
			<h1>Dashboard</h1>
			<nav class="breadcrumbs">
				<ul>
					<li class="alt"><a href="#"><i class="icon-home"></i></a></li>
					<?php foreach($bc as $breadcrumb){ ?>
						<li><a href="<?php echo $breadcrumb['url']; ?>"><?php echo $breadcrumb['name']; ?></a></li>
					<?php } ?>
				</ul>
			</nav>
		</header>
		<div id="pane-content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>
			<?php echo $this->fetch('content'); ?>
			<div class="cf"></div>
		</div>
	</section>
</section>