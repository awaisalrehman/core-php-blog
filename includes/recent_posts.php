<?php $recent_posts = getRecentPublishedPosts(); ?>
<div class="col-lg-4">
    <div class="widget-sidebar">
        <h2 class="title-widget-sidebar">// RECENT POST</h2>
        <div class="content-widget-sidebar">
            <ul>
                <?php foreach ($recent_posts as $index => $post): ?>
                <li class="recent-post">
                    <div class="post-img">
                        <img src="<?php echo BASE_URL . '/static/uploads/post_featured_images/' . $post['image']; ?>" class="img-responsive">
                    </div>
                    <a href="/single_post.php?post-slug=<?php echo $post['slug']; ?>">
                        <h5><?php echo $post['title'] ?></h5>
                    </a>
                    <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> <?php echo date("j F, Y ", strtotime($post["created_at"])); ?></small></p>
                </li>
                  <?php if ($index+1 < count($recent_posts)): ?>
                    <hr>
                  <?php endif ?>
                <?php endforeach ?>
            </ul>
        </div>
    </div>


<!-- <div class="widget-sidebar">
    <h2 class="title-widget-sidebar">// ARCHIVES</h2>
    <div class="last-post">
        <button class="accordion">21/4/2016</button>
        <div class="panel">
            <li class="recent-post">
                <div class="post-img">
                    <img src="" class="img-responsive">
                </div>
                <a href="#">
                    <h5>Excepteur sint occaecat cupi non proident laborum.</h5>
                </a>
                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
            </li>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <hr>
    <div class="last-post">
        <button class="accordion">5/7/2016</button>
        <div class="panel">
            <li class="recent-post">
                <div class="post-img">
                    <img src="" class="img-responsive">
                </div>
                <a href="#">
                    <h5>Excepteur sint occaecat cupi non proident laborum.</h5>
                </a>
                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
            </li>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <hr>
    <div class="last-post">
        <button class="accordion">15/9/2016</button>
        <div class="panel">
            <li class="recent-post">
                <div class="post-img">
                    <img src="" class="img-responsive">
                </div>
                <a href="#">
                    <h5>Excepteur sint occaecat cupi non proident laborum.</h5>
                </a>
                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
            </li>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <hr>
    <div class="last-post">
        <button class="accordion">2/3/2017</button>
        <div class="panel">
            <li class="recent-post">
                <div class="post-img">
                    <img src="" class="img-responsive">
                </div>
                <a href="#">
                    <h5>Excepteur sint occaecat cupi non proident laborum.</h5>
                </a>
                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
            </li>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>

</div> -->