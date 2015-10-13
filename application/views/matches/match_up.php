<div class="row" id="match-container  text-center">
    <div class="col-sm-6 col-md-4 team-contaner">
        <div class="thumbnail col-md-6">
            <img src="/img/icon/icon_<?=rand (1, 15) ?>.png"/>
            <div class="caption">
                <h3 class=" text-center" id="user-<?=$teams[0][0]['id']?>"><?=$teams[0][0]['first_name']?></h3>
            </div>
        </div>
        <div class="thumbnail col-md-6">
            <img src="/img/icon/icon_<?=rand (1, 15) ?>.png"/>
            <div class="caption">
                <h3 class=" text-center" id="user-<?=$teams[0][1]['id']?>"><?=$teams[0][1]['first_name']?></h3>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img style="max-width:100%;max-height:100%;" src="<?=base_url('/img/logo.png')?>">
            <div class="caption row text-center">
                <div class="col-sm-6 col-md-4">
                    <h1 class="score">3</h1>
                </div>
                <div class="col-sm-6 col-md-4">
                    <span class="">--</span>

                </div>
                <div class="col-sm-6 col-md-4">
                    <h1 class="score">3</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 team-contaner">
        <div class="thumbnail  col-md-6">
            <img src="/img/icon/icon_<?=rand (1, 15) ?>.png"/>
            <div class="caption">
                <h3 class=" text-center" id="user-<?=$teams[1][0]['id']?>"><?=$teams[1][0]['first_name']?></h3>
            </div>
        </div>
        <div class="thumbnail col-md-6">
            <img src="/img/icon/icon_<?=rand (1, 15) ?>.png"/>
            <div class="caption">
                <h3 class=" text-center" id="user-<?=$teams[1][1]['id']?>"><?=$teams[1][1]['first_name']?></h3>
            </div>
        </div>
    </div>
</div>
<pre>
<!--    --><?php /*var_dump($teams[0]); */?>
</pre>