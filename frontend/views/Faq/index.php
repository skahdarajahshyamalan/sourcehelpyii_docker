<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\Faqsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Faqs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faq-index">

<!-- <h1><?//= Html::encode($this->title) ?></h1> -->

 
<div class="container">

<?php Pjax::begin(); ?>
<div class="row">
    <div class="col-sm-8">
    <a class="btn btn-success" href="faq/create">Create</a>
    </div>
    <div class="col-sm-4">
     <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    </div>
  </div>
 <hr>
 <div class="row">
 <?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemOptions' => ['class' => 'item'],
    'itemView' => function ($model, $key, $index, $widget) {
       // Count questions in question_idlist
       $questionCount = 0;
       if (!empty($model->question_idlist)) {
           $questionIds = json_decode($model->question_idlist, true);
           if (is_array($questionIds)) {
               $questionCount = count($questionIds);
           }
       }
       
       echo '
  <div class="col-sm-3 mt-1">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">'.$model->tagname.' <span class="badge badge-secondary">'.$questionCount.'</span></h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <p></p>
        '.Html::a('Go Question', ['faq/faqview', 'Tags' =>$model->tagname], ['class'=>'btn btn-primary']).'
      </div>
    </div>
  </div>
  
';
    },
]) ?>
</div>
</div>
</div>
</div>
<?php Pjax::end(); ?>
</div>
</div>
 
  
  
      
      
  
        
