<?php
    $data = array(
        "articles" => array(
            array(
                "title" => "Kim K Spends Thousands On Plastic Surgery",
                "excerpt" => "The glamorous 33-year-old has splashed out on a $300,000 surgery spree in preparation for her upcoming wedding.",
                //"title_catch" => "$300,000 surgery spree in preparation for her upcoming wedding",
                "url" => "http://www.saudifashionmagazine.com/articles/reading/kim-k-spends-thousands-on-plastic-surgery/",
                "image" => "/images/kimk.png"
            )
        ),

        "potw" => array(
            array(
                "title" => "Picture Of The Week",
                "excerpt" => "Want to see more exclusive fashion snapshots? <br><br/>  Follow SFM on $instagram today!",
                //"title_catch" => "$300,000 surgery spree in preparation for her upcoming wedding",
                "url" => "http://instagram.com/p/lslL_cKj0Y/",
                "image" => "/images/pictureoftheweek.png"
            )
        ),

    );
?>


<table class="container">
    <tr>
        <td>
            <table class="row">
                <tr>
                    <td class="wrapper ">
                        <table class="six columns">

                            <?php foreach ($data['articles'] as $k => $v) : ?>
                            <tr>
                                <td class="weekly feature-article">
                                    <div style="margin: 25px;">
                                        <?php if ($v['title']) :?><h6><a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank"><?= $v['title']; ?></a></h6><?php endif; ?>
                                    </div>
                                    <?php if($v['image']):?>
                                    <div style="clear:both;"><a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank">
                                        <center>
                                        <img editable src="<?= $v['image']; ?>" style="width: 278px;" width="278" height="278" alt="<?= $v['title']; ?>" class="center"></a>
                                        </center>
                                    </div>
                                    <?php endif; ?>

                                    <div style="clear:both;">
                                        <?php if($v['title_catch']) :?>
                                        <h5 style="font-size: 18px;">
                                            <a href="<?= $v['url']; ?>" title="<?= $v['title_catch'] ?>"><?= $v['title_catch']; ?></a>
                                        </h5>
                                        <?php endif; ?>
                                        <div style="margin: 10px;"><p><?= $v['excerpt'];?></p></div>
                                        <div style="margin: 10px;text-align: right;"><p style="text-align: right;"><a href="<?= $v['url'] ;?>" title="<?= $v['title']; ?>" target="_blank"><?= $readmore; ?></a></p></div>
                                    </div>
                                </td>
                                <td class="expander"></td>
                            </tr>
                            <?php endforeach; ?>

                        </table>
                    </td>

                    <td class="wrapper last">
                        <table class="six columns">

                            <?php foreach ($data['potw'] as $k => $v) : ?>
                                <tr>
                                    <td class="feature-article monochrome-main">
                                        <div style="margin: 25px;padding: 12px;">
                                            <?php if ($v['title']) :?>
                                                <h6 style="color: #F0F0F0!important;"><a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank" style="color: #F0F0F0!important;"><?= $v['title']; ?></a></h6>
                                            <?php endif; ?>
                                        </div>
                                        <?php if($v['image']):?>
                                            <div style="clear:both;">
                                                <a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank">
                                                <center>
                                                <img editable src="<?= $v['image']; ?>" style="width: 278px;" width="278" height="278" alt="<?= $v['title']; ?>" class="center">
                                                </center>
                                                </a>
                                            </div>
                                        <?php endif; ?>

                                        <div style="clear:both;">
                                            <?php if($v['title_catch']) :?>
                                                <h5 style="font-size: 18px;">
                                                    <a href="<?= $v['url']; ?>" title="<?= $v['title_catch'] ?>"><?= $v['title_catch']; ?></a>
                                                </h5>
                                            <?php endif; ?>
                                            <div style="margin: 10px;padding: 0 0 37px;"><p><?= $v['excerpt'];?></p></div>
                                        </div>
                                    </td>
                                    <td class="expander"></td>
                                </tr>
                            <?php endforeach; ?>

                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>




