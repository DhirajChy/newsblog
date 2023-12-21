<?php get_header(); ?>
<?php /* Template Name: Home Page */?>
<section class="w3l-homeblock1 py-sm-5 py-4">
    <div class="container py-md-4">
        <?php 
    $Design_posts=get_theme_mod('categorydesign-checkbox',true);
        if($Design_posts){
            ?>
        <div class="grids-area-hny main-cont-wthree-fea row">
            <?php

            ?>
            <div class="col-lg-3 col-6 grids-feature">
                
                <a href="#">
                    <div class="area-box">
                        <?php if (get_theme_mod('first_column') == 'Beauty') {
                            echo '<span class="fa fa-bath"></span>';
                        }
                        if (get_theme_mod('first_column') == 'Fashion and Style') {
                            echo '<span class="fa fa-female"></span>';
                        }
                        if (get_theme_mod('first_column') == 'Food and Wellness') {
                            echo '<span class="fa fa-cutlery"></span>';
                        }
                        if (get_theme_mod('first_column') == 'Lifestyle') {
                            echo '<span class="fa fa-pie-chart"></span>';
                        }
                        ?>
                        <h4 class="title-head">
                            <?php echo esc_html(get_theme_mod('first_column', '')); ?>
                        </h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 grids-feature">

                <a href="#">
                    <div class="area-box">
                        <?php if (get_theme_mod('second_column') == 'Beauty') {
                            echo '<span class="fa fa-bath"></span>';
                        }
                        if (get_theme_mod('second_column') == 'Fashion and Style') {
                            echo '<span class="fa fa-female"></span>';
                        }
                        if (get_theme_mod('second_column') == 'Food and Wellness') {
                            echo '<span class="fa fa-cutlery"></span>';
                        }
                        if (get_theme_mod('second_column') == 'Lifestyle') {
                            echo '<span class="fa fa-pie-chart"></span>';
                        }
                        ?>
                        <h4 class="title-head">
                            <?php echo esc_html(get_theme_mod('second_column', '')); ?>
                        </h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 grids-feature mt-lg-0 mt-md-4 mt-3">
                <a href="#">
                    <div class="area-box">
                        <?php if (get_theme_mod('third_column') == 'Beauty') {
                            echo '<span class="fa fa-bath"></span>';
                        }
                        if (get_theme_mod('third_column') == 'Fashion and Style') {
                            echo '<span class="fa fa-female"></span>';
                        }
                        if (get_theme_mod('third_column') == 'Food and Wellness') {
                            echo '<span class="fa fa-cutlery"></span>';
                        }
                        if (get_theme_mod('third_column') == 'Lifestyle') {
                            echo '<span class="fa fa-pie-chart"></span>';
                        }
                        ?>
                        <h4 class="title-head">
                            <?php echo esc_html(get_theme_mod('third_column', '')); ?>
                        </h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 grids-feature mt-lg-0 mt-md-4 mt-3">
                <a href="#">
                    <div class="area-box">
                        <?php if (get_theme_mod('fourth_column') == 'Beauty') {
                            echo '<span class="fa fa-bath"></span>';
                        }
                        if (get_theme_mod('fourth_column') == 'Fashion and Style') {
                            echo '<span class="fa fa-female"></span>';
                        }
                        if (get_theme_mod('fourth_column') == 'Food and Wellness') {
                            echo '<span class="fa fa-cutlery"></span>';
                        }
                        if (get_theme_mod('fourth_column') == 'Lifestyle') {
                            echo '<span class="fa fa-pie-chart"></span>';
                        }
                        ?>
                        <h4 class="title-head">
                            <?php echo esc_html(get_theme_mod('fourth_column', '')); ?>
                        </h4>
                    </div>
                </a>
            </div>
        </div>
        <?php }?>
    </div>
</section>
<!-- //homeblock1-->

