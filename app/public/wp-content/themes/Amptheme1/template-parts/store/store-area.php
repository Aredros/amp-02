


<div class=""id="primary">
    <main id="main" class="site-main mt-5" role="main">
        <div class="container-fluid">
        <div class="row blog-head-row">
            <div class="col-12">
                <h1>BLOG THE<br> PLACE TO FRIP</h1>
            </div>
        </div>
        <div class="row blog-categories-row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="row">
                    <div class="col-3">
                        <a><button>FRIPE OF THE WEEK</button></a>
                    </div>
                    <div class="col-3">
                        <a><button>THE PLACE TO FRIPE</button></a>
                    </div>
                    <div class="col-3">
                        <a><button>MODE</button></a>
                    </div>
                    <div class="col-3">
                        <a><button>AUTRES</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                
            </div>
        </div>
            <div class="row">         
						<?php
                        while ( have_posts() ) : the_post();?>
                        
								<div class="col-lg-4 col-md-6 col-sm-12 shadow store-archive-contain">
                                <div class="store-archive-thumbnail-image"><?php the_post_thumbnail(); ?></div>
                                <div><h4 class="store-archive-title"><?php the_title(); ?></h4></div>
                                <div><?php the_author(); ?></div>
                                <div><?php the_excerpt(); ?></div>
                                <p>whyy</p>
								</div>
								<?php endwhile; ?>  
            </div>
        </div>
    </main>
</div>

<style amp-custom>
    /* Add your styles here */
    <?php
    $title = get_the_title();
    include $title .'-style.css'; ?>
    </style>


