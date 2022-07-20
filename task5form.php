// task 1 forms
<form action="" method="GET">
    <p>Введите ваше имя:</p>
    <input type="text" name="name" placeholder="Виталий" value="<?php if (isset($_REQUEST['name'])) echo strip_tags($_REQUEST['name']) ?>" required>
    <p>Введите ваш город:</p>
    <input type="text" name="city" placeholder="Винница" value="<?php if (isset($_REQUEST['city'])) echo strip_tags($_REQUEST['city']) ?>" required>
    <p>Введите текст:</p>
    <textarea name="textarea"> <?php if (isset($_REQUEST['textarea'])) echo $_REQUEST['textarea']?></textarea>
    <?php if (!isset($_REQUEST['name'])) : ?>
        <input type="submit" value="отправить">
    <?php endif; ?>
</form>
