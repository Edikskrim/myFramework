<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?=$this->getTitle();?>
    <?=$this->getDescription();?>
    <?=$this->getKeywords();?>
</head>
<body>
<h1>Шаблон Default</h1>

<?=$content;?>
<?php
$logs = \R::getDatabaseAdapter()
->getDatabase()
->getLogger();

debug($logs->grep('SELECT'));
?>
</body>
</html>