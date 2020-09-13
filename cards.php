
<?php // pagina de bolos em destaque que fica na home
$img = "https://images.unsplash.com/photo-1598642965554-eaa5f0362997?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80";

for ($i=0; $i <3 ; $i++) { ?>

    <div class="card col-3" style="width: 18rem;">
        <img src="<?= $img;?>" class="card-img-top " alt="..." style="height: 250px;">

        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

<?php } ?>
