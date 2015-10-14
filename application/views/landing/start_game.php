<form id="start-game" class="form-inline text-center" action="/">
    <h2>Let the game begin!</h2>
    <div class="form-group">
        <select name="team" class="form-control">
            <?php foreach($teams as $k => $v) : ?>
                <option value="<?=$v['id']?>"><?=$v['name'] ?></option>
            <?php endforeach?>
        </select>
    </div>
    <div class="form-group">
        <label>vs</label>
    </div>
    <div class="form-group">
        <select name="team" class="form-control">
            <?php foreach($teams as $k => $v) : ?>
                <option value="<?=$v['id']?>"><?=$v['name'] ?></option>
            <?php endforeach?>
        </select>
    </div>
    <div class="col-sm-12">
        <button type="submit" class="btn btn-default">Start Game!</button>
    </div>
</form>