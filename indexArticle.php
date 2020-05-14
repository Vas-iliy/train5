<?php

include_once ('functions.php');
 $articles = getArticles();

 ?>

<div class="article">
    <? foreach ($articles as $id =>$article):?>
        <div class="article">
            <h2><?=$article['title']?></h2>
            <a href="article.php?id=<?=$id?>">reed more</a>
        </div>
    <?endforeach;?>
</div>