<section class="w3l-testimonials" id="testimonials">
    <!-- main-slider -->
    <div class="testimonials pt-2 pb-5">
        <div class="container pb-lg-5">
            <div class="owl-testimonial owl-carousel owl-theme mb-md-0 mb-sm-5 mb-4">
            <?php
                $slider_posts = get_theme_mod('slider-checkbox', true);

                if ($slider_posts) { ?>
                <div class="item">
                    <?php

                    $beauty = array(
                        'category_name' => 'slider-post1',
                        'posts_per_page' => 1,
                    );

                    $query = new WP_Query($beauty);

                    if ($query->have_posts()):
                        while ($query->have_posts()):
                            $query->the_post();
                            ?>
                            <div class="row slider-info">
                                <div class="col-lg-8 message-info align-self">


                                    <span class="label-blue mb-sm-4 mb-3"><?php echo (get_theme_mod('first_text'));?></span>
                                    <h3 class="title-big mb-4">
                                        <?php the_title(); ?>
                                    </h3>
                                    <p class="message">
                                        <?php the_content(); ?>
                                    </p>
                                </div>
                                <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid radius-image-full"
                                            alt="client image">
                                    <?php } ?>
                                </div>
                            </div>
                            <?php
                        endwhile;

                    else:
                        echo 'No posts found in the "beauty" category.';
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="item">
                    <?php

                    $beauty = array(
                        'category_name' => 'slider-post2',
                        'posts_per_page' => 1,
                    );

                    $query = new WP_Query($beauty);

                    if ($query->have_posts()):
                        while ($query->have_posts()):
                            $query->the_post();
                            ?>
                            <div class="row slider-info">
                                <div class="col-lg-8 message-info align-self">


                                    <span class="label-blue mb-sm-4 mb-3"><?php echo (get_theme_mod('second_text'));?></span>
                                    <h3 class="title-big mb-4">
                                        <?php the_title(); ?>
                                    </h3>
                                    <p class="message">
                                        <?php the_content(); ?>
                                    </p>
                                </div>
                                <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid radius-image-full"
                                            alt="client image">
                                    <?php } ?>
                                </div>
                            </div>
                            <?php
                        endwhile;

                    else:
                        echo 'No posts found in the "fashion-style" category.';
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="item">
                    <?php

                    $beauty = array(
                        'category_name' => 'slider-post3',
                        'posts_per_page' => 1,
                    );

                    $query = new WP_Query($beauty);

                    if ($query->have_posts()):
                        while ($query->have_posts()):
                            $query->the_post();
                            ?>
                            <div class="row slider-info">
                                <div class="col-lg-8 message-info align-self">


                                    <span class="label-blue mb-sm-4 mb-3"><?php echo (get_theme_mod('third_text'));?></span>
                                    <h3 class="title-big mb-4">
                                        <?php the_title(); ?>
                                    </h3>
                                    <p class="message">
                                        <?php the_content(); ?>
                                    </p>
                                </div>
                                <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid radius-image-full"
                                            alt="client image">
                                    <?php } ?>
                                </div>
                            </div>
                            <?php
                        endwhile;

                    else:
                        echo 'No posts found in the "food-wellness" category.';
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="item">
                    <?php

                    $beauty = array(
                        'category_name' => 'slider-post4',
                        'posts_per_page' => 1,
                    );

                    $query = new WP_Query($beauty);

                    if ($query->have_posts()):
                        while ($query->have_posts()):
                            $query->the_post();
                            ?>
                            <div class="row slider-info">
                                <div class="col-lg-8 message-info align-self">


                                    <span class="label-blue mb-sm-4 mb-3"><?php  echo (get_theme_mod('fourth_text'));?></span>
                                    <h3 class="title-big mb-4">
                                        <?php the_title(); ?>
                                    </h3>
                                    <p class="message">
                                        <?php the_content(); ?>
                                    </p>
                                </div>
                                <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid radius-image-full"
                                            alt="client image">
                                    <?php } ?>
                                </div>
                            </div>
                            <?php
                        endwhile;

                    else:
                        echo 'No posts found in the "lifestyle" category.';
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <?php }?>
            </div>
        </div>
    </div>

    <!-- /main-slider -->
</section>

