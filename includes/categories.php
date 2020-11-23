<?php
$categories = getAllTopics();
?>

<div class="widget-sidebar">
	<h2 class="title-widget-sidebar">// CATEGORIES</h2>
	<?php foreach ($categories as $category): ?>
		<button class="categories-btn" onclick="location.href = '<?php echo BASE_URL . 'filtered_posts.php?topic=' . $category['id']; ?>'">
			<?php echo $category['name']; ?>
		</button> 
	<?php endforeach ?>
</div>