<?php

/**
 * The template for displaying the estimate rewards result.
 *
 * This can be overridden by copying it to yourtheme/cardanopress/ispo/part/estimate-result.php.
 *
 * @package ThemePlate
 * @since   0.1.0
 */

?>

<h3>Rewards</h3>

<input x-bind:value="getRewards()" type="text" class="form-control" readonly disabled>