<div class="w3l-homeblock2 py-5">


    <div class="container py-lg-5 py-md-4">
        <!-- block -->
        <div class="row">

            <div class="col-lg-8">
                <?php
                $editors_posts = get_theme_mod('Editors-checkbox', true);

                if ($editors_posts) { ?>

                    <h3 class="section-title-left mb-4">
                        <?php echo (get_theme_mod('title', '')); ?>
                    </h3>
                    <div class="row">
                        <?php

                        $editors1 = array(
                            'category_name' => 'editors',
                            'order' => 'ASC'

                        );

                        $query = new WP_Query($editors1);

                        if ($query->have_posts()):
                            while ($query->have_posts()):
                                $query->the_post();
                                ?>
                                <?php
                                $post_id = get_the_ID();
                                $editor_info = get_post_meta($post_id, 'editors_info', true);




                                if (!empty($editor_info) && $editor_info === '1') {
                                    ?>

                                    <div class="col-lg-6 col-md-6 item">

                                        <div class="card">
                                            <div class="card-header p-0 position-relative">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php if (has_post_thumbnail()) { ?>
                                                        <img class="card-img-bottom d-block radius-image-full"
                                                            src="<?php echo the_post_thumbnail_url(); ?>" alt="Card image cap">
                                                    <?php } ?>
                                                </a>
                                            </div>
                                            <div class="card-body blog-details">
                                                <span class="label-blue">Beauty</span>
                                                <a href="<?php the_permalink(); ?>" class="blog-desc">
                                                    <?php the_title(); ?>
                                                </a>
                                                <p>
                                                    <?php the_content(); ?>
                                                </p>
                                                <div class="author align-items-center mt-3 mb-1">
                                                    <?php
                                                    $author_id = get_the_author_meta('ID');
                                                    $author_avatar = get_avatar($author_id, 64);
                                                    echo $author_avatar;
                                                    ?>
                                                    <ul class="blog-meta">
                                                        <li>
                                                            <a href="<?php the_permalink(); ?>">
                                                                <?php newsblog_posted_by(); ?>
                                                            </a> </a>
                                                        </li>
                                                        <li class="meta-item blog-lesson">
                                                            <span class="meta-value">
                                                                <?php newsblog_posted_on(); ?>
                                                            </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1
                                                                min</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                <?php } ?>

                                <?php
                            endwhile;

                        else:
                            echo 'No posts found in the "Editors" category.';
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>

                    <div class="mt-4 left-right bg-clr-white p-3">
                        <h3 class="section-title-left align-self pl-2 mb-sm-0 mb-3">Advertise with us </h3>
                        <a class="btn btn-style btn-primary" href="#url">Learn more</a>
                    <?php } ?>


                </div>

            </div>
            <?php get_sidebar(); ?>

        </div>

    </div>

</div>



<div class="w3l-homeblock3 py-5">
    <div class="container py-lg-5 py-md-4">
        <?php
        $top_picks_posts=get_theme_mod('top_picks_checkbox',true);
        if($top_picks_posts){
            ?>
 
        <h3 class="section-title-left mb-4"> <?php echo (get_theme_mod('toppicks_heading'));?></h3>
        <div class="row top-pics">
            <div class="col-lg-4 col-md-6">
                <?php

                $toppicks1 = array(
                    'category_name' => 'top-picks1',
                    'posts_per_page' => 1,
                );

                $query = new WP_Query($toppicks1);

                if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post();
                        ?>
                        <div class="top-pic1">
                            <div class="card-body blog-details">
                                <a href="<?php the_permalink(); ?>" class="blog-desc">
                                    <?php the_title(); ?>
                                </a>
                                <div class="author align-items-center">
                                    <?php
                                    $author_id = get_the_author_meta('ID');
                                    $author_avatar = get_avatar($author_id, 64);
                                    echo $author_avatar;
                                    ?>
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php newsblog_posted_by(); ?>
                                            </a> </a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value">
                                                <?php newsblog_posted_on(); ?>
                                            </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1
                                                min</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;

                else:
                    echo 'No posts found in the "top-picks1" category.';
                endif;
                wp_reset_postdata();
                ?>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <?php

                $toppicks2 = array(
                    'category_name' => 'top-picks2',
                    'posts_per_page' => 1,
                );

                $query = new WP_Query($toppicks2);

                if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post();
                        ?>
                        <div class="top-pic2">
                            <div class="card-body blog-details">
                                <a href="<?php the_permalink(); ?>" class="blog-desc">
                                    <?php the_title(); ?>
                                </a>
                                <div class="author align-items-center">
                                    <?php
                                    $author_id = get_the_author_meta('ID');
                                    $author_avatar = get_avatar($author_id, 64);
                                    echo $author_avatar;
                                    ?>

                                    <ul class="blog-meta">
                                        <li>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php newsblog_posted_by(); ?>
                                            </a> </a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value">
                                                <?php newsblog_posted_on(); ?>
                                            </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1
                                                min</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;

                else:
                    echo 'No posts found in the "top-picks1" category.';
                endif;
                wp_reset_postdata();
                ?>
            </div>

            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                <?php

                $toppicks3 = array(
                    'category_name' => 'top-picks3',
                    'posts_per_page' => 1,
                );

                $query = new WP_Query($toppicks3);

                if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post();
                        ?>
                        <div class="top-pic3">
                            <div class="card-body blog-details">
                                <a href="<?php the_permalink(); ?>" class="blog-desc">
                                    <?php the_title(); ?>
                                </a>
                                <div class="author align-items-center">
                                    <?php
                                    $author_id = get_the_author_meta('ID');
                                    $author_avatar = get_avatar($author_id, 64);
                                    echo $author_avatar;
                                    ?>
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="author.html">
                                                <?php newsblog_posted_by(); ?>
                                            </a> </a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value">
                                                <?php newsblog_posted_on(); ?>
                                            </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1
                                                min</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;

                else:
                    echo 'No posts found in the "top-picks3" category.';
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
    <?php        }?>
