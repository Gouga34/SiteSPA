<?php

/* @var $this yii\web\View */
/* @var $photos liste des photos à afficher */
    $this->title = 'Ils ont trouvé le bonheur';
    $this->params['breadcrumbs'][] = $this->title;

    $count=count($photos);
    for ($i = 0; $i < $count; $i++) {
        if($i%3===0){
            if($i!==0){ //On ferme la ligne précédente
                echo "</div>";
            }
            echo "<div class=\"row\">";
        }
        echo "<div class=\"col-lg-4 col-sm-6 col-xs-12\">";
            echo "<a href=\"#\">"; //TODO : LIEN VERS IMAGE
                echo "<img src=\"".
                        \Yii::$app->request->BaseUrl.'/images/nouvellesAdoptes/'.$photos[$i]['photo']."\"class=\"thumbnail img-responsive\">";
            echo "</a>";
        echo "</div>";
    }
    
?>



<!--   
    <h2>3-2-1 grid example<p class="lead">3 columns on desktop, 2 columns on tablets, 1 columns on phones</p></h2>
  <div class="row">
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive">
        </a>
    </div>
  </div>
  <hr>
  	<h2 class="text-center"><a href="http://www.bootply.com/d08bOti6Zs">Edit on Bootply</a></h2>
  <hr>
</div>
    -->
