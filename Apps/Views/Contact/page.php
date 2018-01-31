
<h1 id="Contact"><?= __('contactbelow') ?></h1>
<form action="" method="post" enctype="multi-part/form-data" class="formFeed">
<input type="text" placeholder="<?= __('name') ?>" name="name" class="formInputFeed">
<br>
<input type="email" placeholder="<?= __('email') ?>" name="email" class="formInputFeed">
<br>
<textarea rows="5" cols="25" name="message" placeholder="<?= __('message') ?>" class="formInputFeed"></textarea>
<br>
<input type="submit" value="<?= __('send') ?>" class="MsgBtn">
</form>