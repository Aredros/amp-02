<?php
/**
 * The template for the search bar of the accueil
 *
 * @The Place to Frip AMP theme
 * @version 1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>
                                <form class="sample-form"
                                    method="GET"
                                    action="/carte"
                                    target="_top">
                                    <input type="search"
                                        class="bars"
                                        placeholder="Search..."
                                        name="keywords">
                                    <input type="submit"
                                        value="OK"
                                        class="bars-buttons green-color">
                                </form> 