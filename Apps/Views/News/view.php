<div class="k-col-12">
    <?php
    $datas = new HomePage();
    $datasNews = new NewsPage();
    if(urlArrayPos(5)){
      $homepage = $datasNews->getByAlias(urlArrayPos(5)); 
    } else {
       $homepage = $datas->getByAlias(urlArrayPos(4)); 
       }
    
    ?>
    <div class="k-col-9 contentWrapperView">
        <div class="k-col-12 author_time_date_wrap">
            <div class="k-col-6 author">Posted By: <?php echo $homepage['Author']; ?>  <i class="fa fa-male"></i></div>
            <div class="k-col-6 timesdate">Posted On: <?php echo date('d M Y ',$homepage['Timestamp']); ?><i class="fa fa-clock-o"></i></div>
        </div>
        <h1 class="k-col-12 headerH1"><?php echo $homepage['Title']; ?></h1>
        <div class="k-col-12 postImageView postImage" ><img src="/Webroot/Img/Posted/<?php echo $homepage['Picture'];?>" alt="<?php echo $homepage['Picture'];?>"/></div>
        <div class="k-col-12 ContWrapFull"><?php echo $homepage['Content']; ?></div>
         <div class="k-col-12 like_comment_share_count">
                <div class="k-col-4 innerDivs"><i class="fa fa-thumbs-up"></i></div>
                <div class="k-col-4 innerDivs"><i class="fa fa-share"></i></div>
                <div class="k-col-4 innerDivs"><i class="fa fa-comment"></i></div>
        </div>
    </div>
    <div class="k-col-3 viewSideBar">
         <?php fileIncludes('PHP', 'VIEWSIDEBAR'); ?>
    </div>
</div>