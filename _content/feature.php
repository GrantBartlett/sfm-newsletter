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

                            <?php foreach ($data['articles'] as $k => $v) : ?>
                            <tr>
                                <td class="weekly feature-article">
                                    <?php if ($v['title']) :?><a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank"><h6><?= $v['title']; ?></h6></a><?php endif; ?>
                                    <?php if($v['image']):?>
                                    <div style="clear:both;"><a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank">
                                        <img editable src="<?= $v['image']; ?>" style="width: 580px;" width="580" alt="<?= $v['title']; ?>"></a>
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
                </tr>
            </table>
        </td>
    </tr>
</table>