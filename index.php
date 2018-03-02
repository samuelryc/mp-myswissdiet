<?php
    require_once('action/IndexAction.php');
    $action = new IndexAction();
    $action->execute();
    $page = $action->getTranslator();
    require_once('partial/header.php');
?>

          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div id="myCarousel" class="carousel slide desktop-only" data-ride="carousel">
                          <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                              <li data-target="#myCarousel" data-slide-to="3"></li>
                          </ol>

                          <div class="carousel-inner" role="listbox">
                              <div class="item active">
                                  <img src="/images/drinks-banner.jpg" alt="<?php echo $page->read('alt', array('index', 'drinks'));?>">
                              </div>
                              <div class="item">
                                  <img src="/images/proteins-banner.jpg" alt="<?php echo $page->read('alt', array('index', 'proteins'));?>">
                              </div>
                              <div class="item">
                                  <img src="/images/slim-banner.jpg" alt="<?php echo $page->read('alt', array('index', 'slim'));?>">
                              </div>
                          </div>

                          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>

                          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                      </div>
                      <div id="myCarousel-mobile" class="carousel slide mobile-only" data-ride="carousel">
                          <ol class="carousel-indicators">
                              <li data-target="#myCarousel-mobile" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel-mobile" data-slide-to="1"></li>
                              <li data-target="#myCarousel-mobile" data-slide-to="2"></li>
                              <li data-target="#myCarousel-mobile" data-slide-to="3"></li>
                          </ol>

                          <div class="carousel-inner" role="listbox">
                              <div class="item active">
                                  <img src="/images/drinks-banner-mobile.jpg" alt="<?php echo $page->read('alt', array('index', 'drinks'));?>">
                              </div>
                              <div class="item">
                                  <img src="/images/proteins-banner-mobile.jpg" alt="<?php echo $page->read('alt', array('index', 'proteins'));?>">
                              </div>
                              <div class="item">
                                  <img src="/images/slim-banner-mobile.jpg" alt="<?php echo $page->read('alt', array('index', 'slim'));?>">
                              </div>
                          </div>

                          <a class="left carousel-control" href="#myCarousel-mobile" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>

                          <a class="right carousel-control" href="#myCarousel-mobile" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                      </div>
                  </div>
              </div>
          </div>

          <div class="container margin-top-50">
              <div class="row">
                  <div class="col-md-12">
                      <h1 class="margin-bottom-50 font-size-title text-center"><?php echo $page->read('index', 'title');?></h1>
                      <p class="text-indentation text-justify font-size-16"><?php echo $page->read('index', 't1');?></p>
                      <p class="signature text-right font-size-38">Danny Chandler</p>
                      <p class="text-right margin-right-35"><?php echo $page->read('index', 'signature-title');?></p>
                  </div>
              </div>
          </div>

          <div class="container margin-top-50">
              <div class="row">
                  <div class="col-md-4">
                      <div class="boxed-content">
                          <a href="/slimming-concept"><img src="/images/salad.jpg" alt="<?php echo $page->read('alt', array('index', 'salad'));?>" class="img-thumbnail img-responsive"></a>
                          <p class="font-size-16 text-indentation margin-top-20"><?php echo $page->read('index', 't2');?></p>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="boxed-content">
                          <a href="/danny-chandler"><img src="/images/chandler-danny.jpg" alt="<?php echo $page->read('alt', array('index', 'danny'));?>" class="img-thumbnail img-responsive"></a>
                          <p class="font-size-16 text-indentation margin-top-20"><?php echo $page->read('index', 't3');?></p>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="boxed-content">
                          <a href="/partnership"><img src="/images/hands.jpg" alt="<?php echo $page->read('alt', array('index', 'hands'));?>" class="img-thumbnail img-responsive"></a>
                          <p class="font-size-16 text-indentation margin-top-20"><?php echo $page->read('index', 't4');?></p>
                      </div>
                  </div>
              </div>
          </div>

        <div class="call-to-action margin-top-50">
            <div class="container">
                <div class="pull-left">
                    <h3 class="section-heading"><?php echo $page->read('index', 'get-in-touch-title');?></h3>
                </div>
                <div class="pull-right">
                    <span><?php echo $page->read('index', 'get-in-touch-text');?></span>&nbsp;&nbsp;
                    <a href="/contact" class="btn btn-lg btn-primary"><?php echo $page->read('index', 'get-in-touch-button');?></a>
                </div>
            </div>
        </div>

<?php
    require_once('partial/footer.php');
