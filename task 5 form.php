// task 1 forms
<form action="" method="GET">
    <p>Введите ваше имя:</p>
    <input type="text" name="name" placeholder="Виталий" value="<?php echo strip_tags($_REQUEST['name']) ?>">
    <p>Введите ваш город:</p>
    <input type="text" name="city" placeholder="Винница" value="<?php if (isset($_REQUEST['city'])) echo strip_tags($_REQUEST['city']) ?>">
    <p>Введите текст:</p>
    <textarea name="textarea"> <?php if (isset($_REQUEST['textarea'])) echo $_REQUEST['textarea']?></textarea>
    <?php if (!isset($_REQUEST['name'])) : ?>
        <input type="submit" value="отправить">
    <?php endif; ?>
</form>
