<?php require_once('layout/header.php'); ?>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Blogger.dev</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
  		<?php
  			foreach ($this->exposts as $post) {
  				?>
  				<div class="row">
					<div class="col-md-6">
						<h3><?php echo $post['title']; ?></h3>
						<p><?php echo $post['content']; ?></p>
					</div>
				</div
  				<?php
  			}
  		?>
  		</div>
  		</div>
	</div>
</form>
</div>
</body>
</html>