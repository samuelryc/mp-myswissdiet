<?php
    require_once('action/DannyChandlerAction.php');
    $action = new DannyChandlerAction();
    $action->execute();
    $page = $action->getTranslator();
    require_once('partial/header.php');
?>

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center margin-top-10">
                    <img src="/images/chandler-danny.jpg" alt="<?php echo $page->read('alt', array('index', 'danny'));?>" class="img-circle img-responsive width40 height40">
                </div>
            </div>
        </div>

        <div class="container margin-top-50">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center margin-top-20r"><?php echo $page->read('danny', 'name');?></h1>
                    <div class="margin-top-50">
                        <ul class="text-indentation font-size-16">
                            <?php echo $page->read('danny', 't1');?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container testimonial-fancy margin-top-50 margin-bottom-50">
            <div class="testimonial-body">
                <h2 class="sr-only">TESTIMOMIAL</h2>
                <i class="fa fa-quote-left"></i>
                <div class="quote-container">
                    <p class="text-justify"><?php echo $page->read('danny', 'quote');?></p>
                    <p class="text-right signature">Danny L. Chandler</p>
                </div>
            </div>
        </div>
<?php
    require_once('partial/footer.php');
