<div id="main" class="row">
    <div id="feeds" class="col-sm-9">
        <?=$feeds?>
        <div class="col-sm-12" style="overflow-x: scroll">
            <?=$timeline?>
        </div>
        <div class="col-sm-12" style="overflow-x: scroll">
            <?=$standing?>
        </div>

    </div>
    <div id="widgets" class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading">Leader Board</div>
            <div class="panel-body">
                <?=$leader?>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Scoring BEAST!</h3>
            </div>
            <div class="panel-body">
                <?=$players?>
            </div>
        </div>
    </div>
</div>