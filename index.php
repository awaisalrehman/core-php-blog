<!-- The first include should be config.php -->
<?php 
    require_once('config.php');
    require_once( ROOT_PATH . '/includes/public_functions.php');
    require_once( ROOT_PATH . '/includes/registration_login.php');
    
    //Retrieve all posts from database
    $posts = getPublishedPosts();
    
    require_once( ROOT_PATH . '/includes/head_section.php');
    ?>
</head>
<body>
    <!--=====================NAVBAR======================-->
    <?php include( ROOT_PATH . '/includes/navbar.php') ?>

    <section id="blog-section" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">

                      <!--=====================LOOP THROUGH POSTS======================-->
                        <?php foreach ($posts as $post): ?>
                        <div class="col-lg-6 col-md-6">
                            <aside>
                                <img src="<?php echo BASE_URL . '/static/uploads/post_featured_images/' . $post['image']; ?>" class="img-responsive" alt="">
                                <div class="content-title">
                                    <div class="text-center">
                                        <h3><a href="/single_post.php?post-slug=<?php echo $post['slug']; ?>">
                                            <?php echo $post['title'] ?></a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="content-footer">
                                    <img class="user-small-img" src="/static/images/profile-pic.png">
                                    <span style="font-size: 16px;color: #fff;">
                                    <?php echo getAuthorById($post['user_id'])['username']; ?></span>
                                    <span class="pull-right">
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> 30</a>
                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> 20</a>                  
                                    </span>
                                    <div class="user-ditels">
                                        <div class="user-img"><img src="/static/images/profile-pic.png" class="img-responsive"></div>
                                        <span class="user-full-ditels">
                                            <h3><?php echo getAuthorById($post['user_id'])['username']; ?></h3>
                                            <p><?php echo getAuthorById($post['user_id'])['role']; ?></p>
                                        </span>
                                        <div class="social-icon">
                                            <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus"></i></a>
                                            <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i></a>
                                            <a href="https://www.github.com/awaisalrehman" target="_blanck"><i class="fa fa-github" data-toggle="tooltip" data-placement="bottom" title="Github"></i></a>       
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <?php endforeach ?>

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