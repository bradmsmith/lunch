<div>
    <label><?php echo elgg_echo("Title"); ?></label><br />
    <?php echo elgg_view('input/text',array('name' => 'title')); ?>
</div>
 
<div>
    <label><?php echo elgg_echo("Description"); ?></label><br />
    <?php echo elgg_view('input/longtext',array('name' => 'body')); ?>
</div>
 
<div>
    <label><?php echo elgg_echo("Tags"); ?></label><br />
    <?php echo elgg_view('input/tag',array('name' => 'tag')); ?>
</div>

<div>
    <?php echo elgg_view('input/submit', array('value' => elgg_echo('save'))); ?>
</div>

