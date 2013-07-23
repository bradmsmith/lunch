<div>
    <label><?php echo elgg_echo("title"); ?></label><br />
    <?php echo elgg_view('input/text',array('name' => 'title')); ?>
</div>

<div>
	<label><?php echo elgg_echo("Date"); ?></label>
	<?php echo elgg_view('input/date', array('name' => 'date')); ?>
</div>
 
<div>
	<label><?php echo elgg_echo("Name of speaker(s)"); ?></label>
	<?php echo elgg_view('input/text', array('name' => 'speaker')); ?>
</div>

<div>
	<label><?php echo elgg_echo("Number of attendees expected"); ?></label>
	<?php echo elgg_view('input/text', array('name' => 'attendees')); ?>
</div>

<div>
    <label><?php echo elgg_echo("Description"); ?></label><br />
    <?php echo elgg_view('input/longtext',array('name' => 'body')); ?>
</div>
 
<div>
    <label><?php echo elgg_echo("Topics"); ?></label><br />
    <?php echo elgg_view('input/text',array('name' => 'topic')); ?>
</div>

<?php
	// Hidden view
	echo elgg_view('input/hidden', array('name' => 'container_guid', 'value' => elgg_get_page_owner_guid()));
?>
 
<div>
    <?php echo elgg_view('input/submit', array('value' => elgg_echo('save'))); ?>
</div>

