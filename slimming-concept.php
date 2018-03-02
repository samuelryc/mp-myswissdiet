<?php
    require_once('action/SlimmingConceptAction.php');
    $action = new SlimmingConceptAction();
    $action->execute();
    $page = $action->getTranslator();
    require_once('partial/header.php');
?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img class="desktop-only img-responsive" src="/images/salad-banner.jpg" alt="<?php echo $page->read('alt', array('index', 'salad'));?>">
                    <img class="mobile-only img-responsive" src="/images/salad-banner-mobile.jpg" alt="<?php echo $page->read('alt', array('index', 'salad'));?>">
                </div>
            </div>
        </div>

        <div class="container margin-top-50 margin-bottom-50">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-size-title text-center margin-top-20r"><?php echo $page->read('slimming', 'h1');?></h2>
                    <hr>
                    <p class="small-text-indentation font-size-16 text-justify margin-top-30"><?php echo $page->read('slimming', 't1');?></p>
                    <p class="small-text-indentation font-size-16 text-justify margin-top-20"><?php echo $page->read('slimming', 't2');?></p>
                </div>
            </div>
        </div>

<?php
    require_once('partial/footer.php');
