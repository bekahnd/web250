<?php


if(!isset($bird)) {
  redirect_to(url_for('/staff/birds/index.php'));
}
?>

<dl>
  <dt>Common Name</dt>
  <dd><input type="text" name="bird[common_name]" value="<?php echo h($bird->common_name); ?>"></dd>
</dl>

<dl>
  <dt>Habitat</dt>
  <dd><input type="text" name="bird[habitat]" value="<?php echo h($bird->habitat); ?>"></dd>
</dl>

<dl>
  <dt>Food</dt>
  <dd><input type="text" name="bird[food]" value="<?php echo h($bird->food); ?>"></dd>
</dl>

<dl>
  <dt>Nest Placement</dt>
  <dd><input type="text" name="bird[nest_placement]" value="<?php echo h($bird->nest_placement); ?>"></dd>
</dl>

<dl>
  <dt>Behavior</dt>
  <dd><input type="text" name="bird[behavior]" value="<?php echo h($bird->behavior); ?>"></dd>
</dl>

<dl>
  <dt>Backyard Tips</dt>
  <dd><input type="text" name="bird[backyard_tips]" value="<?php echo h($bird->backyard_tips); ?>"></dd>
</dl>
