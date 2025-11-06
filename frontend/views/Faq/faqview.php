<?php
/* @var $this yii\web\View */
/* @var $this yii\web\View */
//print_r ($provider)
use yii\helpers\Html;
//use yii\widgets\LinkPager
use yii\bootstrap4\LinkPager;
use frontend\models\Faq;
?>
 <?php
    foreach ( $provider ->getModels() as $item) {
   
   ?>
   <hr >
   <!-- <p></p> -->
    <a href="/replay-tagname?id=<?=urlencode($item->auto)?>&&question=<?=urlencode($item->heading)?>"><?php echo $item->heading ?></a>
   <?php 
   //$test = unserialize($item->suggestedAnswerlist);
   //var_dump($test);
   //foreach ($test as $key => $value) {
   // print_r( $value);
  //}
   
    ?>
   <?php
   
    }
   ?>
   <div class="row mt-2 mr-7">
    <div class="col-6"></div>
    <div class="col-4 float-right">
    
    </div>
    <div class="col-2">
    </div>
    </div>