</div>
</div>
<div class="w3l-homeblock2 py-5">
    <div class="container py-lg-5 py-md-4">
        <?php
        $fashionstyle_posts = get_theme_mod('fas-style-checkbox', true);

        if ($fashionstyle_posts) { ?>
            <!-- block -->
            <div class="left-right">


                <h3 class="section-title-left mb-sm-4 mb-2">
                    <?php echo (get_theme_mod('fas-style-heading', '')); ?>
                </h3>
                <a href="<?php echo get_category_link(12);?>" class="more btn btn-small mb-sm-0 mb-4">View more</a>
            </div>
            <div class="row">
                <?php

                $fashionstyle = array(
                    'category_name' => 'fashionstyle',
                    'posts_per_page' => 3,

                );

                $query = new WP_Query($fashionstyle);

                if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post();
                        ?>
                        <div class="col-lg-4 col-md-6 item">

                            <div class="card">

                                <div class="card-header p-0 position-relative">
                                    <a href="<?php the_permalink(); ?>">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="<?php echo the_post_thumbnail_url(); ?>" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="card-body blog-details">
                                    <a href="<?php the_permalink(); ?>" class="blog-desc">
                                        <?php the_title(); ?>
                                    </a>
                                    <div class="author align-items-center">
                                        <?php
                                        $author_id = get_the_author_meta('ID');
                                        $author_avatar = get_avatar($author_id, 64);
                                        echo $author_avatar;
                                        ?>
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="author.html">
                                                    <?php newsblog_posted_by(); ?>
                                                </a> </a>
                                            </li>
                                            <li class="meta-item blog-lesson">
                                                <span class="meta-value">
                                                    <?php newsblog_posted_on(); ?>
                                                </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1
                                                    min</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <?php
                    endwhile;

                else:
                    echo 'No posts found in the "top-picks3" category.';
                endif;
                wp_reset_postdata();
                ?>

            </div>
        <?php } ?>
    </div>
