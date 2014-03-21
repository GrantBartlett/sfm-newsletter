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
                "title" => "Picture Of the Week",
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
                                    <?php if ($v['title']) :?><a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank"><h6><?= $v['title']; ?></h6></a><?php endif; ?>
                                    <?php if($v['image']):?>
                                    <div style="clear:both;"><a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank">
                                        <center>
                                        <img editable src="<?= $v['image']; ?>" style="width: 278px;" width="278" alt="<?= $v['title']; ?>" class="center"></a>
                                        </center>
                                    </div>
                                    <?php endif; ?>

                                    <div style="clear:both;">
                                        <?php if($v['title_catch']) :?>
                                        <h5 style="font-size: 18px;">
                                            <a href="<?= $v['url']; ?>" title="<?= $v['title_catch'] ?>"><?= $v['title_catch']; ?></a>
                                        </h5>
                                        <?php endif; ?>
                                        <p><?= $v['excerpt'];?></p>
                                        <p style="margin:0; text-align: right;"><a href="<?= $v['url'] ;?>" title="<?= $v['title']; ?>" target="_blank"><?= $readmore; ?></a></p>
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
                                        <?php if ($v['title']) :?><a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank"><h6 style="padding: 29px;background: #242424;"><?= $v['title']; ?></h6></a><?php endif; ?>
                                        <?php if($v['image']):?>
                                            <div style="clear:both;"><a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank">
                                                <center>
                                                <img editable src="<?= $v['image']; ?>" style="width: 278px;" width="278" alt="<?= $v['title']; ?>" class="center"></a>
                                                </center>
                                            </div>
                                        <?php endif; ?>

                                        <div style="clear:both;padding: 10px 10px 32px;">
                                            <?php if($v['title_catch']) :?>
                                                <h5 style="font-size: 18px;">
                                                    <a href="<?= $v['url']; ?>" title="<?= $v['title_catch'] ?>"><?= $v['title_catch']; ?></a>
                                                </h5>
                                            <?php endif; ?>
                                            <p><?= $v['excerpt'];?></p>

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




