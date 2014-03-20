<?php

    $data = array(
        "articles" => array(
            array(
                "title" => "Lucy Watson Is Lipsy’s New VIP Girl",
                "excerpt" => "Lipsy have announced Made In Chelsea star Lucy Watson as the new face of their VIP line. Here’s an exclusive look at the collection",
                //"title_catch" => "Exclusive look at Made In Chelsea star",
                "url" => "http://saudifashionmagazine.com/articles/reading/lucy-watson-is-lipsy-new-vip-girl/",
                "image" => "/images/lucywatson.png"
            ),
            array(
                "title" => "Quick guide <br> to the perfect selfie",
                "excerpt" => "We’re loving selfies right now and we know you are too! These top tips will make sure your selfie snaps are picture perfect every time",
                //"title_catch" => "Perfect selfie snaps every time...",
                "url" => "http://www.saudifashionmagazine.com/articles/reading/great-tips-on-how-to-take-an-amazing-selfie/",
                "image" => "/images/selfie.jpg"
            )
        ),

        "aside" => array(
            array(
                "title" => "Fashion Fix Of The Week",
                "feature" => "In The Monochrome Zone",
                "title_catch" => "We show you how to piece together a classy yet on-trend monochrome outfit.",
                "url" => "http://www.saudifashionmagazine.com/articles/reading/great-tips-on-how-to-take-an-amazing-selfie/",
                "image" => "/images/monochrome.png",
                "type" => "monochrome"
            ),
            array(
                "title" => "Follow Us",
                "excerpt" => "For even more fashion satisfaction, join us on $facebook, $instagram, $pinterest &amp; $twitter. <br><br />Don’t forget to <forwardtoafriend>remind your friends</forwardtoafriend> to <a href='$sfm_join_url' title='Sign Up' target='_blank'>sign up</a> to  <a href='$sfm_plus_url' title='$sfm_plus' target='_blank'>$sfm_plus</a> too!",
                "type" => "sidebar"
            )

        )

    );
?>

<table class="container">
    <tr>
        <td>

            <table class="row">
                <tr>
                    <td class="wrapper">

                        <table class="eight columns">
                            <?php foreach ($data['articles'] as $k => $v) : ?>
                                <?php $count = 1;$limit = 2;$count++; ?>
                                <tr>
                                    <td class="weekly feature-article">
                                        <?php if ($v['title']) :?><a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank"><h6><?= $v['title']; ?></h6></a><?php endif; ?>

                                        <?php if($v['image']):?>
                                        <div style="clear:both;">
                                            <a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank">
                                                <img editable src="<?= $v['image']; ?>" width="400" alt="<?= $v['title']; ?>">
                                            </a>
                                        </div>
                                        <?php endif; ?>

                                        <div style="clear:both;">
                                            <?php if($v['title_catch']) :?>
                                            <h5 style="font-size: 18px;">
                                               <a href="<?= $v['url']; ?>" title="<?= $v['title_catch'] ?>"><?= $v['title_catch']; ?></a>
                                            </h5>
                                            <?php endif; ?>
                                            <p><?= $v['excerpt'];?> </p>
                                            <p style="margin:0; text-align: right;"><a href="<?= $v['url'] ;?>" title="<?= $v['title']; ?>" target="_blank"><?= $readmore; ?></a></p>
                                        </div>
                                    </td>
                                    <td class="expander"></td>
                                </tr>

                                <?php if($count > $limit )break; ;?>
                            <?php endforeach; ?>
                        </table>

                    </td>

                    <td class="wrapper last">

                        <table class="four columns">
                            <?php foreach ($data['aside'] as $k => $v) : ?>
                                <?php $count = 1;$limit = 2;$count++; ?>
                                <tr>
                                    <td class="panel <?= $v['type'];?>">
                                        <?php if ($v['title']) :?>
                                            <h1><?= $v['title']; ?></h1>
                                        <?php endif; ?>

                                        <?php if ($v['excerpt']) :?>
                                            <p><?= $v['excerpt'];?></p>
                                        <?php endif; ?>

                                        <?php if ($v['feature']) :?>
                                            <h2><?= $v['feature'];?></h2>
                                        <?php endif; ?>

                                        <?php if($v['image']) :?>
                                            <div style="clear:both;">
                                                <a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank">
                                                    <img editable src="<?= $v['image']; ?>" width="400" alt="<?= $v['title']; ?>">
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <div style="clear:both; padding:5px 0;">
                                            <p><?= $v['title_catch'];?></p>
                                            <?php if($v['type'] != 'sidebar'): ?>
                                            <p style="margin:0; text-align: right;"><a href="<?= $v['url'] ;?>" title="<?= $v['title']; ?>" target="_blank"><?= $readmore; ?></a></p>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                    <td class="expander"></td>
                                </tr>

                                <?php if($count > $limit )break; ;?>
                            <?php endforeach; ?>
                        </table>

                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>