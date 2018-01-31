<div class="k-col-12 upperTinyMenu">
    <div class="container">
        <div class="k-col-12">
            <div class="k-col-4">
                <input type="search" placeholder="<?= __('searchsite')?>" title="<?= __('searchsite')?>" onchange="searchInput(this.value)" id="searchImput" class="searchInput">
            </div>
            <div class="k-col-4 socialIcons">
                <i class="fa fa-facebook fa-fw"></i>
                <i class="fa fa-youtube fa-fw"></i>
                <i class="fa fa-linkedin fa-fw"></i>
                <i class="fa fa-google-plus fa-fw"></i>
                <i class="fa fa-yahoo fa-fw"></i>
                <i class="fa fa-instagram fa-fw"></i>
                <i class="fa fa-wechat fa-fw"></i>
                <i class="fa fa-weibo fa-fw"></i>
            </div>
            <div class="k-col-2 siteMap">
                <a href="" title="<?= __('sitemap') ?>"><i class="fa fa-sitemap"></i></a>
            </div>
            <div class="k-col-2 timeDisplay">
                <?php echo date('h:m:s a', time());?>
            </div>
        </div>
    </div>
        
</div>
<div class="headerContainer">
    <div class="container navbarContainerWrapper">
        <header>
            <ul>
                <?php 
                $menus = new Menu();
                if (array_search(urlArrayPos(1),Config::get('languages'))){ ?>
                <li><a class="logo" href="/<?php echo urlArrayPos(1) ?>/home/"><?= Config::get('site_name') ?></a></li>
                <?php  foreach ($menus->mainMenu() as $menu){ ?>
                
                <li><a <?php if(in_array($menu['Link'], urlArray())){echo 'class="navActive"';}?> title="<?= __($menu['Label']) ?>" href="/<?php echo urlArrayPos(1) ?>/<?php echo $menu['Link']?>/"><?= __($menu['Label']) ?></a></li>
              
                <?php } }else{ ?>
                    <li><a class="logo" href="/en/home/"><?= Config::get('site_name') ?></a></li>
                   <?php  foreach ($menus->mainMenu() as $menu){ ?>
                    <li><a <?php if(in_array($menu['Link'], urlArray())){echo 'class="navActive"';}?> title="<?= __($menu['Label']) ?>" href="/en/<?php echo $menu['Link']?>/"><?= __($menu['Label']) ?></a></li>
                
                    <?php } }?>
             <div class="loginRegSection">
                 <div class="k-col-12">
                     <div class="k-col-4 hideShowImage">
                         <div id="hideShowBtn" title="<?= __('showimage') ?>"> <i class="fa fa-image"></i></div>
                     </div>
                     <div class="k-col-4 login">
                         <a <?php if(in_array('login', urlArray()) && urlArrayPos(3) !== ''){echo 'class="userLogRegNavActive"';}?> title="<?= __('login') ?>" href="/<?php echo urlArrayPos(1);?>/users/login/"><?= __('login') ?>  <i class="fa fa-sign-in"></i></a>
                     </div>
                     <div class="k-col-4 register">
                         <a <?php if(in_array('register', urlArray()) && urlArrayPos(3) !== ''){echo 'class="userLogRegNavActive"';}?> title="<?= __('register') ?>" href="/<?php echo urlArrayPos(1);?>/users/register/"><?= __('register') ?>  <i class="fa fa-desktop"></i></a>
                     </div>
                 </div>
            </div>
            </ul>
            
            <div class="LangToggle" title="<?= __('languages') ?>"><?php if (!array_search(urlArrayPos(1),Config::get('languages'))) { echo 'EN &dtrif;';} else {echo strtoupper(urlArrayPos(1)).'&dtrif;'; };?></div>
            <div class="langWrapper animated fadeInDown">
                <ul class="langBtnUl">
                    <?php  foreach ($menus->languages() as $languages){ ?>
                    <li><a href="/<?php echo $languages['Link'];?><?php if(urlArrayPos(2)){ echo '/'.urlArrayPos(2);}?>/<?php if(urlArrayPos(5)){ echo urlArrayPos(3).'/'. urlArrayPos(4).'/'. urlArrayPos(5);}elseif(urlArrayPos(3)){echo urlArrayPos(3).'/'. urlArrayPos(4);}elseif (urlArrayPos(1) === '') { echo 'home/'; }else{ echo '';}?>"><?php echo $languages['Label'];?></a></li> 
                    <?php }?>
                </ul>
                
            </div>
        </header>
    </div>
</div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               