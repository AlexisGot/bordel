<h2>ici c'est le tchat</h2>
<div class="chatBox">
    <?php foreach(findAllMsg() as $singleMsg): ?>
        <p><span><?= $singleMsg["pseudo"]; ?></span> - <?= $singleMsg["contenu"]; ?></p>
    <?php endforeach; ?>
</div>
<form action="index.php?controller=message&action=submit" method="post">
    <textarea name="mess" maxlength="255"></textarea>
    <input type="submit" value="Poster">
</form>