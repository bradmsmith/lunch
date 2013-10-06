<a href="/forgotpassword" style="float: right; width: 40px; margin-left: 15px;">Forgot Pass?</a>
<?php echo elgg_view('input/text', array('name' => 'username', 'class' => 'elgg-autofocus', 'placeholder' => elgg_echo('loginusername'), 'size' => '15')); ?>
<?php echo elgg_view('input/password', array('name' => 'password', 'placeholder' => elgg_echo('password'), 'size' => '15')); ?>
<?php echo elgg_view('input/submit', array('value' => elgg_echo('login'), 'id' => 'signup_button')); ?>
<?php echo elgg_view('input/hidden', array('name' => 'persistent', 'value' => 'true')); ?>


