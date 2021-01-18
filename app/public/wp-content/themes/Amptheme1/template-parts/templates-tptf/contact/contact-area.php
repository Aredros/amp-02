

<div class=""id="primary">
    <main id="main" class="site-main mt-5" role="main">
        <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12"> 
                        <h1 class="white">
                        Trouvez toutes les friperies autour de toi <?php echo the_title(); ?>
                        </h1>
                        <a><button class="white green-button-accueil">Voir les villes</button></a>
                    </div>
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
