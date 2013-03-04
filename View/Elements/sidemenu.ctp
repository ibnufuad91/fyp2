<div class="menus">
	<!-- menu #1 -->
	<nav>
		<h2>Main Menu</h2>
		
		<ul>
			<li <?php echo ($this->request->params['controller'] == 'mains' && $this->request->params['action'] == 'index')? 'class="active"':''; ?>>
				<a href="<?php echo $this->Html->url(array('controller'=>'mains','action'=>'index')); ?>">
					<i class="icon-grid-view"></i>
					<div class="label">Dashboard</div>
				</a>
			</li>
			<li <?php echo ($this->request->params['controller'] == 'members')? 'class="active"':''; ?>>
				<a href="#">
					<i class="icon-user-3"></i>
					<div class="label">Personal Profile</div>
				</a>
				<!-- submenu -->
				<nav>
					<ul>
						<li><?php echo $this->Html->link('Biography', array('controller'=>'members','action'=>'index')); ?></li>
						<li><?php echo $this->Html->link('Academic', array('controller'=>'members','action'=>'academic')); ?></li>
						<li><?php echo $this->Html->link('HS Info', array('controller'=>'members','action'=>'hsinfo')); ?></li>
					</ul>
				</nav>
			</li>
			<li <?php echo ($this->request->params['controller'] == 'members' && $this->request->params['action'] == 'qcircle')? 'class="active"':''; ?>>
				<a href="<?php echo $this->Html->url(array('controller'=>'members','action'=>'qcircle')); ?>">
					<i class="icon-star-3"></i>
					<div class="label">Quality Circle</div>
				</a>
			</li>
			<li>
				<a href="./typography.php.html">
					<i class="icon-stats-up"></i>
					<div class="label">Lalalalas</div>
				</a>
			</li>
		</ul>
	</nav>
	<!-- /menu -->
	
	<!-- menu #2 -->
	<nav>
		<h2>Secondary Menu</h2>
		
		<ul>
			<li>
				<a href="#">
					<i class="icon-clipboard"></i>
					<div class="label">Form</div>
				</a>

				<!-- submenu -->
				<nav>
					<ul>
						<li><a href="./form-elements.php.html">Form Elements</a></li>
						<li><a href="./form-validation.php.html">Form Validation</a></li>
						<li><a href="./form-miscellaneous.php.html">Form Miscellaneous</a></li>
					</ul>
				</nav>
			</li>
			<li>
				<a href="#">
					<i class="glyph-list-2"></i>
					<div class="label">Tables</div>
				</a>

				<!-- submenu -->
				<nav>
					<ul>
						<li><a href="./regular-table.php.html">Regular Table</a></li>
						<li><a href="./interactive-table.php.html">Interactive Table</a></li>
					</ul>
				</nav>
			</li>
			<li>
				<a href="./gallery.php.html">
					<i class="glyph-image"></i>
					<div class="label">Gallery</div>
				</a>
			</li>
			<li>
				<a href="./notifications.php.html">
					<i class="icon-bell-3"></i>
					<div class="label">Notifications</div>
				</a>
			</li>
			<li>
				<a href="./buttons.php.html">
					<i class="icon-box-add"></i>
					<div class="label">Buttons</div>
				</a>
			</li>
			<li>
				<a href="./icons.php.html">
					<i class="glyph-icon"></i>
					<div class="label">Icons</div>
				</a>
			</li>
		</ul>
	</nav>
	<!-- /menu -->

	<!-- menu #3 -->
	<nav>
		<h2>Miscellaneous</h2>
		
		<ul>
			<li>
				<a href="./miscellaneous.php.html">
					<i class="icon-cube"></i>
					<div class="label">Miscellaneous</div>
				</a>
			</li>
			<li>
				<a href="./file-manager.php.html">
					<i class="glyph-folder"></i>
					<div class="label">File Manager</div>
				</a>
			</li>
			<li>
				<a href="./calendar.php.html">
					<i class="icon-calendar"></i>
					<div class="label">Calendar</div>
				</a>
			</li>
			<li>
				<a href="./error-page.php.html">
					<i class="icon-cancel-3"></i>
					<div class="label">Error Page</div>
				</a>
			</li>
			<li>
				<a href="./dynamic-binding.php.html">
					<i class="icon-broadcast"></i>
					<div class="label">Dynamic Binding</div>
				</a>
			</li>
		</ul>
	</nav>
	<!-- /menu -->
</div>