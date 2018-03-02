<?php
    require_once('action/ErrorAction.php');
    $action = new ErrorAction();
    $action->execute();
    $page = $action->getTranslator();
    require_once('partial/header.php');
?>

        <section>
            <div class="container">
                <div class='errorPageSpacing'>
                    <h3>Error 404</h3>
                    <hr>
                    <p>Sorry, this page doesn't exit! If you believe «<a href="<?php "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">http://<?php echo "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?></a>» is a valid link, please let us know by <a href="/contact">contacting us</a>. Thank you.</p>
                </div>
            </div>
        </section>

<?php
    require_once('partial/footer.php');