<?php include('includes/header.php'); ?>
<ul id="topics">
	<?php if ($topics) : ?>
		<?php foreach ($topics as $topic) : ?>
			<li class="topic">
				<div class="row">
					<div class="col-md-2">
						<img class="avatar pull-left" src="images/avatars/<?php echo $topic->avatar; ?>" />
					</div>
					<div class="col-md-10">
						<div class="topic-content pull-right">
							<h3><a href="topic.php?id=<?php echo $topic->id; ?>"><?php echo $topic->title; ?></a></h3>
							<div class="topic-info">
								<a href="topics.php?category=<?php echo urlFormat($topic->category_id); ?>"><?php echo $topic->name; ?></a> >>
								<a href="topics.php?user=<?php echo urlFormat($topic->user_id); ?>"><?php echo $topic->username; ?></a> >>
								<?php echo formatDate($topic->create_date); ?>

								<!-- share btns -->

								<!-- <a href="#"><span class="badge pull-right"><i class="fa fa-share-alt"></i></span></a> -->
								<br>
								<!-- <p><strong>Share </strong></p> -->
								<ul>

									<a target="_blank" class="badge pull-right" href="http://www.facebook.com/sharer.php?u=<?php echo $baseUrl . $slug; ?>">
										<i class="fa fa-facebook-f"></i></a>

									<a target="_blank" class="badge pull-right" href="http://twitter.com/share?text=Visit the link &url=<?php echo $baseUrl . $slug; ?>&hashtags=blog,technosmarter,programming,tutorials,codes,examples,language,development">
										<i class="fa fa-twitter"></i> </a>

									<a target="_blank" class="badge pull-right" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $baseUrl . $slug; ?>">
										<i class="fa fa-linkedin"></i></a>


								</ul>

								<!-- <span class="badge pull-right"><?php echo replyCount($topic->id); ?></span> -->
							</div>
						</div>
					</div>
				</div>
			</li>
		<?php endforeach; ?>

</ul>
<?php else : ?>
	<p>No Topics To Display</p>
<?php endif; ?>
<h3>Forum Statistics</h3>
<ul>
	<li>Total Number of Users: <strong><?php echo $totalUsers; ?></strong></li>
	<li>Total Number of Topics: <strong><?php echo $totalTopics; ?></strong></li>
	<li>Total Number of Categories: <strong><?php echo $totalCategories; ?></strong></li>
</ul>
<?php include('includes/footer.php'); ?>