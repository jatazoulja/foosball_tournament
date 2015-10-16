<div class="list-group">
    <?php if(sizeof($team_leader)==0) { ?>
    <a href="#" class="list-group-item"> No games has been played </a>
    <?php } else {?>
        <?php foreach($team_leader as $k) : ?>
        <a href="/team/id/<?=$k['my_team_id']?>" class="list-group-item">
            <?=$k['name']?> ( <strong><?=$k['win']?> - <?=$k['loss']?></strong> )
        </a>
        <?php endforeach; ?>
    <?php } ?>
</div>

