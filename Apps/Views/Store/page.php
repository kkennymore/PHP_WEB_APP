
<div class="k-col-12">
    <?php $datas = new HomePage;
    foreach ($datas->getList(20) as $homepage) {?>
        <div class="k-col-2 contentWrapper contentWrapperNotRead">
            <h1 class="headerWrapper">
                <?php if(urlArrayPos(1) === ''){ ?>
                <a href="/en/home/view/<?php echo $homepage['ID'];?>"><?php echo substr(strip_tags(strtolower($homepage['Title'])),0,30); ?></a>     
               <?php }else{?>
                <a href="/<?php echo urlArrayPos(1) ?>/<?php echo urlArrayPos(2) ?>/view/<?php echo $homepage['ID'];?>"><?php echo substr(strip_tags(strtolower($homepage['Title'])),0,30); ?></a> 
               <?php }?>
            </h1>
            
            <div class="k-col-12 ContWrap"><?php echo substr(strip_tags($homepage['Content']),0,100); ?></div>
            <div class="k-col-12 like_comment_share_count">
                <div class="k-col-3 innerDivs">Views</div>
                <div class="k-col-3 innerDivs">Likes</div>
                <div class="k-col-3 innerDivs">Share</div>
                <div class="k-col-3 innerDivs">Com..s</div>
            </div>
        </div>
    <?php } ?>
</div>