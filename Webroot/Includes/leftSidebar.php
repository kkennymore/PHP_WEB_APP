<?php
$subMenuObj = new Menu();
?>
<div id="leftSideBarButton" class="animated fadeOutLeft"><i class="fa fa-navicon"></i></div>
<div class="leftSideBar animated fadeInLeft">
    <div class="k-col-12 sideBarMenuHeader">
        <div class="k-col-12 subMenu"><?= __('submenu') ?></div>
    </div>
    <div class="subMenuWrapper">
           <ul>
            <?php
            if (urlArrayPos(2)) {
              foreach ($subMenuObj->subMenu(urlArrayPos(2)) as $submenu) {?>
               <li class="subMenuListLeft"><a <?php if (in_array($submenu['Link'], urlArray())) { echo 'class="subNavActive"'; }?> href="/<?php echo urlArrayPos(1)?>/news/<?php echo $submenu['Link'] ?>/"><?= __($submenu['Label']) ?> </a></li> 
         <?php } }?>
          </ul>
    </div>
</div>                                                                                                                                                                                                                                                                                                       