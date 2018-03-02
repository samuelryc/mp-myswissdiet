<?php
    require_once('action/PartnershipAction.php');
    $action = new PartnershipAction();
    $action->execute();
    $page = $action->getTranslator();
    require_once('partial/header.php');
?>

        <div class="container">
            <div class="row	">
                <div class="col-md-12">
                    <img class="img-responsive desktop-only" src="/images/hands-banner.jpg" alt="<?php echo $page->read('alt', array('index', 'hands'));?>">
                    <img class="img-responsive mobile-only" src="/images/hands-banner-mobile.jpg" alt="<?php echo $page->read('alt', array('index', 'hands'));?>">
                </div>
            </div>
        </div>


        <div class="container margin-top-50">
            <div class="row">
                <div class="col-md-6">
                    <div class="boxed-content">
                        <h2 class="margin-top-20r"><?php echo $page->read('partnership', 'h1');?></h2>
                        <hr>
                        <p class="small-text-indentation text-justify margin-top-20"><?php echo $page->read('partnership', 't1');?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="boxed-content">
                        <h2 class="margin-top-20r"><?php echo $page->read('partnership', 'h2');?></h2>
                        <hr>
                        <p class="small-text-indentation text-justify margin-top-20"><?php echo $page->read('partnership', 't2');?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="boxed-content">
                        <h2><?php echo $page->read('partnership', 'h3');?></h2>
                        <hr>
                        <p class="text-justify margin-top-20 small-text-indentation"><?php echo $page->read('partnership', 't3');?></p>
                    </div>
                </div>
            </div>
        </div>


<?php
    require_once('partial/footer.php');
