<?php
    require_once('action/ContactAction.php');
    $action = new ContactAction();
    $action->execute();
    $page = $action->getTranslator();
    require_once('partial/header.php');
?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="margin-top-30"><?php echo $page->read('contact', 'questions');?></h2>
                    <hr>
                    <div class="text-indentation text-justify font-size-16"><?php echo $page->read('contact', 't1');?></div>
                </div>
            </div>
        </div>

        <div class="container margin-top-50 margin-bottom-50">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php echo $page->read('contact', 'contactus');?></h2>
                    <hr>
                    <form role="form" action="/contact" method="POST">
                        <div class="form-group">
                            <label class="font-size-16 no-bold" for="name"><?php echo $page->read('contact', 'name');?></label>
                            <input type="text" name="name" value="<?php if(isset($_SESSION['name'])) { echo $_SESSION['name']; } ?>" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label class="font-size-16 no-bold" for="email"><?php echo $page->read('contact', 'email');?></label>
                            <input type="email" name="email" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['email']; } ?>" class="form-control" id="email">
                        </div>
                        <div class="form-group display-none">
                            <label class="font-size-16 no-bold" for="name">Lastname:</label>
                            <input type="text" name="lastname" class="form-control" id="lastname">
                        </div>
                        <div class="form-group">
                            <label class="font-size-16 no-bold" for="message"><?php echo $page->read('contact', 'message');?></label>
                            <textarea name="message" class="form-control"><?php if(isset($_SESSION['message'])) { echo $_SESSION['message']; } ?></textarea>
                        </div>
                        <button type="submit" name="btnSubmit" class="btn btn-default"><?php echo $page->read('contact', 'send');?></button>
                    </form>
                    <?php if ($action->getSuccess() == 1) { ?>
                    <div class="message">
                        <p><?php echo $page->read('contact', 'success');?>!</p>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

<?php
    require_once('partial/footer.php');
