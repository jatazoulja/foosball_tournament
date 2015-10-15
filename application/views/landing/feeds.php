<hr>
    <ul class="timeline">
        <?php

        foreach($results as $k => $v) :
            $even = "";
            if($k%2) continue;
            if($k%4) $even = "timeline-inverted";
            $home = array_search($v['my_team_id'], array_column($teams, 'id'));
            $away = array_search($v['opponent_id'], array_column($teams, 'id'));
            if($v['opponent_score'] > $v['my_score']) {
                $lead = $v['opponent_score'] - $v['my_score'];
                $string =  "(". $teams[$away]['name'] .") Won over " . $teams[$home]['name'] . " with " . $lead . " point/s lead!";
            } else {
                $lead = $v['my_score'] - $v['opponent_score'];
                $string =  "(". $teams[$home]['name'] .") Won over " . $teams[$away]['name'] . " with " . $lead . " point/s lead!";
            }

            ?>

        <li class="<?=$even?>">
            <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title"><?=$teams[$home]['name']?> went against <?=$teams[$away]['name']?> </h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <span class="date-played"><?=$v['date']?></span></small></p>
                </div>
                <div class="timeline-body">
                    <p><?=$string?></p>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
<!--        <li class="timeline-inverted">
            <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                </div>
                <div class="timeline-body">
                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l� , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. M� faiz elementum girarzis, nisi eros vermeio, in elementis m� pra quem � amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                    <p>Suco de cevadiss, � um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no m�, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet m� vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
                </div>
            </div>
        </li>
        <li>
            <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                </div>
                <div class="timeline-body">
                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l� , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. M� faiz elementum girarzis, nisi eros vermeio, in elementis m� pra quem � amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                </div>
            </div>
        </li>
        <li class="timeline-inverted">
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                </div>
                <div class="timeline-body">
                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l� , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. M� faiz elementum girarzis, nisi eros vermeio, in elementis m� pra quem � amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                </div>
            </div>
        </li>
        <li>
            <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                </div>
                <div class="timeline-body">
                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l� , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. M� faiz elementum girarzis, nisi eros vermeio, in elementis m� pra quem � amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                    <hr>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                </div>
                <div class="timeline-body">
                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l� , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. M� faiz elementum girarzis, nisi eros vermeio, in elementis m� pra quem � amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                </div>
            </div>
        </li>
        <li class="timeline-inverted">
            <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                </div>
                <div class="timeline-body">
                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l� , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. M� faiz elementum girarzis, nisi eros vermeio, in elementis m� pra quem � amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                </div>
            </div>
        </li>-->
    </ul>
<pre>
    <?php
   /* var_dump(array_column($teams, 'id'));
    var_dump($teams);*/
    ?>
</pre>
