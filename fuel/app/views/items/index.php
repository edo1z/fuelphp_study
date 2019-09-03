<ul class="nav nav-pills">
  <li class='<?php echo Arr::get($subnav, "index"); ?>'><?php echo Html::anchor('items/index', 'Index'); ?></li>
</ul>
<p>Index</p>

<ul>
  <li>
      <?= $item['name'] ?>
  </li>
  <li>
      <?= $item['price'] ?>円
  </li>
</ul>
