


 
        <div class="row blog-head-row">
            <div class="col-12 image-header-blog center">
                <h1>BLOG THE<br> PLACE TO FRIP</h1>
            </div>
        </div>
        <div class="row blog-categories-row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="row">
                    <div class="col-3">
                        <div class="center cat-button">
                        <a><button>FRIPE OF<br> THE WEEK</button></a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="center cat-button">
                        <a><button>THE PLACE<br> TO FRIPE</button></a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="center cat-button">
                        <a><button>MODE</button></a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="center cat-button">
                        <a><button>AUTRES</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                
            </div>
        </div>
            <div class="row">         
						<?php
                        while ( have_posts() ) : the_post();?>
                            
								<div class="col-lg-4 col-md-6 col-sm-12 center">
                                    <a href="<?php esc_url(the_permalink()); ?>" style="text-decoration: none;">
                                    <div class="blog-article-card pt-2">
                                        <div class="blog-article-card-img"><?php the_post_thumbnail(array(300, 500)); ?></div>
                                        <h4><?php the_title(); ?></h4>
                                        <h5><?php the_author(); ?></h5>
                                        <?php the_excerpt(); ?>
                                    </div>
                                    </a>
                                </div>
								<?php endwhile; ?>  
            </div>

<style amp-custom>
    /* Add your styles here */
    <?php
    include 'blog-style.css'; ?>
    </style>




