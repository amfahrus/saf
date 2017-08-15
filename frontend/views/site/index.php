<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = Yii::$app->name;
?>
<style>
    .carousel {
        width: 75%;
    }
    .carousel img {
        height: auto;
        width: auto;
        max-width: none;
    }
</style>
<div class="site-index">

    <center>
        <h1>Hello and Welcome to Daycare Fatihunnur</h1>
    
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
          </ol>
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="<?php echo Url::base().'/images/dc1.jpeg'; ?>" alt="Daycare">
              <!--<div class="carousel-caption">
                Daycare 1
              </div>-->
            </div>
            <div class="item">
              <img src="<?php echo Url::base().'/images/dc2.jpeg'; ?>" alt="Daycare">
              <!--<div class="carousel-caption">
                Daycare 1
              </div>-->
            </div>
            <div class="item">
              <img src="<?php echo Url::base().'/images/dc3.jpeg'; ?>" alt="Daycare">
              <!--<div class="carousel-caption">
                Daycare 1
              </div>-->
            </div>
            <div class="item">
              <img src="<?php echo Url::base().'/images/dc4.jpeg'; ?>" alt="Daycare">
              <!--<div class="carousel-caption">
                Daycare 1
              </div>-->
            </div>
            <div class="item">
              <img src="<?php echo Url::base().'/images/dc5.jpeg'; ?>" alt="Daycare">
              <!--<div class="carousel-caption">
                Daycare 1
              </div>-->
            </div>
            <div class="item">
              <img src="<?php echo Url::base().'/images/dc6.jpeg'; ?>" alt="Daycare">
              <!--<div class="carousel-caption">
                Daycare 1
              </div>-->
            </div>
          </div>
        
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
            
    </center>

</div>
