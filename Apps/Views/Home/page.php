<div class="k-col-12">
    <div class="sliderWrapper">
        <?php fileIncludes('PHP', 'SLIDER')?>
    </div>
    <?php $datas = new HomePage();
        foreach ($datas->getList(1) as $homepage) {?>
        <div class="k-col-4 contentWrapper">
            <h1 class="headerWrapperSlide">
                <?php if(urlArrayPos(1) === ''){ ?>
                <a href="/en/home/view/<?php echo $homepage['ID'];?>"><?php echo substr(strip_tags(strtolower($homepage['Title'])),0,30); ?></a>     
               <?php }else{?>
                <a href="/<?php echo urlArrayPos(1) ?>/<?php echo urlArrayPos(2) ?>/view/<?php echo $homepage['ID'];?>"><?php echo substr(strip_tags(strtolower($homepage['Title'])),0,30); ?></a> 
               <?php }?>
            </h1>
            <div class="k-col-12 postImage">
                <?php if(urlArrayPos(1) === ''){ ?>
                <a href="/en/home/view/<?php echo $homepage['ID'];?>"><img src="/Webroot/Img/Posted/<?php echo $homepage['Picture'];?>" alt="<?php echo $homepage['Picture'];?>"/></a>
                <?php }else{?>
                <a href="/<?php echo urlArrayPos(1) ?>/<?php echo urlArrayPos(2) ?>/view/<?php echo $homepage['ID'];?>"><img src="/Webroot/Img/Posted/<?php echo $homepage['Picture'];?>" alt="<?php echo $homepage['Picture'];?>"/></a>
                <?php }?>
            </div>
            <div class="k-col-12 ContWrap"><?php echo substr(strip_tags(ucfirst($homepage['Content'])),0,100); ?></div>
            <!--
            <div class="k-col-12 like_comment_share_count">
                <div class="k-col-4 innerDivs"><i class="fa fa-thumbs-up"></i></div>
                <div class="k-col-4 innerDivs"><i class="fa fa-share"></i></div>
                <div class="k-col-4 innerDivs"><i class="fa fa-comment"></i></div>
            </div>
            -->
        </div>
    <?php } ?>
</div>
<div class="k-col-12">
    <?php $datasP = new HomePage();
        foreach ($datasP->getList(10) as $homepage) {?>
        <div class="k-col-3 contentWrapper">
            <h1 class="headerWrapper">
                <?php if(urlArrayPos(1) === ''){ ?>
                <a href="/en/home/view/<?php echo $homepage['ID'];?>"><?php echo substr(strip_tags(strtolower($homepage['Title'])),0,30); ?></a>     
               <?php }else{?>
                <a href="/<?php echo urlArrayPos(1) ?>/<?php echo urlArrayPos(2) ?>/view/<?php echo $homepage['ID'];?>"><?php echo substr(strip_tags(strtolower($homepage['Title'])),0,30); ?></a> 
               <?php }?>
            </h1>
            <div class="k-col-12 postImage">
                <?php if(urlArrayPos(1) === ''){ ?>
                <a href="/en/home/view/<?php echo $homepage['ID'];?>"><img src="/Webroot/Img/Posted/<?php echo $homepage['Picture'];?>" alt="<?php echo $homepage['Picture'];?>"/></a>
                <?php }else{?>
                <a href="/<?php echo urlArrayPos(1) ?>/<?php echo urlArrayPos(2) ?>/view/<?php echo $homepage['ID'];?>"><img src="/Webroot/Img/Posted/<?php echo $homepage['Picture'];?>" alt="<?php echo $homepage['Picture'];?>"/></a>
                <?php }?>
            </div>
            <div class="k-col-12 ContWrap"><?php echo substr(strip_tags(ucfirst($homepage['Content'])),0,100); ?></div>
            
        </div>
    <?php } ?>
</div>