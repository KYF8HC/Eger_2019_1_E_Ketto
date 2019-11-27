<?php foreach ($data['img'] as $img): ?>
    <img src="<?=URL?>assets/img/<?=$img["location"]?>" style="width:50%">
    <p><?=$img["name"]?></p>
    <?php var_dump($img); ?>
<?php endforeach; ?>