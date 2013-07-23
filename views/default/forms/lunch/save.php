<div>
    <label><?php echo elgg_echo("title"); ?></label><br />
    <?php echo elgg_view('input/text',array('name' => 'title')); ?>
</div>

<div>
	<label><?php echo elgg_echo("Date"); ?></label>
	<?php echo elgg_view('input/date', array('name' => 'date')); ?>
</div>
 
<div>
    <label><?php echo elgg_echo("body"); ?></label><br />
    <?php echo elgg_view('input/longtext',array('name' => 'body')); ?>
</div>
 
<div>
    <label><?php echo elgg_echo("tags"); ?></label><br />
    <?php echo elgg_view('input/tags',array('name' => 'tags')); ?>
</div>

<?php
	// Hidden view
	echo elgg_view('input/hidden', array('name' => 'container_guid', 'value' => elgg_get_page_owner_guid()));
?>
 
<div>
    <?php echo elgg_view('input/submit', array('value' => elgg_echo('save'))); ?>
</div>

