<?php
    $arPlayer =  array();
    foreach($teams as $t) {
        foreach($t as $x) {
            $x['json'] = json_encode($x);
            $arPlayer[] = (object) $x;
        }
    }
    $team = array(

    );
?>

<div class="row  text-center" id="match-container">
    <div class="col-xs-4 col-sm-4 col-md-4 team-container">
        <div class="thumbnail col-xs-6 col-sm-6 col-md-6">
            <div class="caption">
                <h3 class=" text-center" id="user-<?=$arPlayer[0]->id?>"><?=$arPlayer[0]->first_name?></h3>
            </div>
            <img class="add-score" data-team="<?=$arPlayer[0]->on_team?>" data-player="<?=$arPlayer[0]->id?>" src="/img/icon/icon_<?=rand (1, 15) ?>.png"/>
            <div class="caption">
                <h3 class=" text-center" id="user-score-<?=$arPlayer[0]->id?>-<?=$arPlayer[0]->on_team?>" data-details='<?=$arPlayer[0]->json?>' data-score="0">0</h3>
            </div>
            <img class="minus-score" data-team="<?=$arPlayer[0]->on_team?>" data-player="<?=$arPlayer[0]->id?>" src="/img/minus.png"/>

        </div>
        <div class="thumbnail col-xs-6 col-sm-6 col-md-6">
            <div class="caption">
                <h3 class=" text-center" id="user-<?=$arPlayer[1]->id?>"><?=$arPlayer[1]->first_name?></h3>
            </div>
            <img class="add-score" data-team="<?=$arPlayer[1]->on_team?>" data-player="<?=$arPlayer[1]->id?>" src="/img/icon/icon_<?=rand (1, 15) ?>.png"/>
            <div class="caption">
                <h3 class=" text-center" id="user-score-<?=$arPlayer[1]->id?>-<?=$arPlayer[1]->on_team?>" data-details='<?=$arPlayer[1]->json?>' data-score="0">0</h3>
            </div>
            <img class="minus-score" data-team="<?=$arPlayer[1]->on_team?>" data-player="<?=$arPlayer[1]->id?>" src="/img/minus.png"/>

        </div>
    </div>
    <div class="col-xs-4 col-sm-4  col-md-4">
        <div class="thumbnail">
            <img style="max-width:100%;max-height:100%;" src="<?=base_url('/img/logo.png')?>">
            <div class="caption row text-center">
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <h1 id="team-<?=$arPlayer[0]->on_team?>" data-team='<?=$arPlayer[0]->json?>' data-score="0" class="score">0</h1>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <span class="">--</span>

                </div>
                <div class="col-xs-4 col-sm-4  col-md-4">
                    <h1 id="team-<?=$arPlayer[2]->on_team?>" data-team='<?=$arPlayer[2]->json?>' data-score="0" class="score">0</h1>
                </div>
            </div>
            <div class="caption" id="game-setter">
                <div class="btn-group  dropup">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="end-match" href="#">End Game</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a class="reset-match" href="#">Reset Game</a></li>
                        <li><a href="#">Default Game</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-4 col-sm-4  col-md-4 team-container">
        <div class="thumbnail col-xs-6 col-sm-6 col-md-6">
            <div class="caption">
                <h3 class=" text-center" id="user-<?=$arPlayer[2]->id?>"><?=$arPlayer[2]->first_name?></h3>
            </div>
            <img class="add-score" data-team="<?=$arPlayer[2]->on_team?>" data-player="<?=$arPlayer[2]->id?>" src="/img/icon/icon_<?=rand (1, 15) ?>.png"/>
            <div class="caption">
                <h3 class=" text-center" id="user-score-<?=$arPlayer[2]->id?>-<?=$arPlayer[2]->on_team?>" data-details='<?=$arPlayer[2]->json?>' data-score="0">0</h3>
            </div>
            <img class="minus-score" data-team="<?=$arPlayer[2]->on_team?>" data-player="<?=$arPlayer[2]->id?>" src="/img/minus.png"/>

        </div>
        <div class="thumbnail col-xs-6 col-sm-6 col-md-6">
            <div class="caption">
                <h3 class=" text-center" id="user-<?=$arPlayer[3]->id?>"><?=$arPlayer[3]->first_name?></h3>
            </div>
            <img class="add-score" data-team="<?=$arPlayer[3]->on_team?>" data-player="<?=$arPlayer[3]->id?>" src="/img/icon/icon_<?=rand (1, 15) ?>.png"/>
            <div class="caption">
                <h3 class=" text-center" id="user-score-<?=$arPlayer[3]->id?>-<?=$arPlayer[3]->on_team?>" data-details='<?=$arPlayer[3]->json?>' data-score="0">0</h3>
            </div>
            <img class="minus-score" data-team="<?=$arPlayer[3]->on_team?>" data-player="<?=$arPlayer[3]->id?>" src="/img/minus.png"/>

        </div>
    </div>
</div>
<pre>
    <?php
    var_dump($arPlayer);

    ?>
</pre>