<div class="row  text-center" id="match-container">
    <div class="col-xs-4 col-sm-4 col-md-4 team-contaner">
        <div class="thumbnail col-xs-6 col-sm-6 col-md-6">
            <div class="caption">
                <h3 class=" text-center" id="user-<?=$teams[0][0]['id']?>"><?=$teams[0][0]['first_name']?></h3>
            </div>
            <img class="add-score" data-team="<?=$teams[0][0]['on_team']?>" data-player="<?=$teams[0][0]['id']?>" src="/img/icon/icon_<?=rand (1, 15) ?>.png"/>
            <div class="caption">
                <h3 class=" text-center" id="user-score-<?=$teams[0][0]['id']?>-<?=$teams[0][0]["on_team"]?>" data-score="0">0</h3>
            </div>
        </div>
        <div class="thumbnail col-xs-6 col-sm-6 col-md-6">
            <div class="caption">
                <h3 class=" text-center" id="user-<?=$teams[0][1]['id']?>"><?=$teams[0][1]['first_name']?></h3>
            </div>
            <img class="add-score" data-team="<?=$teams[0][1]['on_team']?>" data-player="<?=$teams[0][1]['id']?>" src="/img/icon/icon_<?=rand (1, 15) ?>.png"/>
            <div class="caption">
                <h3 class=" text-center" id="user-score-<?=$teams[0][1]['id']?>-<?=$teams[0][1]["on_team"]?>" data-score="0">0</h3>
            </div>
        </div>
    </div>
    <div class="col-xs-4 col-sm-4  col-md-4">
        <div class="thumbnail">
            <img style="max-width:100%;max-height:100%;" src="<?=base_url('/img/logo.png')?>">
            <div class="caption row text-center">
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <h1 id="team-<?=$teams[0][0]["on_team"]?>" data-score="0" class="score">0</h1>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <span class="">--</span>

                </div>
                <div class="col-xs-4 col-sm-4  col-md-4">
                    <h1 id="team-<?=$teams[1][0]["on_team"]?>" data-score="0" class="score">0</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-4 col-sm-4  col-md-4 team-contaner">
        <div class="thumbnail col-xs-6 col-sm-6 col-md-6">
            <div class="caption">
                <h3 class=" text-center" id="user-<?=$teams[1][0]['id']?>"><?=$teams[1][0]['first_name']?></h3>
            </div>
            <img class="add-score" data-team="<?=$teams[1][0]['on_team']?>" data-player="<?=$teams[1][0]['id']?>" src="/img/icon/icon_<?=rand (1, 15) ?>.png"/>
            <div class="caption">
                <h3 class=" text-center" id="user-score-<?=$teams[1][0]['id']?>-<?=$teams[1][0]["on_team"]?>" data-score="0">0</h3>
            </div>
        </div>
        <div class="thumbnail col-xs-6 col-sm-6 col-md-6">
            <div class="caption">
                <h3 class=" text-center" id="user-<?=$teams[1][1]['id']?>"><?=$teams[1][1]['first_name']?></h3>
            </div>
            <img class="add-score" data-team="<?=$teams[1][1]['on_team']?>" data-player="<?=$teams[1][1]['id']?>" src="/img/icon/icon_<?=rand (1, 15) ?>.png"/>
            <div class="caption">
                <h3 class=" text-center" id="user-score-<?=$teams[1][1]['id']?>-<?=$teams[1][0]["on_team"]?>" data-score="0">0</h3>
            </div>
        </div>
    </div>
</div>
<pre>

</pre>