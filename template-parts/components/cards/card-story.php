<?php
    $cardStoryTitle=isset($args['card-story-title']) ? $args['card-story-title'] : null ;
    $cardStoryImage=isset($args['card-story-image']) ? $args['card-story-image'] : null ;
    $cardStorySortDescription=isset($args['card-story-description']) ? $args['card-story-description'] : null ;
    $cardStoryLink=isset($args['card-story-link']) ? $args['card-story-link'] : null ;
    $cardStoryYear=isset($args['card-story-year']) ? $args['card-story-year'] : null ;
?>
<li class="timeline__list-item">
    <div class="timeline__right-content">
        <h2 class="timeline__title"><?= $cardStoryTitle;?></h2>
        <p class="timeline__description"><?= $cardStorySortDescription?>
        </p>
    </div>
    <div class="timeline__left-content">
        <h3 class="timeline__year"><?= $cardStoryYear?> </h3>
    </div>
</li>