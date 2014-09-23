<?php
/**
 * @var yii\web\View $this
 */
$this->title = 'iTabps ERP ';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Your iTabp's ERP !</h1>

        <p class="lead">Welcome to our Data Management System. </p>

        <!-- <p><a class="btn btn-lg btn-success" href="http://www.itabps.com">Get started with iTabps.com</a></p> -->
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
