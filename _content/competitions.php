<?php
    $data = array(
        "articles" => array(
            array(
                "title" => "I Love Superdry",
                "excerpt" => "We still have a few Superdry t-shirts up for grabs. Enter now for a chance to win before they’re all gone! ",
                //"title_catch" => "$300,000 surgery spree in preparation for her upcoming wedding",
                "url" => "http://www.saudifashionmagazine.com/articles/reading/kim-k-spends-thousands-on-plastic-surgery/",
                "image" => "/images/superdrycomp.png"
            ),
            array(
                "title" => "I Love Superdry",
                "excerpt" => "We still have a few Superdry t-shirts up for grabs. Enter now for a chance to win before they’re all gone! ",
                //"title_catch" => "$300,000 surgery spree in preparation for her upcoming wedding",
                "url" => "http://www.saudifashionmagazine.com/articles/reading/kim-k-spends-thousands-on-plastic-surgery/",
                "image" => "/images/superdrycomp.png"
            )
        )
    );
?>


<table class="container">
    <tr>
        <td>

            <table class="row">
                <tr>
                    <?php foreach ($data['articles'] as $k => $v) : ?>
                    <td class="wrapper <?php if($k == '1'){ echo 'last'; } ?>">

                        <table class="six columns">

                            <tr>
                                <td class="weekly comp">
                                    <?php if($v['image']):?>
                                        <div style="clear:both;"><a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank">
                                            <img editable src="<?= $v['image']; ?>" style="width: 400px;" width="400" alt="<?= $v['title']; ?>"></a>
                                        </div>
                                    <?php endif; ?>
                                    <div style="clear:both;">
                                        <h6>
                                            <a href="<?= $v['url']; ?>" style="color: #F45147 !important;font-weight: bold;" title="<?= $v['title']; ?>" target="_blank"><?= $v['title']; ?></a>
                                        </h6>
                                    </div>
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