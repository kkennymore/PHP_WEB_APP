<section class="k-col-12 sliderContentWrapper">
    <div id="slider_wrapper">
        <div id="container" class="slider">
            <div id="amazingslider-1">
                <ul class="amazingslider-slides">
                    <?php
                    $slider = new SliderPage();
                    $sliders = $slider->getSlide(11);
                    foreach ($sliders as $slide) {
                        ?>
                        <li>
                            <?php if(urlArrayPos(1) === ''){ ?>
                              <a href="/en/home/view/<?php echo $slide['ID'];?>"><img src="/Webroot/Img/Posted/<?php echo $slide['Picture'];?>" alt="<?php echo substr(strip_tags($slide['Title']),0,70);?>"/></a>
                               <?php }else{?>
                              <a href="/<?php echo urlArrayPos(1) ?>/<?php echo urlArrayPos(2) ?>/view/<?php echo $slide['ID'];?>"><img src="/Webroot/Img/Posted/<?php echo $slide['Picture'];?>" alt="<?php echo substr(strip_tags($slide['Title']),0,70);?>"/></a>
                                <?php }?>
                            
                            
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>