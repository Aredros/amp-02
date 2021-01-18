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
    id="keywords">
    <option value="" disabled selected>Select your option</option>
    <option value="Paris">Paris</option>
    <option value="Montpellier">Montpellier</option>
    <option value="fiat">Marseille</option>
    <option value="audi">Dijon</option>
</select>
<select name="style"
    id="style">
    <option value="" disabled selected>Select your option</option>
    <option value="Paris">Paris</option>
    <option value="Montpellier">Montpellier</option>
    <option value="fiat">Marseille</option>
    <option value="audi">Dijon</option>
</select>
<input type="submit"
    value="OK">
<div submit-success>
    Success!
</div>
<div submit-error>
    Error!
</div>
</form>



<form class="sample-form"
  method="GET"
  action="/carte"
  target="_top">
  <input type="checkbox"
    id="animal1"
    name="animal1"
    value="Cats">
  <label for="animal1">I like cats</label>
  <input type="checkbox"
    id="animal2"
    name="animal2"
    value="Dogs">
  <label for="animal2"> I like dogs </label>
  <button type="submit"
    value="OK">OK</button>
  <div submit-success>
    Success!
  </div>
  <div submit-error>
    Error!
  </div>
</form>




<button id="playerbutton1" class="button" hidden on="tap:player.hide,playerbutton1.hide,playerbutton2.show">hide me</button>
<button id="playerbutton2" class="button" on="tap:player.show,playerbutton2.hide,playerbutton1.show">show me</button>    
<div id="player" hidden>some content</div>