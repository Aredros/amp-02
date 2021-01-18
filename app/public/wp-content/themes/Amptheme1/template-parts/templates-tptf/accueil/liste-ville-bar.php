<?php
/**
 * The template for displaying the bar to search for every city
 *
 * @The Place to Frip making use of Total Theme
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
<select name="keywords"
    id="keywords"
    class="bars">
    <option value="" disabled selected>Select your option</option>
    <option value="Paris">Paris</option>
    <option value="Montpellier">Montpellier</option>
    <option value="fiat">Marseille</option>
    <option value="audi">Dijon</option>
</select>
<input type="submit"
    value="OK"
    class="bars-buttons green-color">
<div submit-success>
    Success!
</div>
<div submit-error>
    Error!
</div>
</form>


