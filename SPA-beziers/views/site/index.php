<?php

/* @var $this yii\web\View */

$this->title = 'SPA Béziers';
?>
<div class="site-index">


<div class="row">
    <div class="col-md-5">
       <?php if($sauvetages!==false){
       ?>  
            <h2 style="text-align:center">Adoptez un de nos chiens sauvetage !</h2>
       
       <?php
       }
       ?>
    </div>
    <div class="col-md-5 col-md-offset-2">
        <h2>Adoptez notre chien du mois !</h2>
    </div>
</div>
<div class="row">
  <div class="col-md-5">
       <?php
       if($sauvetages!==false){
            $images[]=null;
            $i=0;
            foreach ($sauvetages as $photo) {
                $images[$i]=[
                    'content' => "<img src=\"./images/".$photo['type']."s/".$photo['photo']."\">", 
                    'options' => ['style' => 'width:auto;height:400px;background-color:white;color:white;margin:0px auto']
                ];
                $i++;
            }
            echo yii\bootstrap\Carousel::widget([
                'items'=>$images,
            ]);
       }

    ?>
  
  </div>
 
  <div class="col-md-5 col-md-offset-2" >
    <?php
       if($animalDuMois!==false){
            $images[]=null;
            $i=0;
            foreach ($animalDuMois as $photo) {
                $photosMois[$i]=[
                    'content' => "<img src=\"./images/".$photo['type']."s/".$photo['photo']."\">", 
                    'options' => ['style' => 'width:auto;height:50%;background-color:white;color:white;margin:0px auto']
                ];
                $i++;
            }
            echo yii\bootstrap\Carousel::widget([
                'items'=>$photosMois,
            ]);
       }
    ?>
  </div>
</div>
  
    
    <?php
        if($anniversaire!==false){        
    ?>
<div class="row">
    <div class="col-md-12" style="text-align:center"><h2>Bon anniversaire <?php echo $anniversaire[0]['nom']; ?> !</h2></div>
</div>
<div class="row">
  <div class="col-md-7">
    <?php
       if($anniversaire!==false){
            $images[]=null;
            $i=0;
            foreach ($anniversaire as $photo) {
                $photosAnniversaire[$i]=[
                    'content' => "<img src=\"./images/".$photo['type']."s/".$photo['photo']."\">", 
                    'options' => ['style' => 'width:auto;height:500px;background-color:white;color:white;margin:0px auto']
                ];
                $i++;
            }
            echo yii\bootstrap\Carousel::widget([
                'items'=>$photosAnniversaire,
            ]);
       }
    ?>
  
  </div>
  <div class="col-md-5"  >
      <p>
          Pour <?php echo $anniversaire[0]['nom']; ?>, nous souhaitons qu'une famille tombe sous son charme et découvre quel trésor se cache dans son petit coeur . 
      </p>
          
      <p>
          Nous lui souhaitons tout le bonheur du monde et nous espérons avec force qu'aucun autre de ses anniversaires ne sera célébré au refuge.
          
      </p>
  </div>
</div>
    
    <?php 
        }
   ?>
        
        
        
        
        
</div>
