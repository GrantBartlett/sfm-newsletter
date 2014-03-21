<?php
    $data = array(
        "articles" => array(
            array(
                "title" => "Superdry Giveaway",
                "excerpt" => "We still have a few Superdry t-shirts up for grabs. Enter now for a chance to win before they’re all gone! ",
                //"title_catch" => "$300,000 surgery spree in preparation for her upcoming wedding",
                "url" => "http://saudifashionmagazine.com/sfm-plus/offers/i-love-superdry/",
                "image" => "/images/superdrycomp.png",
                "category" => "Competition"
            ),
            array(
                "title" => "Fabulous Make-up Kit from Flormar",
                "excerpt" => "Freshen up your look and make-up kit this Spring with a fabulous make-up kit from Flormar ",
                //"title_catch" => "$300,000 surgery spree in preparation for her upcoming wedding",
                "url" => "http://saudifashionmagazine.com/sfm-plus/offers/i-love-superdry/",
                "image" => "/images/comp_flormar.png",
                "category" => "Competition"
            )
        )
    );
?>


<table class="container">
    <tr>
        <td>
            <table class="row">
                <tr>
                    <td class="wrapper last">
                        <table class="twelve columns">
                            <tr>
                                <td class="feature-article" style="margin:0;padding:0;">
                                    <a href="http://saudifashionmagazine.com/sfm-plus/" target="_blank" title="Competitions"><h6>Competitions</h6></a>
                                </td>
                                <td class="expander"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            <table class="row">
                <tr>
                    <?php foreach ($data['articles'] as $k => $v) : ?>
                    <td class="wrapper <?php if($k == '1'){ echo 'last'; } ?>">
                        <table class="six columns">
                            <tr>
                                <td class="weekly feature-article">
                                    <?php if($v['image']):?>
                                        <div style="clear:both;"><a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank">
                                            <img editable src="<?= $v['image']; ?>" style="width: 278px;" width="278" alt="<?= $v['title']; ?>" class="center"></a>
                                        </div>
                                    <?php endif; ?>

                                    <div style="clear:both;">
                                        <?php if($v['title_catch']) :?>
                                            <h5 style="font-size: 18px;">
                                                <a href="<?= $v['url']; ?>" title="<?= $v['title_catch'] ?>"><?= $v['title_catch']; ?></a>
                                            </h5>
                                        <?php endif; ?>
                                        <p><a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank" style="color: #424242!important;"><?= $v['excerpt'];?></a></p>
                                        <p style="margin:0;text-align: right;"><a href="<?= $v['url'] ?>" title="<?= $enternow; ?>" target="_blank"><?= $enternow; ?></a></p>
                                    </div>
                                </td>
                                <td class="expander"></td>
                            </tr>
                        </table>
                    </td>
                    <?php endforeach; ?>
                </tr>
            </table>

        </td>
    </tr>
</table>