<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */

echo elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz'));

echo '<img src="/mod/lunch_theme/graphics/campuslunches.png" width="125" style="padding-top: 10px"/>';

echo '<div class="mts clearfloat float-alt">';
echo '<p>Copyright &copy; 2013</p>';
echo '</div>';