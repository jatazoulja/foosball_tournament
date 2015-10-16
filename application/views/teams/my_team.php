<div class="col-sm-12 white-bg">
    <?php if(sizeof($player)!=2) { ?>
        <h3>Not enough data to show.</h3>
    <?php } ?>
    <?php foreach($player as $k => $v) : ?>
        <div class="col-sm-6">
            <div class="col-sm-3">
                <img class="add-score" src="/img/icon/icon_<?=rand (1, 15) ?>.png"/>
            </div>
            <div class="col-sm-9">
                <h3><?=ucfirst ($v['first_name'])?></h3>
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Panel heading</div>

                    <!-- Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Game Played</th>
                                <th>Career High</th>
                                <th>Average</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Stats</th>
                                <td><?=$v['tgame']?></td>
                                <td><?=$v['career']?></td>
                                <td><?=$v['ave']?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php endforeach;?>
</div>