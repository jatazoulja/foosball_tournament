    <!-- Default panel contents -->
    <table class="table" id="brackets">
        <thead>
        <tr>
            <th>#</th>
            <?php foreach($teams as $k => $v) : ?>
                <th><?=$v['name'] ?></th>
            <?php endforeach?>
        </tr>
        </thead>
        <tbody>
        <?php foreach($teams as $k => $v) : ?>
            <tr>
                <th><?=$v['id'] . ' ' .$v['name'] ?> </th>
                <?php
                foreach($teams as $x) :
                    $part = ($v['id']==$x['id']) ? 'alert alert-danger' : 'warning start-match';
                    $name = ($v['id']==$x['id']) ? '' : $x['name'];
                    $score = "[xx]";
                    $vs = json_encode(
                        array($v['id'], $x['id'])
                    );

                    $in = array_search($v['id'], array_column($results, 'my_team_id'));
                    $out = array_search($x['id'], array_column($results, 'my_team_id'));
                    if($v['id']!=$x['id']) {
                        if ($in != false ) {
                            if($results[$in]['opponent_id'] == $x['id']) {
                                $score =  "( " . $results[$in]['my_score'] . "-" . $results[$in]['opponent_score'] . " )";
                                $part .= "success";
                            }
                            // $score = "default";
                        }

                        if($out != false) {
                            if($results[$out]['opponent_id'] == $v['id']) {
                                $score =  "( " . $results[$out]['opponent_score'] . "-" . $results[$out]['my_score']  . " )";
                                $part .= "success";
                            }
                        }
                    } else {
                        $score = "";
                    }
                    ?>

                    <td data-vs='<?=$vs ?>' id="team-<?=$v['id']?>-<?=$x['id']?>" class="<?=$part?>"><?=$score?></td>
                <?php endforeach;?>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>

<pre>
    <?php
        //var_dump($results);
    ?>
</pre>