</div>
<div class="w3l-homeblock2 w3l-homeblock5 py-5">
    <div class="container py-lg-5 py-md-4">
    
        <?php $beauty_posts = get_theme_mod('beauty-checkbox', true);

        if ($beauty_posts) { ?>
            <!-- block -->
            <div class="left-right">

                <h3 class="section-title-left mb-sm-4 mb-2">
                    <?php echo (get_theme_mod('beauty-heading', '')); ?>
                </h3>
                <a href="<?php echo get_category_link(14);?>" class="more btn btn-small mb-sm-0 mb-4">View more</a>
            </div>
            <div class="row">
                <?php

                $beautypost = array(
                    'category_name' => 'beautypost',
                    'posts_per_page' => 2,
                );

                $query = new WP_Query($beautypost);

                if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post();
                        ?>
                        <div class="col-lg-6">



                            <div class="bg-clr-white hover-box">

                                <div class="row">
                                    <div class="col-sm-5 position-relative">
                                        <a href="<?php the_permalink(); ?>" class="image-mobile">
                                            <img class="card-img-bottom d-block radius-image-full"
                                                src="<?php echo the_post_thumbnail_url(); ?>" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="col-sm-7 card-body blog-details align-self">
                                        <a href="<?php the_permalink(); ?>" class="blog-desc">
                                            <?php the_title(); ?>
                                        </a>
                                        <div class="author align-items-center">
                                            <?php
                                            $author_id = get_the_author_meta('ID');
                                            $author_avatar = get_avatar($author_id, 64);
                                            echo $author_avatar;
                                            ?>
                                            <ul class="blog-meta">
                                                <li>
                                                    <a href="author.html">
                                                        <?php newsblog_posted_by(); ?>
                                                    </a> </a>
                                                </li>
                                                <li class="meta-item blog-lesson">
                                                    <span class="meta-value">
                                                        <?php newsblog_posted_on(); ?>
                                                    </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1
                                                        min</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                        <?php
                    endwhile;

                else:
                    echo 'No posts found in the "Beauty" category.';
                endif;
                wp_reset_postdata();
                ?>



            </div>
        <?php } ?>

    </div>
</div>
<div class="w3l-homeblock2 w3l-homeblock6 py-5">
    <div class="container-fluid px-sm-5 py-lg-5 py-md-4">
        <?php
        $trending_posts = get_theme_mod('trending-checkbox', true);

        if ($trending_posts) { ?>
            <!-- block -->
            <h3 class="section-title-left mb-4"> <?php echo (get_theme_mod('trending_title')); ?></h3>
            <div class="row">
                <div class="col-lg-6">
                    <div class="bg-clr-white hover-box">
                        <div class="row">
                            <div class="col-sm-6 position-relative">
                                <a href="<?php the_permalink(); ?>">
                                    <img class="card-img-bottom d-block radius-image-full"
                                        src="<?php echo (get_theme_mod('post_image1')); ?>" alt="Card image cap">
                                </a>
                            </div>
                            <div class="col-sm-6 card-body blog-details align-self">
                                <span class="label-blue">Sports</span>
                                <a href="<?php the_permalink(); ?>" class="blog-desc">
                                    <?php echo (get_theme_mod('heading_text1', '')); ?>
                                </a>
                                <p>
                                    <?php echo (get_theme_mod('subheading_text1', '')); ?>
                                </p>
                                <div class="author align-items-center mt-3">
                                    <?php
                                    $author_id = get_the_author_meta('ID');
                                    $author_avatar = get_avatar($author_id, 64);
                                    echo $author_avatar;
                                    ?>
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php newsblog_posted_by(); ?>
                                            </a> </a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value">
                                                <?php newsblog_posted_on(); ?>
                                            </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1
                                                min</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-4">
                    <div class="bg-clr-white hover-box">
                        <div class="row">
                            <div class="col-sm-6 position-relative">
                                <a href="<?php the_permalink(); ?>">
                                    <img class="card-img-bottom d-block radius-image-full"
                                        src="<?php echo (get_theme_mod('post_image2')); ?>" alt="Card image cap">
                                </a>
                            </div>
                            <div class="col-sm-6 card-body blog-details align-self">
                                <span class="label-blue">Fitness</span>
                                <a href="<?php the_permalink(); ?>" class="blog-desc">
                                    <?php echo (get_theme_mod('heading_text2', '')); ?>
                                </a>
                                <p>
                                    <?php echo (get_theme_mod('subheading_text2', '')); ?>
                                </p>
                                <div class="author align-items-center mt-3">
                                    <?php
                                    $author_id = get_the_author_meta('ID');
                                    $author_avatar = get_avatar($author_id, 64);
                                    echo $author_avatar;
                                    ?>

                                    <ul class="blog-meta">
                                        <li>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php newsblog_posted_by(); ?>
                                            </a> </a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value">
                                                <?php newsblog_posted_on(); ?>
                                            </span>. <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1
                                                min</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
</div>
<div class="w3l-subscribe py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="w3l-subscribe-content text-center bg-clr-white py-md-5 py-2">
            <div class="py-5">

                <?php dynamic_sidebar('custom-post1'); ?>

                <?php the_content(); ?>


            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>