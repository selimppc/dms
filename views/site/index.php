<?php
/**
 * @var yii\web\View $this
 */
$this->title = 'iTabps ERP ';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Your iTabps ERP !</h1>

        <p class="lead">Welcome to ERP and Supply Chain Management. </p>

        <!-- <p><a class="btn btn-lg btn-success" href="http://www.itabps.com">Get started with iTabps.com</a></p> -->
    </div>



    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="..." alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="..." alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>




    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Apps Development </h2>

                <p>The LiveMedicx Solutions Limited prides itself on building robust and sophisticated web-based ERP systems.</p>

                <p><a class="btn btn-default" href="#">more &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Web Application</h2>

                <p>The LiveMedicx Solutions Limited prides itself on building robust and sophisticated web-based ERP systems. </p>

                <p><a class="btn btn-default" href="#">more &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Software Development </h2>

                <p>The LiveMedicx Solutions Limited prides itself on building robust and sophisticated web-based ERP systems.</p>

                <p><a class="btn btn-default" href="#">more &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
<?php

$a =3;
$cat = 0;

echo Yii::t('app', 'You are {n} in line, please hold..', ['n'=>$a])."<br>";
echo Yii::t('app', 'There {n, plural, =0{are no cats} =1{is one cat} other{are # cats}}!', ['n' => $cat]);

?>
<br> <br>

