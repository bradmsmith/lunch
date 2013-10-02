<?php echo elgg_view('input/text', array('name' => 'username', 'class' => 'elgg-autofocus', 'placeholder' => elgg_echo('loginusername'))); ?>
<?php echo elgg_view('input/password', array('name' => 'password', 'placeholder' => elgg_echo('password'))); ?>
<?php echo elgg_view('input/submit', array('value' => elgg_echo('login'), 'id' => 'signup_button')); ?>
<?php echo elgg_view('input/hidden', array('name' => 'persistent', 'value' => 'true')); ?>
<br/><a href="/forgotpassword" style="float: right; padding-right: 70px;">Forgot password?</a>