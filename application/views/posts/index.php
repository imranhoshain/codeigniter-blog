<div class="page-header row no-gutters py-4">
	<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
		<span class="text-uppercase page-subtitle">Overview</span>
		<h3 class="page-title"><?= $title ?></h3>
	</div>
</div>
<div class="row">
	<?php foreach ($posts as $post) { ?>
	<div class="col-lg-4">
		<div class="card card-small card-post mb-4">
			<div class="card-post__image" style="background-image: url('<?php echo base_url() ?>assets/images/content-management/1.jpeg');">                                 
            </div>
			<div class="card-body">
				<h5 class="card-title"><?= $post['title']?></h5>
				<p class="card-text text-muted"> <?= $post['body']?></p>
			</div>
			<div class="card-footer border-top d-flex">
				<div class="card-post__author d-flex">
					<a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('<?php echo base_url() ?>assets/images/avatars/1.jpg');">Written by James Khan</a>
					<div class="d-flex flex-column justify-content-center ml-3">
						<span class="card-post__author-name">James Khan</span>
						<small class="text-muted"><?= $post['created_at']?></small>
					</div>
				</div>
				<div class="my-auto ml-auto">
					<a class="btn btn-sm btn-white" href="<?= site_url('posts/').$post['slug']?>">
					<i class="far fa-bookmark mr-1"></i> Bookmark </a>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</div>