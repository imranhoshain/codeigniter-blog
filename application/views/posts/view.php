<div class="page-header row no-gutters py-4">
	<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
		<span class="text-uppercase page-subtitle">Overview</span>
		<h3 class="page-title"><?= $title ?></h3>
	</div>
</div>
<div class="row">
	<div class="col-lg-8 col-sm-12 mb-4 offset-md-2">
		<div class="card card-small card-post card-post--aside card-post--1">
			<div class="card-post__image" style="background-image: url('<?php echo base_url() ?>assets/images/content-management/5.jpeg');">
				<a href="#" class="card-post__category badge badge-pill badge-info">Travel</a>
				<div class="card-post__author d-flex">
					<a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('<?php echo base_url() ?>assets/images/avatars/0.jpg');">Written by Anna Ken</a>
				</div>
			</div>
			<div class="card-body">
				<h5 class="card-title">
				<a class="text-fiord-blue" href="#"><?= $post['title']?></a>
				</h5>
				<p class="card-text d-inline-block mb-3"><?= $post['body']?></p>
				<span class="text-muted"><?= $post['created_at']?></span>
			</div>
		</div>
	</div>
</div>