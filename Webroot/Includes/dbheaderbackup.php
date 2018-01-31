<div class="upperTinyMenu"> Hello world</div>
<div class="headerContainer">
    <div class="container">
        <header>
            <ul>
                <?php 
                $menus = new Menu();
                $language_url = explode('/', $_SERVER['REQUEST_URI']); 
                if (array_search($language_url[1],Config::get('languages'))){ ?>
                <li><a class="logo" href="/<?php echo $language_url[1] ?>/home/"><?= Config::get('site_name') ?></a></li>
                <?php  foreach ($menus->mainMenu() as $menu){ ?>
                
                <li><a <?php if($language_url[2] === $menu['Link'] || $_SERVER['REQUEST_URI'] === '' || $language_url[1] === ''){echo 'class="navActive"';}?> href="/<?php echo $language_url[1] ?>/<?php echo $menu['Link']?>/"><?= __($menu['Label']) ?></a></li>
              
                <?php } }else{ ?>
                    <li><a class="logo" href="/en/home/"><?= Config::get('site_name') ?></a></li>
                   <?php  foreach ($menus->mainMenu() as $menu){ ?>
                    <li><a <?php if($language_url[1] === $menu['Link'] || $_SERVER['REQUEST_URI'] === '/en/'.$menu['Link'].'/'){echo 'class="navActive"';}?> href="/en/<?php echo $menu['Link']?>/"><?= __($menu['Label']) ?></a></li>
                
                    <?php } }?>
            </ul>
            <div class="LangToggle"><?php if (!array_search($language_url[1],Config::get('languages'))) { echo 'EN &dtrif;';} else {echo strtoupper($language_url[1]).'&dtrif;'; };?></div>
            <div class="langWrapper animated fadeInDown">
                <ul class="langBtnUl">
                    <?php  foreach ($menus->languages() as $languages){ ?>
                    <li><a href="/<?php echo $languages['Link'];?>/<?php if($language_url[1] === ''){echo 'home';}else{echo $language_url[2];} ;?>/"><?php echo $languages['Label'];?></a></li>
                    <?php }?>
                </ul>
                
            </div>
        </header>
    </div>
</div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               