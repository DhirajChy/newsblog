
                    <div class="col-lg-6">



                        <div class="bg-clr-white hover-box">
                  
                            <div class="row">
                                <div class="col-sm-5 position-relative">
                                    <a href="<?php the_permalink();?>" class="image-mobile">
                                        <img class="card-img-bottom d-block radius-image-full"
                                            src="<?php echo the_post_thumbnail_url(); ?>" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="col-sm-7 card-body blog-details align-self">
                                    <a href="<?php the_permalink();?>" class="blog-desc">
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
                                                <a href="<?php the_permalink();?>">
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
                   