<div class="k-col-12 contentwrap">
    <?php $datas = new NewsPage;
    foreach ($datas->getList(ucfirst(urlArrayPos(3)), 20) as $homepage) {?>
        <div class="k-col-2 contentWrapper">
            <h1 class="headerWrapper">
                <?php if(urlArrayPos(1) === ''){ ?>
                <a href="/en/home/view/<?php echo urlArrayPos(3) ?>/<?php echo $homepage['ID'];?>"><?php echo substr(strip_tags(strtolower($homepage['Title'])),0,30); ?></a>     
               <?php }else{?>
                <a href="/<?php echo urlArrayPos(1) ?>/<?php echo urlArrayPos(2) ?>/view/<?php echo urlArrayPos(3) ?>/<?php echo $homepage['ID'];?>"><?php echo substr(strip_tags(strtolower($homepage['Title'])),0,30); ?></a> 
               <?php }?>
            </h1>
            <div class="k-col-12 postImage">
                <?php if(urlArrayPos(1) === ''){ ?>
                <a href="/en/home/view/<?php echo urlArrayPos(3) ?>/<?php echo $homepage['ID'];?>"><img src="/Webroot/Img/Posted/<?php echo $homepage['Picture'];?>" alt="<?php echo $homepage['Picture'];?>"/></a>
                <?php }else{?>
                <a href="/<?php echo urlArrayPos(1) ?>/<?php echo urlArrayPos(2) ?>/view/<?php echo urlArrayPos(3) ?>/<?php echo $homepage['ID'];?>"><img src="/Webroot/Img/Posted/<?php echo $homepage['Picture'];?>" alt="<?php echo $homepage['Picture'];?>"/></a>
                <?php }?>
            </div>
            <div class="k-col-12 ContWrap"><?php echo substr(strip_tags($homepage['Content']),0,100); ?></div>
            <div class="k-col-12 like_comment_share_count">
                <div class="k-col-4 innerDivs"><i class="fa fa-thumbs-up"></i></div>
                <div class="k-col-4 innerDivs"><i class="fa fa-share"></i></div>
                <div class="k-col-4 innerDivs"><i class="fa fa-comment"></i></div>
            </div>
        </div>
    <?php } ?>
</div>