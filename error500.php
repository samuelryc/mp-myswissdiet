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
                    <h3>Error 505</h3>
                    <hr>
                    <p>Sorry, but the server is having some difficulties. Please try again later. Thank you for your understanding.</p>
                </div>
            </div>
        </section>

<?php
    require_once('partial/footer.php');