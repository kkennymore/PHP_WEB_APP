<div class="k-col-12 contentViewPage">
    <?php
    $datas = new HomePage();
    $homepage = $datas->getByAlias(urlArrayPos(4));
    ?>
    <div class="k-col-9 contentWrapper">
        <div class="k-col-12 author_time_date_wrap">
            <div class="k-col-6 author">Posted By: <?php echo $homepage['Author']; ?></div>
            <div class="k-col-6 timesdate">Posted On: <?php echo date('d M Y ',$homepage['Timestamp']); ?></div>
        </div>
        <h1 class="k-col-12 headerH1"><?php echo $homepage['Title']; ?></h1>
        <div class="k-col-12 postImageView"><img src="/Webroot/Img/Posted/<?php echo $homepage['Picture'];?>" alt="<?php echo $homepage['Picture'];?>"/></div>
        <div class="k-col-12 ContWrapFull"><?php echo $homepage['Content']; ?></div>
         <div class="k-col-12 com_like_view_wrap">
            <div class="k-col-3 views">3000 Views</div>
            <div class="k-col-3 likes"><i fa fa-thump fa-fw>Likes (2000)</i></div>
            <div class="k-col-3 share">Share</div>
            <div class="k-col-3 comments">Comments</div>
        </div>
    </div>
    <div class="k-col-3 viewSideBar">
         <?php fileIncludes('PHP', 'VIEWSIDEBAR'); ?>
    </div>
</div>