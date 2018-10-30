<div class="page-header row no-gutters py-4">
	<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
		<span class="text-uppercase page-subtitle">Overview</span>
		<h3 class="page-title"><?= $title ?></h3>
	</div>
</div>
<!-- End Page Header -->
<div class="row">
	<div class="col-md-8 offset-md-2">
		<div class="card card-small h-100">
	<div class="card-header border-bottom">
		<h6 class="m-0">Add New Post</h6>
	</div>
	<div class="card-body d-flex flex-column">
		<?php echo validation_errors(); ?>
		<?php echo form_open('posts/create'); ?>
			<div class="form-group">
				<input type="text" placeholder="Brave New World" name="title" class="form-control"> 
			</div>
			<div class="form-group">
				<textarea name="body" placeholder="Words can be like X-rays if you use them properly..." class="form-control" rows="15" ></textarea>
			</div>
			<div class="form-group mb-0">
				<button class="btn btn-accent" name="submit" type="submit">Submit</button>
			</div>
		</form>
	</div>
</div>
	</div>
</div>