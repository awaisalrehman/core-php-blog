<?php  
include('config.php');
include('includes/public_functions.php');
if (isset($_GET['post-slug'])) {
	$post = getPost($_GET['post-slug']);
}
?>

<?php include('includes/head_section.php'); ?>
	<title> <?php echo $post ? $post['title'] : 'Unpublished Post'?> | Core PHP Blog</title>
</head>
<body>

    <!--=====================NAVBAR======================-->
    <?php include( ROOT_PATH . '/includes/navbar.php') ?>

    <section id="blog-section" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">

                      <!--=====================SINGLE POST======================-->
                      <div class="single-post">
                      <?php if ($post && $post['published'] == true): ?>
	                      	
	                      	<h1 class="display-1 single-post-title"><?php echo $post['title']; ?></h1>
	                      	
	                      	<small><i class="fa fa-calendar single-post-date" data-original-title="" title=""></i> <?php echo date("j F, Y ", strtotime($post["created_at"])); ?></small>
	                      	
	                      	<small><i class="fa fa-user single-post-author"></i> <?php echo getAuthorById($post['user_id'])['username']; ?></small>
	                      	
	                      	<img src="<?php echo BASE_URL . '/static/uploads/post_featured_images/' . $post['image']; ?>" class="img-responsive single-post-image" alt="">
	                      	
	                      	<div class="single-post-body">
	                      		<?php echo html_entity_decode($post['body']); ?>
	                      	</div>
	                      	
	                    <?php elseif (isset($_SESSION['user']) && in_array($_SESSION['user']['role'], ["Admin", "Author"])) : ?>
	                    	<div class="message error validation_errors"><p>Sorry... This post has not been published</p></div>
		                      	<h1 class="display-1 single-post-title"><?php echo $post['title']; ?></h1>
		                      	<small><i class="fa fa-calendar single-post-date" data-original-title="" title=""></i> <?php echo date("j F, Y ", strtotime($post["created_at"])); ?></small>
		                      	<small><i class="fa fa-user single-post-author"></i> <?php echo getAuthorById($post['user_id'])['username']; ?></small>
		                      	<img src="<?php echo BASE_URL . '/static/uploads/post_featured_images/' . $post['image']; ?>" class="img-responsive single-post-image" alt="">
		                      	<div class="single-post-body">
		                      		<?php echo html_entity_decode($post['body']); ?>
		                      	</div>
	                    <?php else: ?>
	                      		<div class="message error validation_errors"><p>Sorry... This post has not been published</p></div>
	                    <?php endif ?>

	                    <?php if ($post && $post['published'] == true ||
	                    isset($_SESSION['user']) && in_array($_SESSION['user']['role'], ["Admin", "Author"])): ?>
	                      	<?php if($post['topics']): ?>
	                      		<h2 class="display-2 single-post-title">Topics</h2>
	                      	<?php endif ?>
	                      	<div class="single-post-categories">
	                      		<?php foreach ($post['topics'] as $topic): ?>
	                      			<a class="btn btn-success"
	                      			href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
	                      			<?php echo $topic['name']; ?>
	                      			</a> 
	                      		<?php endforeach ?>
	                      	</div>
	                    <?php endif ?>
	                	</div>

                      <!-- // full post div -->

                      <!-- comments section -->
                      <!--  coming soon ...  -->

                    </div>
                </div>
                <!--=====================RECENT POST======================-->
                <?php include( ROOT_PATH . '/includes/recent_posts.php') ?>

                <!--=====================CATEGORIES======================-->
                <?php include( ROOT_PATH . '/includes/categories.php') ?>

                <!--=====================NEWSLATTER======================-->
                <?php include( ROOT_PATH . '/includes/newslatter.php') ?>

            </div>
        </div>
    </section>
    
    <!--=====================NEWSLATTER======================-->
    <?php include( ROOT_PATH . '/includes/footer.php') ?>
