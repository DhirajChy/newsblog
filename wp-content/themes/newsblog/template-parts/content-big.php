

<div class="col-lg-4 col-md-6 item">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="<?php the_permalink();?>">
                            <img class="card-img-bottom d-block radius-image-full" src="<?php echo the_post_thumbnail_url(); ?>"
                                alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <a href="<?php the_permalink();?>" class="blog-desc"><?php the_title();?>
                        <p><?php the_content();?>
                            </p>
                        <div class="author align-items-center mt-3 mb-1">
                        <?php
                         $author_id = get_the_author_meta('ID');
                        $author_avatar = get_avatar($author_id, 64);
                         echo $author_avatar;
                                ?>
                            <ul class="blog-meta">
                                <li>
                                    <a href="<?php the_permalink();?>">   <?php newsblog_posted_by(); ?></a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value">    <?php newsblog_posted_on(); ?> </span>. <span
                                        class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>