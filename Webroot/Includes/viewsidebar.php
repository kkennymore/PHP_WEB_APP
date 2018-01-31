<h1><?= __('most_read')?>  <i class="fa fa-book"></i></h1>
<div class="k-col-12 mostRead">
    <?php
    $datas = new HomePage();
    $homepage = $datas->getList(20);
    foreach ($homepage as $side){ ?>
    <li><a href="/<?php echo urlArrayPos(1)?>/<?php echo urlArrayPos(2) ?>/<?php echo urlArrayPos(3) ?>/<?php if(urlArrayPos(3)){echo strtolower($side['Page']);} ?>/<?php echo $side['ID'];?>"> <?php echo substr(strip_tags(strtolower($side['Title'])),0,80)?></a></li>   
    
   <?php } ?>
</div>