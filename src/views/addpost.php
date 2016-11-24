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
			<div class="col-md-12">
				<h3>Add new post</h3>
			</div>
			<form method="post" action="/post/add" class="form">
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control"  name="title" placeholder="Title">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Content</label>
			    <div class="col-sm-10">
			      <textarea name="content" class="form-control" rows="3"></textarea>
			    </div>
			  </div>
			  <div class="form-group">
			  	<input class="btn btn-main" type="submit" value="Add post" />
			  </div>
			  </form>
  		</div>
  		</div>
	</div>
</form>
</div>
</body>
</html>