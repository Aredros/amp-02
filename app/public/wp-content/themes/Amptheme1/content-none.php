<?php /**
 * 
 * The template part for displaying a message that posts cannot be found
 * 
 * @package TPTF
 */
?>

<section class="no-result not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'TPTF' ); ?></h1>
    </header>
    <div class="page-content">
        <?php if(is_home() && current_user_can('publish_posts')  ): ?>
            <p>
                <?php
                    printf(
                        wp_kses(
                            __('Ready to publish your first post? <a href="%s"> Get started here </a>', 'TPTF'),
                            [
                                'a' => [
                                    'href' => []
                                ]
                            ]
                                ),
                                esc_url(admin_url('post-new.php'))
                    )
                ?>
            </p>
        <?php elseif(is_search()): ?> 
            <p><?php esc_html_e('Sorry but nothing matched your Search item. Please try again with some different keywords', 'TPTF'); ?></p>
        <?php   get_search_form();
        else: ?>
            <p><?php esc_html_e('It seems that we can not find what you are looking.', 'TPTF'); ?></p>
        <?php endif;
 ?>
    </div>
</section>