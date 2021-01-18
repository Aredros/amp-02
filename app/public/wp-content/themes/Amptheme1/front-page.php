<?php
/**
 * Front Page template
 * 
 * @package TPTF
 */
get_header();
?>


<div class=""id="primary">
    <main id="main" class="site-main mt-5" role="main">
        <div class="container-fluid">
            <div class="row area-one-accueil center-text">
                    <div class="col-lg-12 col-md-12 col-sm-12"> 
                        <h1 class="white">
                        Trouvez toutes les friperies autour de toi
                        </h1>
                        <a><button class="white green-button-accueil green-color">Voir les villes</button></a>
                    </div>
            </div>
            <div class="row area-two-accueil cream-font">
                    <div class="col-lg-6 col-md-6 col-sm-12 cream-area"> 
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12"> 
                        <h3 class="black inside-titles">
                        Les Villes
                        </h3>
                            </div>
                        </div>
                        <?php get_template_part('template-parts/templates-tptf/accueil/first-six-villes'); ?> 
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 cream-area">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h3 class="black inside-titles">Chercher par adresse area</h3>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 search-bar-area">
                            <?php get_template_part('template-parts/templates-tptf/accueil/search-ville-bar'); ?> 
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 search-bar-area">   
                               <?php get_template_part('template-parts/templates-tptf/accueil/liste-ville-bar'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 cream-area">
                        <div class="row center-text">
                            <div class="col-lg-12 col-md-12 col-sm-12"> 
                                <h3 class="black inside-titles">Pourquoi la fripe?</h3>
                            </div>
                        </div>
                        <?php get_template_part('template-parts/templates-tptf/accueil/fripe-four-logos'); ?>
                    </div>
                </div>
            <div class="row area-three-accueil image-full-width image-one center-text">
                    <div class="col-lg-12 col-md-12 col-sm-12"> 
                        <h3 class="white middle-titles">LE BLOG</h3>
                        <p class="white">
                        La fripe c'est un mode de vie, et c'est le notre. Viens découvrir tous les sujets d'actualités en lien.
                        </p>
                        <a><button class="white green-button green-color">JE REGARDE</button></a>
                    </div>
                </div>
            <div class="row area-four-accueil cream-font center-text">
                    <div class="col-lg-12 col-md-12 col-sm-12"> 
                        <h3 class="black middle-titles">
                        SUIVEZ NOUS !
                        </h3>
                        <div>
                        <amp-img amp-fx="fade-in" src="<?php ABSPATH; ?>/wp-content/themes/Amptheme1/assets/img/instagram.png" class="" alt="image tptf" layout="fixed" height="100" width="100"></amp-img>
                        </div>
                        <a><button class="white green-button green-color">S'ABONNER</button></a>
                    </div>
                </div>
            <div class="row area-five-accueil image-full-width image-two center-text">
                <div class="col-lg-12 col-md-12 col-sm-12"> 
                    <h3 class="white middle-titles">
                    NEWSLETTER
                    </h3>
                    <p class="white">
                   Suivez les dernieres actualites et les nouvelles friperies tout en restant connecté !
                    </p>
                    <a><button class="white green-button green-color">S'INSCRIRE</button></a>
                </div>
            </div>
        </div>
    </main>
</div>

<style amp-custom>
    /* Add your styles here */
    <?php include "accueil-style.css"; ?>
    </style>

<?php get_footer(); ?>