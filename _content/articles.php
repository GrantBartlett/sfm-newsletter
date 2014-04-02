<?php
    $data = array(
        "articles" => array(
            array(
                "title" => "Lucy Watson Is Lipsy’s New VIP Girl",
                "excerpt" => "Lipsy have announced Made In Chelsea star Lucy Watson as the new face of their VIP line. Here’s an exclusive look at the collection.",
                //"title_catch" => "Exclusive look at Made In Chelsea star",
                "url" => "http://saudifashionmagazine.com/articles/reading/lucy-watson-is-lipsy-new-vip-girl/",
                "image" => "/images/lucywatson.png"
            ),
            array(
                "title" => "Quick guide to the perfect selfie",
                "excerpt" => "We’re loving selfies right now and we know you are too! These top tips will make sure your selfie snaps are picture perfect every time.",
                //"title_catch" => "Perfect selfie snaps every time...",
                "url" => "http://www.saudifashionmagazine.com/articles/reading/great-tips-on-how-to-take-an-amazing-selfie/",
                "image" => "/images/selfie.jpg"
            )
        ),

        "aside" => array(
            array(
                "title" => "",
                "excerpt" => "For even more fashion news, join us on $facebook, $twitter, $instagram &amp; $pinterest. <br><br />Don’t forget to <forwardtoafriend>remind your friends</forwardtoafriend> to <a href='$sfm_join_url' title='Sign Up' target='_blank'>sign up</a> to  <a href='$sfm_plus_url' title='$sfm_plus' target='_blank'>$sfm_plus</a> too",
                "type" => "sidebar"
            ),
            array(
                "title" => "Fashion Fix Of The Week",
                "feature" => "In The Monochrome Zone",
                "title_catch" => "We show you how to piece together a classy yet on-trend monochrome outfit.",
                "url" => "http://saudifashionmagazine.com/fashion-fix/viewing/classy-yet-sassy/",
                "image" => "/images/monochrome.png",
                "type" => "monochrome"
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
                                        <?php if ($v['title']) :?>
                                        <div style="margin: 25px;">
                                            <h5 style="font-size: 18px;text-align: center;">
                                                <a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank"><singleline><?= $v['title']; ?></singleline></a>
                                            </h5>
                                        </div>
                                        <?php endif; ?>
                                        <?php if($v['image']):?>
                                        <div style="clear:both;">
                                            <a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank">
                                                <center>
                                                    <img editable src="<?= $v['image']; ?>" width="370" height="259" alt="<?= $v['title']; ?>" class="center">
                                                </center>
                                            </a>
                                        </div>
                                        <?php endif; ?>

                                        <div style="clear:both;margin: 10px;">
                                            <?php if($v['title_catch']) :?>
                                            <h5 style="font-size: 18px;">
                                               <a href="<?= $v['url']; ?>" title="<?= $v['title_catch'] ?>"><singleline><?= $v['title_catch']; ?></singleline></a>
                                            </h5>
                                            <?php endif; ?>
                                            <p><multiline><?= $v['excerpt'];?></multiline></p>
                                        </div>
                                        <div style="clear:both;margin: 10px;text-align: right;">
                                            <p style="margin:0; text-align: right;"><multiline><a href="<?= $v['url'] ;?>" title="<?= $v['title']; ?>" target="_blank"><?= $readmore; ?></a></multiline></p>
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
                                            <div style="margin: 25px;text-align: center;">
                                                <h1><singleline><?= $v['title']; ?></singleline></h1>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($v['excerpt']) :?>
                                            <p><multiline><?= $v['excerpt'];?></multiline></p>
                                        <?php endif; ?>


                                        <?php if($v['image']) :?>
                                            <div style="clear:both;">
                                                <center>
                                                <a href="<?= $v['url']; ?>" title="<?= $v['title']; ?>" target="_blank">
                                                    <img editable src="<?= $v['image']; ?>" width="158" height="207" alt="<?= $v['title']; ?>" class="center">
                                                </a>
                                                </center>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($v['feature']) :?>
                                            <h2 style="color: #F5F5F5!important;">
                                                <a href="<?= $v['url']; ?>" title="<? $v['title'];?>" target="_blank" style="color: #F5F5F5!important;">
                                                    <singleline><?= $v['feature'];?></singleline>
                                                </a>
                                            </h2>
                                        <?php endif; ?>

                                        <div style="clear:both;margin: 15px;">
                                            <p><multiline><?= $v['title_catch'];?></multiline></p>
                                        </div>

                                        <?php if($v['type'] != 'sidebar'): ?>
                                            <div style="margin: 10px;text-align: right;"><p style="text-align: right;"><multiline><a href="<?= $v['url'] ;?>" title="<?= $v['title']; ?>" target="_blank"><?= $readmore; ?></a></multiline></p></div>
                                        <?php endif; ?>
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