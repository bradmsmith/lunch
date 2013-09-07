<div>
    <label><?php echo elgg_echo("Title"); ?></label><br />
    <?php echo elgg_view('input/text',array('name' => 'title')); ?>
</div>

<div>
    <label><?php echo elgg_echo("Image"); ?></label><br />
    <?php echo elgg_view('input/file',array('name' => 'image')); ?>	
</div>

<div>
    <label><?php echo elgg_echo("Idea (Summary)"); ?></label><br />
    <?php echo elgg_view('input/text',array('name' => 'summary')); ?>
</div>
 
<div>
    <label><?php echo elgg_echo("Description"); ?></label><br />
    <?php echo elgg_view('input/longtext',array('name' => 'description')); ?>
</div>

<div>
    <?php echo elgg_view('input/submit', array('value' => elgg_echo('save'))); ?>
</div>

