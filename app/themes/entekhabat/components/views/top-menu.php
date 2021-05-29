<?php
use yii\bootstrap\Nav;

/* @var $items Array */
?>
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
    <button 
        class="navbar-toggler navbar-toggler-right" 
        type="button" 
        data-toggle="collapse" 
        data-target="#navbarCollapse" 
        aria-controls="navbarCollapse" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/"><img src="/images/version/tech-logo.png" alt=""></a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <?php 
            echo Nav::widget([
                'items' => $items,
                'options' => ['class' =>'navbar-nav mr-auto'], // set this to nav-tab to get tab-styled navigation
            ]);
        ?>
        
    </div>
</nav>