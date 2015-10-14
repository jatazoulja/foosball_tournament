<div class="list-group">
    <?php if(sizeof($player_leader)==0) { ?>
        <a href="#" class="list-group-item"> No games has been played </a>
    <?php } else {?>
        <?php foreach($player_leader as $k) : ?>
            <a href="#" class="list-group-item">
                <?=$k['first_name']?> ( <strong><?=$k['total']?></strong>  with <strong><?=round($k['ave'],  2)?></strong>/game )
            </a>
        <?php endforeach; ?>
    <?php } ?>
</div>

