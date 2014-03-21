<?php
    $data = array(
        "articles" => array(
            array(
                "title" => "Superdry Giveaway",
                "excerpt" => "We still have a few Superdry t-shirts up for grabs. Enter now for a chance to win before they’re all gone.",
                "title_catch" => "Superdry T-Shirt Giveaway",
                "url" => "http://saudifashionmagazine.com/sfm-plus/offers/i-love-superdry/",
                "image" => "/images/superdrycomp.png",
                "category" => "Competition"
            ),
            array(
                "title" => "Make-up Kit from Flormar",
                "excerpt" => "We’ve got an amazing selection of Flormar goodies to give away to a lucky winner.",
                "title_catch" => "Flormar Make-up Kit",
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

                    <?php foreach ($data['articles'] as $k => $v) : ?>
                    <td class="wrapper <?php if($k == '1'){ echo 'last'; } ?>">
                        <table class="six columns">
                            <tr>
                                <td class="weekly feature-article">
                                    <?php if($v['image']):?>
                                        <?php if($v['title_catch']) :?>
                                            <div style="margin: 25px;">
                                                <h5 style="font-size: 18px; text-align: center;">
                                                    <a href="<?= $v['url']; ?>" title="<?= $v['title_catch'] ?>"><?= $v['title_catch']; ?></a>
                                                </h5>
                                            </div>
                                        <?php endif; ?>
                                        <div style="clear:both;"><a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank">
                                            <img editable src="<?= $v['image']; ?>" style="width: 278px;" width="278" height="195" alt="<?= $v['title']; ?>" class="center"></a>
                                        </div>
                                    <?php endif; ?>

                                    <div style="clear:both;">
                                        <div style="margin: 10px;"><p><?= $v['excerpt'];?></p></div>
                                        <div style="margin: 10px;text-align: right;"><p style="text-align: right;"><a href="<?= $v['url'] ;?>" title="<?= $v['title']; ?>" target="_blank"><?= $enternow; ?></a></p></div>
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