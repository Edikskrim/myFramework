<h1>"Hello World"</h1>
<p><?=$name?></p>
<p><?=$age?></p>
<p><?= debug($names)?></p>
<?
foreach ($posts as $post){
    echo "<h2>".$post->title."</h2>";
}
?>
