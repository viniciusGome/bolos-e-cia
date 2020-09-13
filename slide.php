<?php
    $img1 = "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSTxAEKzeXZ_wKBMmvlkwJzufunUQ7G9cXWcw&usqp=CAU";
    $img2 = "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT2o8ituVzVtVFTRPrzVNF6bjSCpW4oJXjPfg&usqp=CAU";
    $img3 = "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQIx3i4FzX4Mg86oUSC9cHSnXJAxYElpR16ww&usqp=CAU";

    // componente de slide feito em bootstrap
?>


<style>
    .carousel-item > img{
        width: 100%;
        height: 600px;
    }
</style>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner"><!--começo do carousel-->

<!--********************************************************************************-->
        <div class="carousel-item active">
            <img src="<?= $img1; ?>" class="d-block w-100" alt="...">
        </div>


<!--********************************************************************************-->
        <div class="carousel-item">
            <img src="<?= $img2; ?>" class="d-block w-100" alt="...">
        </div>


<!--********************************************************************************-->
        <div class="carousel-item">
            <img src="<?= $img3; ?>" class="d-block w-100" alt="...">
        </div>

    </div>


<!--*************************************************** setas de controle do carousel -->
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>


<!--********************************************************************************-->
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>